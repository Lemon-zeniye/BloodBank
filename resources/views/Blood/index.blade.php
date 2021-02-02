@extends('lay.layouts')
@section('content')
<div class="container p-4">
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 d-flex">
        @guest
            <div class="nav-item col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-2">
                <a class="nav-link btn btn-success" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
            @if (Route::has('register'))
                <div class="nav-item col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <a class="nav-link btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                </div>
            @endif
        @endguest
</div>
 <div class="dropdown">
    <button type="button" class="btn dropdown-toggle" id="#dropdownMenu1" data-toggle="dropdown">
         Topics<span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <a style="color:#04d1d1" class="dropdown-item"  href="#benefits">The Benefits of Donating Blood</a>
            <a style="color:#04d1d1" class="dropdown-item"  href="#benefitsone">Benefits</a>
            <a style="color:#04d1d1" class="dropdown-item"  href="#benefitstwo">Free health checkup</a>   
            <a style="color:#04d1d1" class="dropdown-item"  href="#benefitsthree">Side effects of donating blood</a>
            <a style="color:#04d1d1" class="dropdown-item"  href="#benefitsfour">During the donation</a>
            <a style="color:#04d1d1" class="dropdown-item"  href="#benefitsfive">What to know before you donate</a>
    </ul>
</div>
    <div id="top" class="row" style="font-family:'Times New Roman', Times, serif; font-size:17px">
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <h3 style="color:#04dfdf">Why Should i donate blood ?</h3>
            <p class="pt-4">Safe blood saves lives and improves health. Blood transfusion is needed for:</p>
            <ul class="">
                <li class="pb-1">
                   women with complications of pregnancy, such as ectopic pregnancies and <br> haemorrhage before, during or after childbirth;
                </li>
                <li class="pb-1">
                  children with severe anaemia often resulting from malaria or malnutrition;
                </li>
                <li class="pb-1">
                people with severe trauma following man-made and natural disasters; and
                </li>
                <li class="pb-1">
                    many complex medical and surgical procedures and cancer patients.
                </li>
            </ul>
            <p>
                It is also needed for regular transfusions for people with conditions 
                such as thalassaemia and sickle cell disease and is <br> used to make products
                such as clotting factors for people with haemophilia.
            </p>
            <p>
                There is a constant need for regular blood supply because blood can be stored for 
                only a limited time before use. <br>Regular blood donations by a sufficient number of 
                healthy people are needed to ensure that safe blood will be available<br> whenever and wherever it is needed.
            </p>
            <p><strong>
                Blood is the most precious gift that anyone can give to another person — the gift of life.
                A decision to donate your blood can save a life, or even several if your blood is separated
                into its components — red cells, platelets and plasma — which can be used individually
                for patients with specific conditions.
            </strong></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 pt-lg-3 ">
               <img src="svg/ima.jpeg" class="w-100">
            </div>
            <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <h3 style="color:#04dfdf" id="benefits" class="py-4">The Benefits of Donating Blood</h3>
            <h4 style="color:#18b1e0" class="pb-2">Overview</h4>
            <p>
                There’s no end to the benefits of donating blood for those who need it. One donation can save as many as three lives.
            </p>
            <p>
                It turns out that donating blood doesn’t just benefit recipients. There are health benefits for donors,
                 too, on top of the benefits that come from helping others. Read on to learn the health benefits
                  of donating blood and the reasons behind them.
            </p>
            <h4 style="color:#18b1e0" id="benefitsone" class="py-2">Benefits</h4>
            <p>Donating blood has benefits for your emotional and physical health. According to a report
             by the<a href="https://www.mentalhealth.org.uk/publications/doing-good-altruism-and-wellbeing-age-austerity" 
             target="_blank" rel="noopener noreferrer" class="content-link " style="color:gray"> Mental Health Foundation </a>, helping others can:
             </p>
             <ul>
                <li class="pb-1">reduce stress</li>
                <li class="pb-1">improve your emotional well-being</li>
                <li class="pb-1">benefit your physical health</li>
                <li class="pb-1">help get rid of negative feelings</li>
                <li class="pb-1">provide a sense of belonging and reduce isolation</li>
             </ul>
             <p>
              Research has found further evidence of the health benefits that come specifically from donating blood.
             </p>
             <h4 style="color:#18b1e0" id="benefitstwo" class="py-2">Free health checkup</h4>
             <p>
                In order to give blood, you’re required to undergo a health screening. A trained staff member performs 
                this checkup. They’ll check your:
             </p>
             <ul>
                <li class="pb-1">pulse</li>
                <li class="pb-1">blood pressure</li>
                <li class="pb-1">body temperature</li>
                <li class="pb-1">hemoglobin levels</li>
             </ul>
             <p>This free mini-physical can offer excellent insight into your health. It can effectively detect problems
              that could indicate an underlying medical condition or risk factors for certain diseases.</p>
              <p>Your blood is also tested for several diseases. These include:</p>
              <ul>
                 <li class="pb-1"><a href="https://www.healthline.com/health/hepatitis-b" class="" style="color:#105368" >hepatitis B</a></li>
                 <li class="pb-1"><a href="https://www.healthline.com/health/hepatitis-c" class="" style="color:#105368" >hepatitis C</a></li>
                 <li class="pb-1"><a href="https://www.healthline.com/health/hiv-aids" class="" style="color:#105368" >HIV</a></li>
                 <li class="pb-1"><a href="https://www.healthline.com/health/west-nile-virus" class="" style="color:#105368" >West Nile virus</a></li>
                 <li class="pb-1"><a href="https://www.healthline.com/health/std/syphilis" class="" style="color:#105368" >syphilis</a></li>
                 <li class="pb-1"><a href="https://www.healthline.com/health/kissing-bug-bite" class="" style="color:#105368" ><em>Trypanosoma cruzi</em></a></li>
              </ul>
              <h4 style="color:#18b1e0" id="benefitsthree" class="py-2">Side effects of donating blood</h4>
              <p>Blood donation is safe for healthy adults. There’s no risk of contracting disease. New, sterile equipment is used for each donor.</p>
              <p>Some people may feel nauseous, lightheaded, or dizzy after donating blood. If this happens, it should only last a few minutes.
               You can lie down with your feet up at the until you feel better.</p>
              <p>You may also experience some bleeding at the site of the needle. Applying pressure and raising your arm for a couple of minutes will
               usually stop this. You may develop a bruise at the site.</p>
               <p>Call the blood donation center if:</p>
               <ul>
                    <li class="pb-1">You still feel lightheaded, dizzy, or nauseous after drinking, eating, and resting.</li>
                    <li class="pb-1">You develop a raised bump or continue bleeding at the needle site.</li>
                    <li class="pb-1">You have arm pain, numbness, or tingling.</li>
               </ul>
               <h4 style="color:#18b1e0" id="benefitsfour" class="py-2">During the donation</h4>
               <p>You must register to donate blood. This includes providing identification, your medical history, and undergoing a
                quick physical examination. You’ll also be given some information about blood donation to read.</p>
               <p>Once you’re ready, your blood donation procedure will begin. Whole blood donation is the most common type of donation. This is because 
               it offers the most flexibility. It can be transfused as whole blood or separated into red cells, platelets, and plasma for different recipients.</p>
               <p>For a whole blood donation procedure:</p>
               <ol>
                    <li class="pb-1">You’ll be seated in a reclining chair. You can donate blood either sitting or lying down.</li>
                    <li class="pb-1">A small area of your arm will be cleaned. A sterile needle will then be inserted.</li>
                    <li class="pb-1">You’ll remain seated or lying down while a pint of your blood is drawn. This takes 8 to 10 minutes.</li>
                    <li class="pb-1">When a pint of blood has been collected, a staff member will remove the needle and bandage your arm.</li>
               </ol>
               <p>
                Once your donation is complete, you’ll be given a snack and a drink and be able to sit and rest for 10 or 15 minutes
                 before you leave. If you feel faint or nauseous, you’ll be able to lie down until you feel better.
               </p>
               <h4 style="color:#18b1e0" id="benefitsfive" class="py-2">What to know before you donate</h4>
               <p>Here are some important things to know before you donate:</p>
               <ul>
                  <li class="pb-1">You need to be 17 or older to donate whole blood. Some states allow you to donate at 16 with parental consent.</li>
                  <li class="pb-1">You have to weigh at least 110 pounds and be in good health to donate.</li>
                  <li class="pb-1">You need to provide information about medical conditions and any medications you’re taking. These may affect your eligibility to donate blood.</li>
                  <li class="pb-1">You must wait at least 8 weeks between whole blood donations and 16 weeks between double red cell donations.</li>
                  <li class="pb-1">Platelet donations can be made every 7 days, up to 24 times per year.</li>
               </ul>
               <p>The following are some suggestions to help you prepare for donating blood:</p>
               <ul>
                <li class="pb-1">Drink an extra 16 ounces of water before your appointment.</li>
                <li class="pb-1">Eat a healthy meal that’s low in fat.</li>
                <li class="pb-1">Wear a short-sleeved shirt or a shirt with sleeves that are easy to roll up.</li>
               </ul>
               <p>
                    Let the staff know if you have a preferred arm or vein and if you prefer to sit up or lie down. Listening to music, reading,
                     or talking to someone else can help you relax during the donation process.
               </p>
               <div style="background-color:gray;" class="btn btn-sm btn-success"><a style="color:white; " href="#top">Top</a></div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection