<?php
// Start the session if it's not started already
session_start();

// Generate a CSRF token if it's not set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Generate a secure token
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
   
    
   <div class="sticky top-0 z-[999] m-auto flex flex-col justify-center bg-black"><div class="flex h-[86px] justify-center pb-0 md:h-[120px] md:pb-5"><div class=" flex w-full max-w-6xl items-center px-6 md:items-end xl:px-0"><div class="flex flex-col"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;" alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2775%27%20height=%2775%27/%3e"></span><img alt="holo-logo" srcset="/assets/Holo_Logo_white.svg 1x, /assets/Holo_Logo_white.svg 2x" src="/assets/Holo_Logo_white.svg" decoding="async" data-nimg="intrinsic" class="cursor-pointer" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></div><div class="flex-end w-full gap-4"><div class="flex h-full max-h-[38px] items-center justify-end gap-3 sm:col-span-2 sm:justify-end sm:gap-6"><div class="hidden md:block"><a href="/ar"><p class="chakra-text css-12hqnf1">العربية</p></a></div><div class="h-4 border-l border-[#1A1A1A]"></div><div class="mx-4 hidden cursor-pointer items-center gap-1 md:flex"><span><svg width="16" height="16" viewBox="0 0 24 24" fill="white"><path d="M7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z"></path><path d="M6.34315 16.3431C4.84285 17.8434 4 19.8783 4 22H6C6 20.4087 6.63214 18.8826 7.75736 17.7574C8.88258 16.6321 10.4087 16 12 16C13.5913 16 15.1174 16.6321 16.2426 17.7574C17.3679 18.8826 18 20.4087 18 22H20C20 19.8783 19.1571 17.8434 17.6569 16.3431C16.1566 14.8429 14.1217 14 12 14C9.87827 14 7.84344 14.8429 6.34315 16.3431Z"></path></svg></span><p class="text-sm text-white">Login</p></div><div class=""><button class="px-4 py-[7px] rounded-[30px] text-sm font-medium bg-white text-black border border-natural-gray-2 hover:bg-natural-gray-2 whitespace-pre en-get-started-navbar"><span>Get Started</span></button></div><button class="flex lg:hidden"><svg id="menu" class="block h-6 w-8 fill-white"><use href="/assets/sprite.svg#menu"></use></svg></button></div><div class="mb-4 mt-3 hidden h-[1px] w-full bg-[#1A1A1A] md:block"></div><div class=" hidden h-full items-center justify-between px-6 sm:col-span-9 lg:flex "><a class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm" href="">Find Your Mortgage</a>


<a class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm" href="/en/mortgage-calculator">Mortgage Calculator</a><a class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm" href="/en/partner">Become a Partner</a><a class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm" href="/en/hub-for-real-estate-agents">Agents HUB</a><a class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm" href="/en/about-us">About Us</a><a class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm" href="/en/blog">Blog</a><a class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm" href="/en/resources">Resources</a><a class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm" href="/en/mortgage-faq">FAQs</a></div><div class="block md:hidden"></div></div></div></div></div>

<section class="relative bg-black flex items-center justify-center min-h-screen w-full">
    <div class="container mx-auto flex flex-col justify-center items-center text-center px-6">
        <!-- Text Content -->
        <div class="z-10 max-w-4xl text-white font-bold">
            <h2 class="text-4xl mb-6">WELCOME TO MAWARID GROUP</h2>
            <p class="text-lg mb-8">EXPLORE OUR SERVICES AND SOLUTIONS TAILORED TO YOUR NEEDS.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl mb-2">MAWARID GROUP</h3>
                    <a href="#" class="block text-gray-700 hover:text-black">PRODUCT & SERVICES</a>
                    <a href="#" class="block text-gray-700 hover:text-black">INVESTOR RELATION</a>
                </div>
                <div>
                    <h3 class="text-xl mb-2">SME FINANCE</h3>
                    <a href="#" class="block text-gray-700 hover:text-black">FINANCING SOLUTIONS</a>
                    <a href="#" class="block text-gray-700 hover:text-black">BUSINESS DEPOSITS</a>
                </div>
                <div>
                    <h3 class="text-xl mb-2">FALAK TAYYEB CARDS</h3>
                    <a href="#" class="block text-gray-700 hover:text-black">WORLD MURABAHA CARD</a>
                    <a href="#" class="block text-gray-700 hover:text-black">PLATINUM MURABAHA CARD</a>
                </div>
                <div>
                    <h3 class="text-xl mb-2">CONTACT US</h3>
                    <p class="text-gray-700">P.O. BOX 212121, DUBAI, U.A.E</p>
                    <p class="text-gray-700">TEL: +971 4 304 0888</p>
                </div>
            </div>

            <div class="text-center text-gray-600 mt-8">&copy; 2025 MAWARID GROUP. ALL RIGHTS RESERVED.</div>
        </div>
    </div>
