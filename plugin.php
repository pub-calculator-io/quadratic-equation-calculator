<?php
/*
Plugin Name: Quadratic Equation Calculator by www.calculator.io
Plugin URI: https://www.calculator.io/quadratic-equation-calculator/
Description: Quadratic Equation Calculator is a free tool that provides a detailed solution to quadratic equations by supplying the values of a, b and c.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_quadratic_equation_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Quadratic Equation Calculator by Calculator.iO";

function display_ci_quadratic_equation_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Quadratic Equation Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_quadratic_equation_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_quadratic_equation_calculator', 'display_ci_quadratic_equation_calculator' );