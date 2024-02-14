<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="base-url" content="{{ url('checkstate') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
      integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('assets/nicerx/css/style.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="css/responsive.css"> -->
  <title>Quiz</title>
</head>
<body>
    <section class="quiz-sec">
      <div class="container">
          <div class="quiz-sec-content">
              <div class="quiz-content-steps">
                  <div class="quiz-logo">
                      <img src="{{ asset('assets/nicerx/img/logo.png') }}">
                  </div>
                  <div class="quiz-welcome-step quiz-steps active" id="step1">
                    <div class="quiz-steps-content">
                      <h3>Let's find the right plan for you!</h3>
                      <p>GLP-1 medications prescribed online by licensed U.S. doctors.</p>
                      <ol>
                        <li>Your goals / Your biology</li>
                        <li>Medical history</li>
                        <li>See your plan&nbsp;</li>
                      </ol>
                    </div> 
                    <button id="start-quiz nxt-step" class="sumbit nxt-steps">start the quiz<span><i class="fa-solid fa-arrow-right"></i></span></button>                       
                  </div>
                  <div class="quiz-welcome-step quiz-steps" id="step2">
                    <div class="prev-arrow">
                      <i class="fa-solid fa-arrow-left prev-btn"></i>
                    </div>
                    <div class="quiz-steps-content">                            
                      <p>What is your main goal?</p>
                      <div class="goal-main">
                        <ul class="btn-box">
                          <li class="goals" data="Lose weight for good">
                            <span for="a" id="loose-weight">Lose weight for good</span>
                          </li>
                          <li class="goals" data="Get fit for good">
                            <span for="b" id="get-fit">Get fit for good</span>
                          </li>
                          <li class="goals" data="Both">
                            <span class="active" for="c" id="both">Both</span>
                          </li>
                        </ul>
                      </div>                           
                    </div> 
                    <!-- <button id="main-goal" class="sumbit nxt-steps">start the quiz<span><i class="fa-solid fa-arrow-right"></i></span></button>                        -->
                  </div>
                  <div class="quiz-welcome-step quiz-steps" id="step3">
                    <div class="prev-arrow">
                      <i class="fa-solid fa-arrow-left prev-btn"></i>
                    </div>
                    <div class="quiz-steps-content">
                      <p>Where are you located?</p>
                      <select id="combobox" name="state" class=" select-loc Flow-Element ElementType-OptionDropdown ElementTag-Dropdown ComponentType-OptionSelector in-container-key-state_container_main InContainer-state_container_main ComponentTag-states_dropdown PageKey-location_page ComponentKey-state" data-components--option-selector-key-param="state" data-action="change->components--option-selector#selectOption" data-components--option-selector-target="select" required="required" tabindex="-1"><option value="" data-components--option-selector-key-param="state" data-components--option-selector-value-param="" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Please Select">Please Select</option><option value="ak" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ak" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Alaska">Alaska</option><option value="al" data-components--option-selector-key-param="state" data-components--option-selector-value-param="al" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Alabama">Alabama</option><option value="ar" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ar" data-components--option-selector-target="option" data-controller="template" class="selected" selected="selected" data-template-text-value="Arkansas">Arkansas</option><option value="az" data-components--option-selector-key-param="state" data-components--option-selector-value-param="az" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Arizona">Arizona</option><option value="ca" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ca" data-components--option-selector-target="option" data-controller="template" data-template-text-value="California">California</option><option value="co" data-components--option-selector-key-param="state" data-components--option-selector-value-param="co" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Colorado">Colorado</option><option value="ct" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ct" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Connecticut">Connecticut</option><option value="dc" data-components--option-selector-key-param="state" data-components--option-selector-value-param="dc" data-components--option-selector-target="option" data-controller="template" data-template-text-value="District Of Columbia">District Of Columbia</option><option value="de" data-components--option-selector-key-param="state" data-components--option-selector-value-param="de" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Delaware">Delaware</option><option value="fl" data-components--option-selector-key-param="state" data-components--option-selector-value-param="fl" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Florida">Florida</option><option value="ga" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ga" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Georgia">Georgia</option><option value="hi" data-components--option-selector-key-param="state" data-components--option-selector-value-param="hi" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Hawaii">Hawaii</option><option value="ia" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ia" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Iowa">Iowa</option><option value="id" data-components--option-selector-key-param="state" data-components--option-selector-value-param="id" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Idaho">Idaho</option><option value="il" data-components--option-selector-key-param="state" data-components--option-selector-value-param="il" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Illinois">Illinois</option><option value="in" data-components--option-selector-key-param="state" data-components--option-selector-value-param="in" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Indiana">Indiana</option><option value="ks" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ks" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Kansas">Kansas</option><option value="ky" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ky" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Kentucky">Kentucky</option><option value="la" data-components--option-selector-key-param="state" data-components--option-selector-value-param="la" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Louisiana">Louisiana</option><option value="ma" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ma" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Massachusetts">Massachusetts</option><option value="md" data-components--option-selector-key-param="state" data-components--option-selector-value-param="md" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Maryland">Maryland</option><option value="me" data-components--option-selector-key-param="state" data-components--option-selector-value-param="me" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Maine">Maine</option><option value="mi" data-components--option-selector-key-param="state" data-components--option-selector-value-param="mi" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Michigan">Michigan</option><option value="mn" data-components--option-selector-key-param="state" data-components--option-selector-value-param="mn" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Minnesota">Minnesota</option><option value="mo" data-components--option-selector-key-param="state" data-components--option-selector-value-param="mo" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Missouri">Missouri</option><option value="ms" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ms" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Mississippi">Mississippi</option><option value="mt" data-components--option-selector-key-param="state" data-components--option-selector-value-param="mt" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Montana">Montana</option><option value="nc" data-components--option-selector-key-param="state" data-components--option-selector-value-param="nc" data-components--option-selector-target="option" data-controller="template" data-template-text-value="North Carolina">North Carolina</option><option value="nd" data-components--option-selector-key-param="state" data-components--option-selector-value-param="nd" data-components--option-selector-target="option" data-controller="template" data-template-text-value="North Dakota">North Dakota</option><option value="ne" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ne" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Nebraska">Nebraska</option><option value="nh" data-components--option-selector-key-param="state" data-components--option-selector-value-param="nh" data-components--option-selector-target="option" data-controller="template" data-template-text-value="New Hampshire">New Hampshire</option><option value="nj" data-components--option-selector-key-param="state" data-components--option-selector-value-param="nj" data-components--option-selector-target="option" data-controller="template" data-template-text-value="New Jersey">New Jersey</option><option value="nm" data-components--option-selector-key-param="state" data-components--option-selector-value-param="nm" data-components--option-selector-target="option" data-controller="template" data-template-text-value="New Mexico">New Mexico</option><option value="nv" data-components--option-selector-key-param="state" data-components--option-selector-value-param="nv" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Nevada">Nevada</option><option value="ny" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ny" data-components--option-selector-target="option" data-controller="template" data-template-text-value="New York">New York</option><option value="oh" data-components--option-selector-key-param="state" data-components--option-selector-value-param="oh" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Ohio">Ohio</option><option value="ok" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ok" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Oklahoma">Oklahoma</option><option value="or" data-components--option-selector-key-param="state" data-components--option-selector-value-param="or" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Oregon">Oregon</option><option value="pa" data-components--option-selector-key-param="state" data-components--option-selector-value-param="pa" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Pennsylvania">Pennsylvania</option><option value="ri" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ri" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Rhode Island">Rhode Island</option><option value="sc" data-components--option-selector-key-param="state" data-components--option-selector-value-param="sc" data-components--option-selector-target="option" data-controller="template" data-template-text-value="South Carolina">South Carolina</option><option value="sd" data-components--option-selector-key-param="state" data-components--option-selector-value-param="sd" data-components--option-selector-target="option" data-controller="template" data-template-text-value="South Dakota">South Dakota</option><option value="tn" data-components--option-selector-key-param="state" data-components--option-selector-value-param="tn" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Tennessee">Tennessee</option><option value="tx" data-components--option-selector-key-param="state" data-components--option-selector-value-param="tx" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Texas">Texas</option><option value="ut" data-components--option-selector-key-param="state" data-components--option-selector-value-param="ut" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Utah">Utah</option><option value="va" data-components--option-selector-key-param="state" data-components--option-selector-value-param="va" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Virginia">Virginia</option><option value="vt" data-components--option-selector-key-param="state" data-components--option-selector-value-param="vt" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Vermont">Vermont</option><option value="wa" data-components--option-selector-key-param="state" data-components--option-selector-value-param="wa" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Washington">Washington</option><option value="wi" data-components--option-selector-key-param="state" data-components--option-selector-value-param="wi" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Wisconsin">Wisconsin</option><option value="wv" data-components--option-selector-key-param="state" data-components--option-selector-value-param="wv" data-components--option-selector-target="option" data-controller="template" data-template-text-value="West Virginia">West Virginia</option><option value="wy" data-components--option-selector-key-param="state" data-components--option-selector-value-param="wy" data-components--option-selector-target="option" data-controller="template" data-template-text-value="Wyoming">Wyoming</option></select>
                      <p>Select the state you will be located for your healthcare provider appointment, which is typically 2 to 3 weeks after joining. This should be your primary state of residence; and also the state on your government ID, and your mailing address.</p>
                    </div> 
                    <button id="start-quiz nxt-step" class="sumbit nxt-steps">start the quiz<span><i class="fa-solid fa-arrow-right"></i></span></button>                       
                  </div>
                  <div class="quiz-welcome-step quiz-steps" id="step4">
                    <div class="prev-arrow">
                      <i class="fa-solid fa-arrow-left prev-btn"></i>
                    </div>
                    <div class="msgexstate" style="display:none">
                      <div>
                        <h3>Sorry!</h3>
                        <p>Unfortunately, we are currently unable to ship to your state. Please check back soon as we plan to service your state soon.</p>
                      </div>
                    </div>  
                    <div class="quiz-steps-content sucss">                            
                      <p>What is your date of birth?</p>
                      <div class="dob-box">                                
                        <select id="month" name="month" required>
                          <option value="">Month</option>
                        </select>
                        <select id="day" name="day" required>
                          <option value="">Day</option>
                        </select>
                        <select id="year" name="year" required>
                          <option value="">Year</option>
                        </select>
                      </div>                    
                    </div> 
                    <button id="main-goal" class="sumbit nxt-steps sucss dob">Next<span><i class="fa-solid fa-arrow-right"></i></span></button>                       
                  </div>
                  <div class="quiz-welcome-step quiz-steps" id="step5">
                    <div class="prev-arrow">
                        <i class="fa-solid fa-arrow-left prev-btn"></i>
                    </div>
                    <div class="quiz-steps-content">                            
                      <p>What is your biological sex at birth?</p>
                      <div class="goal-main">
                        <ul class="btn-box">
                          <li class="gender" data="Male">
                            <span class="active" for="a" id="Male">Male</span>
                          </li>
                          <li class="gender" data="Female">
                            <span for="b" id="Female">Female</span>
                          </li>
                          <li class="gender" data="Prefer not to answer">
                            <span for="c" id="prefer">Prefer not to answer</span>
                          </li>
                        </ul>
                      </div>                           
                    </div> 
                    <!-- <button id="main-goal" class="sumbit nxt-steps">start the quiz<span><i class="fa-solid fa-arrow-right"></i></span></button>                        -->
                  </div>
                  <div class="quiz-welcome-step quiz-steps" id="step6">
                    <div class="prev-arrow">
                      <i class="fa-solid fa-arrow-left prev-btn"></i>
                    </div>
                    <div class="quiz-steps-content">
                      <h3>Do any of the following apply to you?</h3>                            
                      <p>The medications prescribed in the weight loss program are safe and effective with many pre-existing conditions, with the exception of the following.</p>
                      <div class="check-list">
                        <form>
                          <div class="form-group">
                            <input type="checkbox" name="do_any" id="Currently-pregnant" class="medication" value="Currently pregnant, or planning to become pregnant in the next year">
                            <label for="Currently-pregnant">Currently pregnant, or planning to become pregnant in the next year</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" name="do_any" id="Currently-breastfeeding" class="medication" value="Currently breastfeeding">
                            <label for="Currently-breastfeeding">Currently breastfeeding</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" name="do_any" id="treated-for-cancer" class="medication" value="Currently being treated for cancer">
                            <label for="treated-for-cancer">Currently being treated for cancer</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" name="do_any" id="Active-eating-disorder" class="medication" value="Active eating disorder">
                            <label for="Active-eating-disorder">Active eating disorder</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" name="do_any" id="Active-gallbladder-disease" class="medication" value="Active gallbladder disease">
                            <label for="Active-gallbladder-disease">Active gallbladder disease</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" name="do_any" id="abuse-or-dependency" class="medication" value="Active substance abuse or dependency">
                            <label for="abuse-or-dependency">Active substance abuse or dependency</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" name="do_any" id="Type-1-diabetes" class="medication" value="Type 1 diabetes">
                            <label for="Type-1-diabetes">Type 1 diabetes</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" name="do_any" id="insulin-pump" class="medication" value="Currently using an insulin pump">
                            <label for="insulin-pump">Currently using an insulin pump</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" name="do_any" id="Bariatric-surgery" class="medication" value="Bariatric surgery (within the past 18 months)">
                            <label for="Bariatric-surgery">Bariatric surgery (within the past 18 months)</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" name="do_any" id="ideopathic-pancreatitis" class="medication" value="Pancreatitis within the past 6 months, history of ideopathic pancreatitis, or a history of pancreatitis caused by taking a GLP-1">
                            <label for="ideopathic-pancreatitis">Pancreatitis within the past 6 months, history of ideopathic pancreatitis, or a history of pancreatitis caused by taking a GLP-1</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" name="do_any" id="thyroid-cancer" class="medication" value="History of medullary thyroid cancer or MEN syndrome">
                            <label for="thyroid-cancer">History of medullary thyroid cancer or MEN syndrome</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" name="do_any" id="None" class="medication" value="None">
                            <label for="None">None</label>
                          </div>
                        </form>
                      </div>                           
                    </div> 
                    <button id="main-goal" class="sumbit nxt-steps next">Next<span><i class="fa-solid fa-arrow-right"></i></span></button>                       
                  </div>
                  <div class="quiz-welcome-step quiz-steps error-message" id="step7" style="display:none">
                    <div class="prev-arrow">
                      <i class="fa-solid fa-arrow-left prev-btn"></i>
                    </div>
                    <div class="quiz-steps-content">
                      <h3 class="text-left">Sorry!</h3>                            
                      <p>Unfortunately, GLP-1 medications are not indicated for anyone that has any of these conditions.</p>                    
                    </div>
                    <button id="main-goal" class="sumbit nxt-steps">Next<span><i class="fa-solid fa-arrow-right"></i></span></button>              
                  </div>
                  <div class="quiz-welcome-step quiz-steps" id="step8">
                    <div class="prev-arrow">
                        <i class="fa-solid fa-arrow-left prev-btn"></i>
                    </div>
                    <div class="quiz-steps-content">
                        <div class="quiz-weight-height">
                        <h3>What is your height and weight?</h3>                            
                        <p>We'll calculate your BMI to determine if our weight loss program is right for you.</p>
                            <label for="h-feet">Height (feet)</label>                                
                            <input  maxlength="1" type="number" min="10" max="9" value="4" id="h-feet">
                            <label for="h-inch">Height (inches)</label>
                            <input maxlength="1" type="number" min="10" max="9" value="4" id="h-inch">
                            <label for="w-lbs">Weight (lbs)</label> 
                            <input  maxlength="4" type="number" min="10" max="1000" value="365" id="w-lbs">
                        </div>                 
                    </div> 
                    <button id="main-goal" class="sumbit nxt-steps bmi">Next<span><i class="fa-solid fa-arrow-right"></i></span></button>               
                  </div>
                  <div class="quiz-welcome-step quiz-steps" id="step9">
                    <div class="prev-arrow">
                      <i class="fa-solid fa-arrow-left prev-btn"></i>
                    </div>
                    <div class="quiz-steps-content">
                      <div class="long-term">
                        <h3>NiceRx helps you achieve long term change</h3>                            
                        <small>Through a program that uses prescription medications and personalized care, not through restrictive dieting.</small>
                        <h6><b>Lose 15% of your bodyweight after 6 months (on average)</b></h6>
                      </div>                 
                    </div> 
                    <button id="main-goal" class="sumbit nxt-steps">Next<span><i class="fa-solid fa-arrow-right"></i></span></button>               
                  </div>
                  <div class="quiz-welcome-step quiz-steps " id="step10">
                    <div class="prev-arrow">
                      <i class="fa-solid fa-arrow-left prev-btn"></i>
                    </div>
                    <div class="quiz-steps-content">
                      <h3>Which best describes you?</h3>
                      <ul class="btn-box">
                        <li class="diet" data="My diet and activity need a lot of work">
                          <span for="a" id="my-diet">My diet and activity need a lot of work</span>
                        </li>
                        <li class="diet" data="I have some healthy habits">
                          <span class="active" for="b" id="healthy-habbits">I have some healthy habits</span>
                        </li>
                        <li class="diet" data="I mostly eat well and stay active">
                          <span for="c" id="eat-well">I mostly eat well and stay active</span>
                        </li>
                      </ul>
                    </div>                    
                  </div>
                  <div class="quiz-welcome-step quiz-steps" id="step11">
                    <div class="prev-arrow">
                      <i class="fa-solid fa-arrow-left prev-btn"></i>
                    </div>
                    <div class="quiz-steps-content">
                      <div class="triedin-past">
                      <h3>What have you tried in the past?</h3>
                      <p>Select all options that apply</p>                            
                      <div class="check-list">
                        <form>
                          <div class="form-group">
                            <input type="checkbox" id="Calorie-counting" name="inpast" class="tried" value="Calorie counting">
                            <label for="Calorie-counting">Calorie counting</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" id="coc-food" name="inpast" class="tried" value="Cutting out certain foods">
                            <label for="coc-food">Cutting out certain foods</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" id="Time-restricted eat" name="inpast" class="tried" value="Time restricted eating">
                            <label for="Time-restricted eat">Time restricted eating</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" id="low-carb-diet" name="inpast" class="tried" value="Keto / low carb diets">
                            <label for="low-carb-diet">Keto / low carb diets</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" id="weight-loss" name="inpast" class="tried" value="Other weight loss programs">
                            <label for="weight-loss">Other weight loss programs</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" id="Meal-replacements" name="inpast" class="tried" value="Meal replacements">
                            <label for="Meal-replacements">Meal replacements</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" id="Active-substance" name="inpast" class="tried" value="Active substance abuse or dependency">
                            <label for="Active-substance">Active substance abuse or dependency</label>
                          </div>
                          <div class="form-group">
                            <input type="checkbox" id="None" name="inpast" class="tried" value="none">
                            <label for="None">None</label>
                          </div>
                        </form>
                      </div>
                    </div>                           
                  </div> 
                  <button id="main-goal" class="sumbit nxt-steps">Next<span><i class="fa-solid fa-arrow-right"></i></span></button>                       
                </div>
                <div class="quiz-welcome-step quiz-steps" id="step12">
                  <div class="quiz-steps-content">
                    <h3 class="text-left">How long have you been trying to lose weight?</h3>
                    <ul class="btn-box">
                      <li class="trylose" data="Less than 6 months">
                        <span for="a" id="less-6">Less than 6 months</span>
                      </li>
                      <li class="trylose" data="6-12 months">
                        <span class="active" for="b" id="6-12">6-12 months</span>
                      </li>
                      <li class="trylose" data="Several years">
                        <span for="c" id="Several-years">Several years</span>
                      </li>
                      <li class="trylose" data="My whole life">
                        <span for="c" id="My-whole-life">My whole life</span>
                      </li>
                      <li class="trylose" data="I've never tried dieting or exercising">
                        <span for="d" id="dieting-or-exercising">I've never tried dieting or exercising</span>
                      </li>
                    </ul>
                  </div>                    
                </div>
                <div class="quiz-welcome-step quiz-steps" id="step13">
                  <div class="prev-arrow">
                    <i class="fa-solid fa-arrow-left prev-btn"></i>
                  </div>
                  <div class="quiz-steps-content">
                    <div class="triedin-past">
                    <h3>When considering treatment options, which of the following are important to you?</h3>
                    <p>Select all options that apply</p>                            
                    <div class="check-list">
                      <form>
                        <div class="form-group">
                          <input type="checkbox" id="common-side-effects" name="troptn" class="treatment" value="I want to minimize the risk of common side effects">
                          <label for="common-side-effects">I want to minimize the risk of common side effects</label>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" id="maximize-my-results" name="troptn" class="treatment" value="I want to maximize my results">
                          <label for="maximize-my-results">I want to maximize my results</label>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" id="easy-and-convenient" name="troptn" class="treatment" value="I want an easy and convenient option">
                          <label for="easy-and-convenient">I want an easy and convenient option</label>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" id="stay-consistent" name="troptn" class="treatment" value="I want something that helps me stay consistent">
                          <label for="stay-consistent">I want something that helps me stay consistent</label>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" id="None" name="troptn" class="treatment" value="none">
                          <label for="None">None of the above</label>
                        </div>
                      </form>
                    </div>
                  </div>                           
                </div> 
                <button id="main-goal" class="sumbit nxt-steps">Next<span><i class="fa-solid fa-arrow-right"></i></span></button>                       
              </div>
              <div class="quiz-welcome-step quiz-steps" id="step14">
                <div class="prev-arrow">
                  <i class="fa-solid fa-arrow-left prev-btn"></i>
                </div>
                <div class="quiz-steps-content">
                  <h3 class="text-left">What is your main reason for wanting to lose weight?</h3>
                  <small>(Please select which is most important to you)</small>
                  <ul class="btn-box">
                    <li class="mainrsn" data="Becoming healthier">
                      <span for="a" id="less-6">Becoming healthier</span>
                    </li>
                    <li class="mainrsn" data="Engaging more with my family">
                      <span class="active" for="b" id="6-12">Engaging more with my family</span>
                    </li>
                    <li class="mainrsn" data="Feeling better day to day">
                      <span for="c" id="Several-years">Feeling better day to day</span>
                    </li>
                    <li class="mainrsn" data="Improving physical appearence">
                      <span for="c" id="My-whole-life">Improving physical appearence</span>
                    </li>
                    <li>
                      <span for="d" class="append-input" id="dieting-or-exercising">Other</span>
                    </li>
                  </ul>
                  <div class="input-append" style="display:none">
                    <input type="text" name="another" id="another" class="other" placeholder="Please type another option here...">
                  </div>
                </div>
                <button id="main-goal" class="sumbit nxt-steps">Next<span><i class="fa-solid fa-arrow-right"></i></span></button>                       
              </div>
              <div class="quiz-welcome-step quiz-steps" id="step15">
                <div class="prev-arrow">
                  <i class="fa-solid fa-arrow-left prev-btn"></i>
                </div>
                <div class="quiz-steps-content">
                  <div class="triedin-past">
                    <h3>Have you been diagnosed with diabetes by your doctor?</h3>                         
                    <div class="check-list">
                      <ul class="btn-box">
                        <li>
                          <span for="a" id="yes">Yes</span>
                        </li>
                        <li>
                          <span class="active" for="b" id="no">No</span>
                        </li>
                      </ul>
                    </div>
                  </div>                           
                </div>                    
              </div>
              <div class="quiz-welcome-step quiz-steps" id="step16">
                <div class="prev-arrow">
                  <i class="fa-solid fa-arrow-left prev-btn"></i>
                </div>
                <div class="quiz-steps-content">
                  <div class="triedin-past">
                    <h3>Which health insurance do you have?</h3>                         
                    <div class="check-list">
                      <ul class="btn-box">
                        <li>
                          <span class="active" for="a" id="Employer-Commercial">Employer / Commercial (e.g. Aetna, Blue Cross, Blue Shield, etc.)</span>
                        </li>
                        <li>
                          <span for="b" id="Government">Government (e.g. Medicare, Medicaid, Tricaid, etc.)</span>
                        </li>
                        <li>
                          <span for="b" id="Uninsured">Uninsured</span>
                        </li>
                      </ul>
                    </div>
                  </div>                           
                </div>                    
              </div>
              <div class="quiz-welcome-step quiz-steps" id="step17">
                <div class="prev-arrow">
                  <i class="fa-solid fa-arrow-left prev-btn"></i>
                </div>
                <div class="quiz-steps-content">
                  <div class="weight-loss">
                    <h3>We specialize in weight loss with GLP-1s</h3> 
                    <small>The prescribing doctors only prescribe compounded GLP-1s. For example, compounded Semaglutide (similar to Wegovy and Ozempic), and no stimulants like phentermine. GLP-1s are proven to be the most effective medications for lasting weight loss, targeting the root cause of weight gain by:</small>                        
                    <ul>
                      <li>Shifting your set point, the weight your body fights to maintain.</li>
                      <li>Reducing inflammation and improving digestion, helping you feel fuller longer.</li>
                      <li>Mimicking naturally occurring GLP-1 hormones in the body.</li>
                    </ul>
                    <p>NiceRx's comprehensive weight loss program drives better long-term results than most GLP-1 medications alone: 15% weight loss on average, sustained for two years.</p>
                  </div>                           
                </div>
                <button id="main-goal" class="sumbit nxt-steps">Next<span><i class="fa-solid fa-arrow-right"></i></span></button>                          
              </div>
              <div class="quiz-welcome-step quiz-steps" id="step18">
                <div class="prev-arrow">
                  <i class="fa-solid fa-arrow-left prev-btn"></i>
                </div>
                <div class="quiz-steps-content">
                  <div class="quiz-success-contact">
                    <h3>Success! You're eligible for a GLP-1 prescription plan.</h3> 
                    <small>Enter your email and phone number to see your personalized weight loss plan. You'll also receive doctor-recommended tips to help you achieve long term weight loss goals.</small>                        
                    <form>
                      <div class="contact-form">
                        <div class="form-group">
                          <label for="fname">First Name</label>
                          <input type="text" id="fname" name="fname">
                        </div>
                        <div class="form-group">
                          <label for="lname">Last Name</label>
                          <input type="text" id="lname" name="lname">
                        </div>
                        <div class="form-group">
                          <label for="lname">Email</label>
                          <input type="email" id="lname" name="email">
                          <small>example@example.com</small>
                        </div>
                        <div class="form-group">
                          <label for="pnum">Phone Number</label>
                          <input type="number" placeholder="(###) ###-####" id="pnum" name="pnum">
                        </div>
                        <div class="form-group check-box">
                          <input type="checkbox" id="common-side-effects">
                          <label for="common-side-effects">I agree to receive text messages at the number provided. Message and data rates may apply. Full terms <a href="https://www.nicerx.com/terms-of-use/" target="_blank">here</a></label>
                        </div>
                        <div class="form-group check-box">
                          <input type="checkbox" id="maximize-my-results">
                          <label for="maximize-my-results">I have read and agree to the <a href="https://www.nicerx.com/terms-of-use/" target="_blank">Terms of Use</a>, <a href="https://www.nicerx.com/privacy-policy/" target="_blank">Privacy Policy</a>, and <a href="https://www.nicerx.com/telehealth-consent/" target="_blank">Telehealth Consent</a></label>
                        </div>
                      </div>
                    </form>
                  </div>                           
                </div>
                <button id="main-goal" class="sumbit nxt-steps">Next<span><i class="fa-solid fa-arrow-right"></i></span></button>                          
              </div>
            </div>                     
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/nicerx/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/quiz.js') }}"></script>
</body>
</html>