</section>




<section class="bg-white">
    <div class="m-auto flex min-h-[788px] w-full max-w-6xl flex-col items-center gap-12 px-6 py-6 pb-[68px] pt-12 md:min-h-[525px] md:gap-[92px] md:py-[96px] xl:px-[0px]">
       <h1 class="w-full py-2 px-4 bg-black text-white font-semibold rounded-md shadow-sm hover:bg-gray-800 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 text-center">CUSTOMER DETAILS</h1>
      <!-- Form Section -->

      
    <!-- Display Success Message -->
    @if(session('success'))
    <div style="color: green; border: 1px solid green; padding: 10px; margin-top: 10px;">
        {{ session('success') }}
    </div>
    @endif

    <!-- Display Error Messages (Validation Errors) -->
    @if($errors->any())
    <div style="color: red; border: 1px solid red; padding: 10px; margin-top: 10px;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
      <form action="{{ route('information.store') }}" method="POST" class="w-full max-w-4xl space-y-6">

        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
       @csrf
        <!-- Personal Details -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
            <input type="text" id="first_name" name="first_name" class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter first name" required>
          </div>
          <div>
            <label for="middle_name" class="block text-sm font-medium text-gray-700">Middle Name</label>
            <input type="text" id="middle_name" name="middle_name" class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter middle name" required>
          </div>
          <div>
            <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
            <input type="text" id="last_name" name="last_name" class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter last name" required>
          </div>
          <div>
            <label for="emirates_id" class="block text-sm font-medium text-gray-700">Emirates Identification No</label>
            <input type="text" id="emirates_id" name="emirates_id"  class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="784-XXXX-XXXXXXX-X" required>
        </div>
        
        <div>
            <label for="employment_type" class="block text-sm font-medium text-gray-700">Type of Employment</label>
            <div class="mt-2">
                <label class="inline-flex items-center mr-6">
                    <input type="radio" id="salaried" name="employment_type" value="Salaried" class="form-radio text-indigo-600" required>
                    <span class="ml-2">Salaried</span>
                </label>
                <label class="inline-flex items-center mr-6">
                    <input type="radio" id="self_employed" name="employment_type" value="Self Employed" class="form-radio text-indigo-600">
                    <span class="ml-2">Self Employed</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" id="pension" name="employment_type" value="Pension" class="form-radio text-indigo-600">
                    <span class="ml-2">Pension</span>
                </label>
            </div>
        </div>
        
        <div>
            <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality</label>
            <select id="nationality" name="nationality" class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                <option value="" disabled selected>Select nationality</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Eswatini">Eswatini</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Greece">Greece</option>
                <option value="Grenada">Grenada</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Honduras">Honduras</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, North">Korea, North</option>
                <option value="Korea, South">Korea, South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia">Micronesia</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="North Macedonia">North Macedonia</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Qatar">Qatar</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Sudan">South Sudan</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-Leste">Timor-Leste</option>
                <option value="Togo">Togo</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City">Vatican City</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
        </div>
        
          <div>
            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
            <select id="gender" name="gender" class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div>
            <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile</label>
            <input type="tel" id="mobile" name="mobile" class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="0351-XXXXX-XX" required>
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter email" required>
          </div>
          <div>
            <label for="product_type" class="block text-sm font-medium text-gray-700">Type of Product</label>
            <div class="mt-2 space-y-2">
              <div class="flex items-center">
                <input type="radio" id="credit_card" name="product_type" value="credit_card" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500" required>
                <label for="credit_card" class="ml-2 text-sm text-gray-700">Credit Card</label>
              </div>
              <div class="flex items-center">
                <input type="radio" id="personal_finance" name="product_type" value="personal_finance" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500" required>
                <label for="personal_finance" class="ml-2 text-sm text-gray-700">Personal Finance</label>
              </div>
              <div class="flex items-center">
                <input type="radio" id="auto_finance" name="product_type" value="auto_finance" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500" required>
                <label for="auto_finance" class="ml-2 text-sm text-gray-700">Auto Finance</label>
              </div>
            </div>
          </div>
          
          <div>
            <label for="employer_name" class="block text-sm font-medium text-gray-700">Employer Name</label>
            <input type="text" id="employer_name" name="employer_name" class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter employer name" required>
          </div>
          <div>
            <label for="monthly_salary" class="block text-sm font-medium text-gray-700">Monthly Salary/Income</label>
            <input type="number" id="monthly_salary" name="monthly_salary" class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter monthly salary" required>
          </div>
          <div>
            <label for="monthly_allowance" class="block text-sm font-medium text-gray-700">Monthly Allowance</label>
            <input type="number" id="monthly_allowance" name="monthly_allowance" class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter monthly allowance" required>
          </div>
          <div>
            <label for="annual_income" class="block text-sm font-medium text-gray-700">Annual Income</label>
            <input type="number" id="annual_income" name="annual_income" class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter annual income" required>
          </div>
        </div>
  
        <!-- Bank Details -->
        <h3 class="w-full py-2 px-4 bg-black text-white font-semibold rounded-md shadow-sm hover:bg-gray-800 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Bank Details</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="account_no" class="block text-sm font-medium text-gray-700">Account No</label>
            <input type="text" id="account_no" name="account_no" class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter account number" required>
          </div>
          <div>
            <label for="from" class="block text-sm font-medium text-gray-700">From</label>
            <input type="date" id="from" name="from" class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter from-to details" required>
          </div>

          <div>
            <label for="to" class="block text-sm font-medium text-gray-700">To</label>
            <input type="date" id="to" name="to" class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter from-to details" required>
          </div>
        </div>
  
        <!-- Consent Section -->
        <div class="mt-6">
            <label for="consent" class="block text-sm font-medium text-gray-700">Consent</label>
            <div class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm bg-gray-100 text-sm text-gray-700">
              <p>
                By clicking submit, you consent to Mawarid Finance PJSC requesting your statement of account through the Central Bank of the United Arab Emirates from your bank (identified by the account number IBAN). You also consent to your bank providing this information through the Central Bank of the United Arab Emirates without requiring additional consent. 
                <br><br>
                I/We, the undersigned, confirm that I/We have no objection to Mawarid Finance PJSC accessing my/our credit information from AECB (Al Etihad Credit Bureau) at any given time. Mawarid Finance PJSC will use this credit information to provide various services and facilities to me/us from time to time. 
                <br><br>
                I confirm that the information I have provided is complete, true, and correct, and agree that Mawarid Finance PJSC has the right to verify all the above by any means it deems appropriate. I declare that in accordance with Mawarid Finance’s Islamic status, I will not use any of Mawarid's products or services for non-Shariah-compliant purposes.
              </p>
            </div>
          </div>
          
          <div class="mt-4">
            <label for="consent" class="flex items-center text-sm text-gray-700">
              <input type="checkbox" id="consent" name="consent" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500" required>
              <span class="ml-2">By clicking "Submit," you are providing consent.</span>
            </label>
            <div class="mt-4">
                <button type="submit" class="w-full py-2 px-4 bg-black text-white font-semibold rounded-md shadow-sm hover:bg-gray-800 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Submit
                  </button>
                  
              </div>
  
      
      </form>
    </div>
  </section>
  
  
  


