<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
$c = 0;
?>
<div class="test-Questionaire">
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q1r">Question 1: Dentists can diagnose Obstructive Sleep Apnoea?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q1">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q1">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q2r">Question 2: Dentists can screen for Obstructive Sleep Apnoea?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q2">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q2">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q3r">Question 3: Dentists can diagnose Narcolepsy?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q3">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q3">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q4r">Question 4: Obstructive Sleep Apnoea is the only form of sleep apnoea?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q4">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q4">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q7r">Question 5: Dentists and Doctors should discourage the use of over-the-counter self-prescribed Mandibular Advancement Appliances?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q7">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q7">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q10r">Question 6: Dentists should undertake a pre-treatment patient assessment?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q10">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q10">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q11r">Question 7: Dentists should undertake a pre and post-treatment Epworth Score?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q11">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q11">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q12r">Question 8: The Epworth Score is a validated screening tool?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q12">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q12">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q13r">Question 9: The Epworth score is a validated diagnostic indicator for Obstructive Sleep Apnoea?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q13">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q13">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q14r">Question 10: Obstructive Sleep Apnoea is a chronic and often progressive condition?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q14">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q14">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q15r">Question 11: Obstructive Sleep Apnoea improves with age?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q15">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q15">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q16r">Question 12: Obstructive Sleep Apnoea affects males and females equally?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q16">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q16">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q17r">Question 13: Obstructive Sleep Apnoea affects all racial groups and socio-economic groups?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q17">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q17">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q18r">Question 14: Lifestyle changes are essential in the management of sleep related breathing disorders?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q18">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q18">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q19r">Question 15: Which of the following lifestyle changes are to be recommended?</h5>
        </div>
        <p>a) Weight loss</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q19a">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q19a">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>b) Regular exercise</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q19b">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q19b">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>c) Control of alcohol especially late in the day</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q19c">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q19c">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>d) Muscle relaxants and sedatives</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q19d">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q19d">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q20r">Question 16: Dentists can safely reduce the patients prescribed sedative intake?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q20">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q20">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q21r">Question 17: Mandibular Repositioning Appliances can be used in the following situations?</h5>
        </div>
        <p>a) In conjunction with lifestyle changes</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q21a">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q21a">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>b) In conjunction with Continuous Positive Airway Pressure (C-PAP)</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q21b">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q21b">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>c) In a poorly cared-for mouth</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q21c">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q21c">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>d) A dentally fit mouth is a pre-requirement for Mandibular Advancement Appliance therapy</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q21d">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q21d">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q22r">Question 18: An overnight sleep study is the recommended and definitive method of diagnosing Obstructive Sleep Apnoea?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q22">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q22">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q23r">Question 19: Which of the following usually provide overnight sleep studies?</h5>
        </div>
        <p>a) The Dentist</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q23a">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q23a">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>b) The General Medical Practitioner</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q23b">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q23b">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>c) An Ear Nose and Throat (ENT) surgeon without a special interest in sleep related breathing disorders</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q23c">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q23c">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>d) A sleep centre</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q23d">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q23d">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>e) Chest / Sleep Physicians</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q23e">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q23e">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>f) General Physicians</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q23f">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q23f">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q25r">Question 20: Validated research has shown that patients should be discouraged from acquiring over-the-counter, self-prescribed remedies for Obstructive Sleep Apnoea and snoring?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q25">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q25">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q26r">Question 21: Validated research has demonstrated that mandibular advancement devices are effective in treating snoring and mild obstructive sleep apnoea?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q26">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q26">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q27r">Question 22: Validated research has demonstrated that C-PAP is effective in the management of snoring and Obstructive Sleep Apnoea? </h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q27">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q27">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q28r">Question 23: The prevalence of snoring and Obstructive Sleep Apnoea is equal among the sexes?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q28">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q28">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q29r">Question 24: Obstructive Sleep Apnoea and snoring are more common in obese patients?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q29">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q29">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q30r">Question 25: The letters "AHI" are an abbreviation for the Apnoea Hypopnoea Index?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q30">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q30">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q31r">Question 26: A high AHI signifies the presence of sleep apnoea?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q31">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q31">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q32r">Question 27: Mandibular advancement appliances can be used to treat mandibular prognathism?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q32">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q32">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q34r">Question 28: Jaw re-positioning devices may cause a permanent alteration in the bite? </h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q34">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q34">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q35r">Question 29: Transitory changes in the bite are to be expected following the wearing of the Mandibular Advancement Appliance?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q35">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q35">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q36r">Question 30: Patients may salivate and experience a dry throat with some Mandibular Advancement Appliances especially where the vertical dimension is increased?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q36">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q36">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q37r">Question 31: Patients must be advised that there is a risk of their developing permanent mandibular prognathism with wearing mandibular advancement appliances?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q37">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q37">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q38r">Question 32: Mandibular advancement appliances which do not cover all standing teeth may enable unwanted tooth movements?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q38">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q38">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q41r">Question 33: Dentists should include which of the following questions as part of their routine medical history for every patient?</h5>
        </div>
        <p>1) Do you have difficulty breathing through your nose?</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q41a">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q41a">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>2) Do you suffer from Obstructive Sleep Apnoea?</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q41b">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q41b">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>3) Do you snore?</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q41c">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q41c">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>4) Do you feel sleepy during the day?</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q41d">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q41d">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>5) Do you suffer from "ringing in the ears" (tinnitus)?</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q41e">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q41e">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q42r">Question 34: Dentists assessing patients for sleep related breathing disorders should include which of the following questions?</h5>
        </div>
        <p>1) Do you have difficulty breathing through your nose?</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q42a">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q42a">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>2) Do you suffer from Obstructive Sleep Apnoea?</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q42b">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q42b">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>3) Do you snore?</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q42c">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q42c">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>4) Do you feel sleepy during the day?</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q42d">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q42d">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
        <p>5) Do you suffer from "ringing in the ears" (tinnitus)?</p>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q42e">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q42e">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q43r">Question 35: Jaw repositioning devices, mandibular advancement devices are all derived from functional orthodontic appliances?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q43">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q43">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q44r">Question 36: Jaw repositioning devices, mandibular advancement devices are different terms for the same group of oral devices?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q44">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q44">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q45r">Question 37: Increasing tongue space has no part to play in the treatment of sleep related breathing disorders?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q45">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q45">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q46r">Question 38: Increasing tongue space has a critical role in the treatment of sleep related breathing disorders?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q46">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q46">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q47r">Question 39: Snoring only affects obese people?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q47">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q47">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q48r">Question 40: Dentists should refer patient to their doctor or an Ear Nose and Throat surgeon if a nasal blockage or throat pathology is suspected?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q48">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q48">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q49r">Question 41: Removal of excessively large adenoid and tonsils may help in the treatment of snoring and Obstructive Sleep Apnoea?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q49">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q49">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
    <div class="ques-wrapper">
        <div class="lbl-wrapper">
            <h5 id="q50r">Question 42: Surgical removal of adenoids and tonsils will always cure snoring and Obstructive Sleep Apnoea?</h5>
        </div>
        <div class="ans">
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="T" name="q50">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">True</label>
            </div>
            <div class="form-check">
                <input id="<?php echo 'radio-' . ++ $c ?>" type="radio" class="radio form-check-input" value="F" name="q50">
                <label class="form-check-label" for="<?php echo 'radio-' . $c ?>">False</label>
            </div>
        </div>
    </div>
</div>
<div class="submition mb-2">
    <input id="btnSuitabilityCalculate" type="button" class="btn btn-primary mb-1" value="Calculate" name="b1">
</div>
<div class="scoring-wrapper wpcf7">
    <div class="scoring h2">Your suitability is</div>
    <div class="scoring-txt"><!--1-6 = Congratulations, you are getting enough sleep!<br>7-8 = Your score is average<br>9 and up = Seek the advice of a sleep specialist without delay-->* The only results are either OK or UNSURE. The results are only an indication based on the answers you provided.</div>
</div>