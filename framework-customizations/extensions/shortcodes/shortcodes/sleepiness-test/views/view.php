<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<form name="frmOne" id="form-epworth-test">
    <div class="wpcf7">
        <div class="mb-1">
            <label class="h5">Sitting and reading</label>
            <select name="sittingreading" id="sittingreading" class="form-select">
                <option value="choose_answer">Choose Answer</option>
                <option value="0">0 - No chance of dozing</option>
                <option value="1">1 - Slight chance of dozing</option>
                <option value="2">2 - Moderate chance of dozing</option>
                <option value="3">3 - High chance of dozing</option>
            </select>
        </div>
        <div class="mb-1">
            <label class="h5">Watching TV</label>
            <select name="watchingtv" id="watchingtv" class="form-select">
                <option value="choose_answer">Choose Answer</option>
                <option value="0">0 - No chance of dozing</option>
                <option value="1">1 - Slight chance of dozing</option>
                <option value="2">2 - Moderate chance of dozing</option>
                <option value="3">3 - High chance of dozing</option>
            </select>
        </div>
        <div class="mb-1">
            <label class="h5">Sitting inactive in a public space (e.g. theatre or meeting)</label>
            <select name="sittinginactive" id="sittinginactive" class="form-select">
                <option value="choose_answer">Choose Answer</option>
                <option value="0">0 - No chance of dozing</option>
                <option value="1">1 - Slight chance of dozing</option>
                <option value="2">2 - Moderate chance of dozing</option>
                <option value="3">3 - High chance of dozing</option>
            </select>
        </div>
        <div class="mb-1">
            <label class="h5">As a passenger in a car for an hour without a break</label>
            <select name="passenger" id="passenger" class="form-select">
                <option value="choose_answer">Choose Answer</option>
                <option value="0">0 - No chance of dozing</option>
                <option value="1">1 - Slight chance of dozing</option>
                <option value="2">2 - Moderate chance of dozing</option>
                <option value="3">3 - High chance of dozing</option>
            </select>
        </div>
        <div class="mb-1">
            <label class="h5">Lying down to rest in the afternoon when circumstances permit</label>
            <select name="lying" id="lying" class="form-select">
                <option value="choose_answer">Choose Answer</option>
                <option value="0">0 - No chance of dozing</option>
                <option value="1">1 - Slight chance of dozing</option>
                <option value="2">2 - Moderate chance of dozing</option>
                <option value="3">3 - High chance of dozing</option>
            </select>
        </div>
        <div class="mb-1">
            <label class="h5">Sitting and talking to someone</label>
            <select name="sittingtalking" id="sittingtalking" class="form-select">
                <option value="choose_answer">Choose Answer</option>
                <option value="0">0 - No chance of dozing</option>
                <option value="1">1 - Slight chance of dozing</option>
                <option value="2">2 - Moderate chance of dozing</option>
                <option value="3">3 - High chance of dozing</option>
            </select>
        </div>
        <div class="mb-1">
            <label class="h5">Sitting quietly after a lunch without alcohol</label>
            <select name="lunch" id="lunch" class="form-select">
                <option value="choose_answer">Choose Answer</option>
                <option value="0">0 - No chance of dozing</option>
                <option value="1">1 - Slight chance of dozing</option>
                <option value="2">2 - Moderate chance of dozing</option>
                <option value="3">3 - High chance of dozing</option>
            </select>
        </div>
        <div class="mb-1 mb-1-last">
            <label class="h5">In a car, whilst stopped for a few minutes in the traffic</label>
            <select name="inacar" id="inacar" class="form-select">
                <option value="choose_answer">Choose Answer</option>
                <option value="0">0 - No chance of dozing</option>
                <option value="1">1 - Slight chance of dozing</option>
                <option value="2">2 - Moderate chance of dozing</option>
                <option value="3">3 - High chance of dozing</option>
            </select>
        </div>
    </div>
    <div class="epworth-button-wrapper">
        <input id="btnSleepinessCalculate" type="button" class="btn btn-primary mb-1" value="Calculate">
        <input id="btnSleepinessReset" type="button" class="btn btn-outline-info mb-1" value="Reset">
    </div>
    <div class="epworth-score-wrapper">
        <div class="h2">
            <span id="epworthResault"></span>
        </div>
    </div>
    <div class="epworth-result-text" style="display: none">
        <p>1-6 = Congratulations, you are getting enough sleep!<br>7-8 = Your score is average<br>9 and up = Seek the advice of a sleep specialist without delay</p>
    </div>
</form>