<footer style="display: block;" class="bg-black"><div class="m-auto max-w-6xl "><div class="flex w-full max-w-6xl flex-col gap-12 px-6 py-6 pt-12 md:flex-row md:gap-[92px] md:py-12 xl:px-[0px]"><div class="flex flex-1 flex-col items-start gap-6"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;" alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2770%27%20height=%2730%27/%3e"></span><img alt="logo" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span><p class="text-[14px] leading-[19.6px] font-normal text-natural-gray-2">The first digital mortgage platform in the Middle East with access to over 500 mortgage products from all the banks in the UAE. We can get you the best deal on your mortgage.</p><button class="px-4 py-[7px] rounded-[30px] text-sm font-medium bg-white text-black border border-natural-gray-2 hover:bg-natural-gray-2 en-get-started-footer"><span>Get Started</span></button></div><div class=" flex flex-wrap gap-6 md:flex-[2] md:flex-row md:justify-between"><div class="flex flex-1 flex-col gap-6"><p class="text-[14px] leading-[19.6px] font-normal text-natural-darkGray-2">Company</p><div class="flex flex-col gap-3"><span class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm">About Us</span><span class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm">FAQs</span><span class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm">Tips &amp; Trends</span><span class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm">Privacy &amp; Policy</span></div></div><div class="flex flex-1 flex-col gap-6"><p class="text-[14px] leading-[19.6px] font-normal text-natural-darkGray-2">Resources</p><div class="flex flex-col gap-3"><span class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm">Holo Concierge</span><span class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm">Mortgage Calculator</span><span class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm">Blog</span><span class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm">UK Mortgage</span><span class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm">Commercial Real Estate</span><span class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm">Conveyancing</span></div></div><div class="flex flex-1 flex-col gap-6"><p class="text-[14px] leading-[19.6px] font-normal text-natural-darkGray-2">Partners</p><div class="flex flex-col gap-3"><span class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm">Become a Partner</span><span class="cursor-pointer whitespace-pre text-xs font-medium text-white hover:underline hover:underline-offset-8 md:text-sm">Currency Transfer</span></div><p class="text-[14px] leading-[19.6px] font-normal text-natural-darkGray-2">Looking for our agent app? Hub by Holo now on</p><div class="flex gap-3"><a href="https://apps.apple.com/gb/app/holo-agent-app/id6523420494" target="_blank" rel="noopener noreferrer"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;" alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27154%27%20height=%2756%27/%3e"></span><img alt="Download on the App Store" srcset="/_next/image?url=%2Fassets%2Fapp-store.png&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fassets%2Fapp-store.png&amp;w=384&amp;q=75 2x" src="/_next/image?url=%2Fassets%2Fapp-store.png&amp;w=384&amp;q=75" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></a><a href="https://play.google.com/store/apps/details?id=com.wnapp.id1720417404415" target="_blank" rel="noreferrer noopener"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;" alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27154%27%20height=%2756%27/%3e"></span><img alt="Get it on Google Play" srcset="/_next/image?url=%2Fassets%2Fgoogle-play.png&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fassets%2Fgoogle-play.png&amp;w=384&amp;q=75 2x" src="/_next/image?url=%2Fassets%2Fgoogle-play.png&amp;w=384&amp;q=75" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></span></a></div></div></div></div><div class="h-[1px] w-full bg-natural-darkGray-1"></div><div class="flex flex-col-reverse items-center justify-between gap-6 p-6 md:flex-row xl:px-[0px]"><p class="text-[14px] leading-[19.6px] font-normal text-natural-darkGray-2">@ 2025 Holo. All rights reserved.</p><div class="flex gap-6"><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;" alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2724%27%20height=%2724%27/%3e"></span><img alt="facebook" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;" alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2735%27%20height=%2724%27/%3e"></span><img alt="youtube" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;" alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2727%27%20height=%2722%27/%3e"></span><img alt="twitter" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;" alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2724%27%20height=%2724%27/%3e"></span><img alt="instagram" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span><span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;" alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2724%27%20height=%2724%27/%3e"></span><img alt="linkedin" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span></div></div></div></footer>
</body>
</html>
