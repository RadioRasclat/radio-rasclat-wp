<?php

// construct the query with our api url
$endpoint = 'https://api.radio-rasclat.com/meta/schedule';

// setup curl to make a call to the endpoint
$session = curl_init($endpoint);

// indicates that we want the response back
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// exec curl and get the data back
$data = curl_exec($session);

// close the curl session once we are finished retrieveing the data
curl_close($session);

// decode the json data to make it easier to parse the php
$schedule = json_decode($data, true);
if ($schedule === NULL) die('Error parsing Radio Rasclat schedule.');

?>

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
