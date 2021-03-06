<?php
/**
 * Create a reset input button
 * Use this view for forms rather than creating a submit/reset button tag in the wild as it provides
 * extra security which help prevent CSRF attacks.
 *
 * @package Elgg
 * @subpackage Core
 */

$vars['type'] = 'reset';

echo elgg_view('input/button', $vars);