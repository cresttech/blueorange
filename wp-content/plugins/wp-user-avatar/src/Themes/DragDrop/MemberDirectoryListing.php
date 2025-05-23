<?php

namespace ProfilePress\Core\Themes\DragDrop;

use ProfilePress\Core\Classes\FormRepository as FR;
use ProfilePress\Core\Classes\PROFILEPRESS_sql;
use ProfilePress\Core\Membership\CheckoutFields;

class MemberDirectoryListing
{
    private int $user_id;

    private array $field_settings;

    private string $output = '';

    private array $defaults;

    public function __construct($directory_id, $user_id = false)
    {
        $this->user_id = absint($user_id);

        $this->field_settings = FR::form_builder_fields_settings($directory_id, FR::MEMBERS_DIRECTORY_TYPE);
    }

    public function defaults($defaults): MemberDirectoryListing
    {
        $this->defaults = $defaults;

        return $this;
    }

    public function forge(): MemberDirectoryListing
    {
        $output = '';

        foreach ($this->field_settings as $field_setting) {

            $field_type = $raw_field_type = $field_setting['fieldType'];

            if (isset($this->defaults, $this->defaults[$field_type])) {
                $field_setting = wp_parse_args($field_setting, $this->defaults[$field_type]);
            }

            $field_title = $field_setting['label'] ?? '';

            if ($field_type == 'profile-cpf') {

                $field_key = '';

                if ( ! empty($field_setting['field_key']) && ! empty($field_setting['label'])) {

                    $field_key = $field_setting['field_key'];

                } elseif ( ! empty($field_setting['custom_field'])) {

                    $field_key = $field_setting['custom_field'];

                    $custom_field_title = PROFILEPRESS_sql::get_field_label($field_key);

                    if ( ! $custom_field_title) {
                        $custom_field_title = PROFILEPRESS_sql::get_contact_info_field_label($field_key);
                    }

                    if ( ! empty($custom_field_title)) $field_title = $custom_field_title;
                }

                $field_type = $field_type . ' key="' . $field_key . '"';
            }

            if ($field_type == 'profile-display-name') {

                if ( ! empty($field_setting['format'])) {

                    $format = $field_setting['format'];

                    $field_type = $field_type . ' format="' . $format . '"';
                }
            }

            if ($field_type == 'pp-custom-html') {

                if ( ! empty($field_setting['custom_html'])) {

                    $field_type = $field_type . ' custom_html="' . base64_encode($field_setting['custom_html']) . '"';
                }
            }

            // it's important the shortcode is parsed because FrontendProfileBuilder class is instantiated for each user iteration
            $parsed_shortcode = do_shortcode('[' . $field_type . ']', true);

            if ( ! empty($parsed_shortcode)) {

                if ( ! empty($field_key) && $raw_field_type == 'profile-cpf') {
                    if (in_array($field_key, array_keys(ppress_social_network_fields()))) {
                        $parsed_shortcode = sprintf('<a href="%s">%s</a>', $parsed_shortcode, ppress_var(ppress_social_network_fields(), $field_key));
                    }

                    $custom_field_type = PROFILEPRESS_sql::get_field_type($field_key);

                    if ($field_key == CheckoutFields::BILLING_COUNTRY || $custom_field_type == 'country') {
                        $parsed_shortcode = ppress_get_country_title($parsed_shortcode);
                    }

                    if ($field_key == CheckoutFields::BILLING_STATE) {
                        $db_country       = get_user_meta($this->user_id, CheckoutFields::BILLING_COUNTRY, true);
                        $parsed_shortcode = ppress_get_country_state_title($parsed_shortcode, $db_country);
                    }

                    $parsed_shortcode = apply_filters(' ppress_md_profile_cpf', $parsed_shortcode, $field_key, $custom_field_type, $this->user_id);
                }

                if ($raw_field_type == 'profile-display-name') {

                    $parsed_shortcode = sprintf(
                        '<a href="%s">%s</a>',
                        ppress_get_frontend_profile_url($this->user_id),
                        $parsed_shortcode
                    );
                }

                if ($raw_field_type == 'profile-bio') {
                    $bio = get_user_meta($this->user_id, 'description', true);

                    $parsed_shortcode = apply_filters('ppress_md_profile_bio', $bio, $this->user_id);
                }

                if ($raw_field_type == 'profile-website') {

                    $parsed_shortcode = sprintf(
                        '<a href="%s">%s</a>',
                        $parsed_shortcode,
                        ! empty($field_title) ? wp_kses_post($field_title) : esc_html__('Website', 'wp-user-avatar')
                    );
                    $parsed_shortcode = make_clickable($parsed_shortcode);
                    $parsed_shortcode = apply_filters('ppress_md_profile_website', $parsed_shortcode, $this->user_id);
                }

                $output .= sprintf('<div class="ppress-md-profile-item-wrap %s">', $raw_field_type);

                if ( ! empty($field_title) && $raw_field_type != 'profile-website') {
                    $output .= sprintf('<span class="ppress-md-profile-item-title">%s:</span> ', wp_kses_post($field_title));
                }

                $output .= sprintf('%s', $parsed_shortcode);

                $output .= '</div>';
            }
        }

        $this->output = $output;

        return $this;
    }

    public function output(): string
    {
        return $this->output;
    }
}
