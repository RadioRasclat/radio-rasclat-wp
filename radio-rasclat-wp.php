<?php

/**
 * Plugin Name: Radio Rasclat Schedule / Live
 * Plugin URI: https://radio-rasclat.com
 * Description: Display Radio Rasclat schedule and live meta data.
 * Version: 0.1
 * Text Domain: radio-rasclat-wp
 * Author: Domenik Toefflinger
 * Author URI: https://dmnktoe.de
 */

// construct the main API url
$GLOBALS['apiUrl'] = 'https://api.radio-rasclat.com/meta/';

// initialize style assets
function initializeAssets() {
    wp_enqueue_style('style', plugins_url('/css/style.css', __FILE__));
}

add_action('wp_enqueue_scripts', 'initializeAssets');

// register shortcodes
add_shortcode('radio-rasclat-schedule', 'getSchedule');
add_shortcode('radio-rasclat-meta', 'getLiveMeta');

function getSchedule() {
    $endpoint = $GLOBALS['apiUrl'] . 'schedule';
    $session = curl_init($endpoint);
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($session);
    curl_close($session);
    $schedule = json_decode($data, true);
    if ($schedule === NULL) die('Error parsing Radio Rasclat schedule.'); ?>

    <div id="rasclatSchedule">
        <div class="schedule__list">
            <?php
            if (sizeof($schedule['monday']) > 0) {
                echo '<div class="schedule__list__day">';
                echo '<div class="schedule__list__day__headline">';
                echo '<h2>Montag</h2>';
                echo '</div>';
                echo '<div class="schedule__list__day__entries">';
                if (is_array($schedule['monday'])) {
                    foreach ($schedule['monday'] as $entry) {
                        echo '<div class="schedule__list__day__entry">';
                        echo '<div class="schedule__list__day__entry__image">';
                        if (!$entry['image_path']) {
                            $entry['image_path'] = 'https://radio-rasclat.com/assets/svg/logo.svg';
                        }
                        echo '<img src="' . $entry['image_path'] . '">';
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info">';
                        echo '<div class="schedule__list__day__entry__info__time">';
                        echo date("G:i", strtotime($entry['starts'])) . ' - ' . date("G:i", strtotime($entry['ends']));
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info__title">';
                        echo '<h3>' . $entry['name'] . '</h3>';
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info__desc">';
                        echo '<p>' . $entry['description'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
            <?php
            if (sizeof($schedule['tuesday']) > 0) {
                echo '<div class="schedule__list__day">';
                echo '<div class="schedule__list__day__headline">';
                echo '<h2>Dienstag</h2>';
                echo '</div>';
                echo '<div class="schedule__list__day__entries">';
                if (is_array($schedule['tuesday'])) {
                    foreach ($schedule['tuesday'] as $entry) {
                        echo '<div class="schedule__list__day__entry">';
                        echo '<div class="schedule__list__day__entry__image">';
                        if (!$entry['image_path']) {
                            $entry['image_path'] = 'https://radio-rasclat.com/assets/svg/logo.svg';
                        }
                        echo '<img src="' . $entry['image_path'] . '">';
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info">';
                        echo '<div class="schedule__list__day__entry__info__time">';
                        echo date("G:i", strtotime($entry['starts'])) . ' - ' . date("G:i", strtotime($entry['ends']));
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info__title">';
                        echo '<h3>' . $entry['name'] . '</h3>';
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info__desc">';
                        echo '<p>' . $entry['description'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
            <?php
            if (sizeof($schedule['wednesday']) > 0) {
                echo '<div class="schedule__list__day">';
                echo '<div class="schedule__list__day__headline">';
                echo '<h2>Mittwoch</h2>';
                echo '</div>';
                echo '<div class="schedule__list__day__entries">';
                if (is_array($schedule['wednesday'])) {
                    foreach ($schedule['wednesday'] as $entry) {
                        echo '<div class="schedule__list__day__entry">';
                        echo '<div class="schedule__list__day__entry__image">';
                        if (!$entry['image_path']) {
                            $entry['image_path'] = 'https://radio-rasclat.com/assets/svg/logo.svg';
                        }
                        echo '<img src="' . $entry['image_path'] . '">';
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info">';
                        echo '<div class="schedule__list__day__entry__info__time">';
                        echo date("G:i", strtotime($entry['starts'])) . ' - ' . date("G:i", strtotime($entry['ends']));
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info__title">';
                        echo '<h3>' . $entry['name'] . '</h3>';
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info__desc">';
                        echo '<p>' . $entry['description'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
            <?php
            if (sizeof($schedule['thursday']) > 0) {
                echo '<div class="schedule__list__day">';
                echo '<div class="schedule__list__day__headline">';
                echo '<h2>Donnerstag</h2>';
                echo '</div>';
                echo '<div class="schedule__list__day__entries">';
                if (is_array($schedule['thursday'])) {
                    foreach ($schedule['thursday'] as $entry) {
                        echo '<div class="schedule__list__day__entry">';
                        echo '<div class="schedule__list__day__entry__image">';
                        if (!$entry['image_path']) {
                            $entry['image_path'] = 'https://radio-rasclat.com/assets/svg/logo.svg';
                        }
                        echo '<img src="' . $entry['image_path'] . '">';
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info">';
                        echo '<div class="schedule__list__day__entry__info__time">';
                        echo date("G:i", strtotime($entry['starts'])) . ' - ' . date("G:i", strtotime($entry['ends']));
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info__title">';
                        echo '<h3>' . $entry['name'] . '</h3>';
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info__desc">';
                        echo '<p>' . $entry['description'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
            <?php
            if (sizeof($schedule['friday']) > 0) {
                echo '<div class="schedule__list__day">';
                echo '<div class="schedule__list__day__headline">';
                echo '<h2>Freitag</h2>';
                echo '</div>';
                echo '<div class="schedule__list__day__entries">';
                if (is_array($schedule['friday'])) {
                    foreach ($schedule['friday'] as $entry) {
                        echo '<div class="schedule__list__day__entry">';
                        echo '<div class="schedule__list__day__entry__image">';
                        if (!$entry['image_path']) {
                            $entry['image_path'] = 'https://radio-rasclat.com/assets/svg/logo.svg';
                        }
                        echo '<img src="' . $entry['image_path'] . '">';
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info">';
                        echo '<div class="schedule__list__day__entry__info__time">';
                        echo date("G:i", strtotime($entry['starts'])) . ' - ' . date("G:i", strtotime($entry['ends']));
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info__title">';
                        echo '<h3>' . $entry['name'] . '</h3>';
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info__desc">';
                        echo '<p>' . $entry['description'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
            <?php
            if (sizeof($schedule['saturday']) > 0) {
                echo '<div class="schedule__list__day">';
                echo '<div class="schedule__list__day__headline">';
                echo '<h2>Samstag</h2>';
                echo '</div>';
                echo '<div class="schedule__list__day__entries">';
                if (is_array($schedule['saturday'])) {
                    foreach ($schedule['saturday'] as $entry) {
                        echo '<div class="schedule__list__day__entry">';
                        echo '<div class="schedule__list__day__entry__image">';
                        if (!$entry['image_path']) {
                            $entry['image_path'] = 'https://radio-rasclat.com/assets/svg/logo.svg';
                        }
                        echo '<img src="' . $entry['image_path'] . '">';
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info">';
                        echo '<div class="schedule__list__day__entry__info__time">';
                        echo date("G:i", strtotime($entry['starts'])) . ' - ' . date("G:i", strtotime($entry['ends']));
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info__title">';
                        echo '<h3>' . $entry['name'] . '</h3>';
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info__desc">';
                        echo '<p>' . $entry['description'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
            <?php
            if (sizeof($schedule['sunday']) > 0) {
                echo '<div class="schedule__list__day">';
                echo '<div class="schedule__list__day__headline">';
                echo '<h2>Sonntag</h2>';
                echo '</div>';
                echo '<div class="schedule__list__day__entries">';
                if (is_array($schedule['sunday'])) {
                    foreach ($schedule['sunday'] as $entry) {
                        echo '<div class="schedule__list__day__entry">';
                        echo '<div class="schedule__list__day__entry__image">';
                        if (!$entry['image_path']) {
                            $entry['image_path'] = 'https://radio-rasclat.com/assets/svg/logo.svg';
                        }
                        echo '<img src="' . $entry['image_path'] . '">';
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info">';
                        echo '<div class="schedule__list__day__entry__info__time">';
                        echo date("G:i", strtotime($entry['starts'])) . ' - ' . date("G:i", strtotime($entry['ends']));
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info__title">';
                        echo '<h3>' . $entry['name'] . '</h3>';
                        echo '</div>';
                        echo '<div class="schedule__list__day__entry__info__desc">';
                        echo '<p>' . $entry['description'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <?php }

?>


