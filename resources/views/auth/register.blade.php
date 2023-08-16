@php
$countries = [
     'Afghanistan',
     'Åland Islands',
     'Albania',
     'Algeria',
     'American Samoa',
     'AndorrA',
     'Angola',
     'Anguilla',
     'Antarctica',
     'Antigua and Barbuda',
     'Argentina',
     'Armenia',
     'Aruba',
     'Australia',
     'Austria',
     'Azerbaijan',
     'Bahamas',
     'Bahrain',
     'Bangladesh',
     'Barbados',
     'Belarus',
     'Belgium',
     'Belize',
     'Benin',
     'Bermuda',
     'Bhutan',
     'Bolivia',
     'Bosnia and Herzegovina',
     'Botswana',
     'Bouvet Island',
     'Brazil',
     'British Indian Ocean Territory',
     'Brunei Darussalam',
     'Bulgaria',
     'Burkina Faso',
     'Burundi',
     'Cambodia',
     'Cameroon',
     'Canada',
     'Cape Verde',
     'Cayman Islands',
     'Central African Republic',
     'Chad',
     'Chile',
     'China',
     'Christmas Island',
     'Cocos (Keeling) Islands',
     'Colombia',
     'Comoros',
     'Congo',
     'Congo, The Democratic Republic of the',
     'Cook Islands',
     'Costa Rica',
     'Cote D Ivoire',
     'Croatia',
     'Cuba',
     'Cyprus',
     'Czech Republic',
     'Denmark',
     'Djibouti',
     'Dominica',
     'Dominican Republic',
     'Ecuador',
     'Egypt',
     'El Salvador',
     'Equatorial Guinea',
     'Eritrea',
     'Estonia',
     'Ethiopia',
     'Falkland Islands (Malvinas)',
     'Faroe Islands',
     'Fiji',
     'Finland',
     'France',
     'French Guiana',
     'French Polynesia',
     'French Southern Territories',
     'Gabon',
     'Gambia',
     'Georgia',
     'Germany',
     'Ghana',
     'Gibraltar',
     'Greece',
     'Greenland',
     'Grenada',
     'Guadeloupe',
     'Guam',
     'Guatemala',
     'Guernsey',
     'Guinea',
     'Guinea-Bissau',
     'Guyana',
     'Haiti',
     'Heard Island and Mcdonald Islands',
     'Holy See (Vatican City State)',
     'Honduras',
     'Hong Kong',
     'Hungary',
     'Iceland',
     'India',
     'Indonesia',
     'Iran, Islamic Republic Of',
     'Iraq',
     'Ireland',
     'Isle of Man',
     'Israel',
     'Italy',
     'Jamaica',
     'Japan',
     'Jersey',
     'Jordan',
     'Kazakhstan',
     'Kenya',
     'Kiribati',
     'Korea, Democratic People Republic of',
     'Korea, Republic of',
     'Kuwait',
     'Kyrgyzstan',
     'Lao People Democratic Republic',
     'Latvia',
     'Lebanon',
     'Lesotho',
     'Liberia',
     'Libyan Arab Jamahiriya',
     'Liechtenstein',
     'Lithuania',
     'Luxembourg',
     'Macao',
     'Macedonia, The Former Yugoslav Republic of',
     'Madagascar',
     'Malawi',
     'Malaysia',
     'Maldives',
     'Mali',
     'Malta',
     'Marshall Islands',
     'Martinique',
     'Mauritania',
     'Mauritius',
     'Mayotte',
     'Mexico',
     'Micronesia, Federated States of',
     'Moldova, Republic of',
     'Monaco',
     'Mongolia',
     'Montserrat',
     'Morocco',
     'Mozambique',
     'Myanmar',
     'Namibia',
     'Nauru',
     'Nepal',
     'Netherlands',
     'Netherlands Antilles',
     'New Caledonia',
     'New Zealand',
     'Nicaragua',
     'Niger',
     'Nigeria',
     'Niue',
     'Norfolk Island',
     'Northern Mariana Islands',
     'Norway',
     'Oman',
     'Pakistan',
     'Palau',
     'Palestinian Territory, Occupied',
     'Panama',
     'Papua New Guinea',
     'Paraguay',
     'Peru',
     'Philippines',
     'Pitcairn',
     'Poland',
     'Portugal',
     'Puerto Rico',
     'Qatar',
     'Reunion',
     'Romania',
     'Russian Federation',
     'RWANDA',
     'Saint Helena',
     'Saint Kitts and Nevis',
     'Saint Lucia',
     'Saint Pierre and Miquelon',
     'Saint Vincent and the Grenadines',
     'Samoa',
     'San Marino',
     'Sao Tome and Principe',
     'Saudi Arabia',
     'Senegal',
     'Serbia and Montenegro',
     'Seychelles',
     'Sierra Leone',
     'Singapore',
     'Slovakia',
     'Slovenia',
     'Solomon Islands',
     'Somalia',
     'South Africa',
     'South Georgia and the South Sandwich Islands',
     'Spain',
     'Sri Lanka',
     'Sudan',
     'Suriname',
     'Svalbard and Jan Mayen',
     'Swaziland',
     'Sweden',
     'Switzerland',
     'Syrian Arab Republic',
     'Taiwan, Province of China',
     'Tajikistan',
     'Tanzania, United Republic of',
     'Thailand',
     'Timor-Leste',
     'Togo',
     'Tokelau',
     'Tonga',
     'Trinidad and Tobago',
     'Tunisia',
     'Turkey',
     'Turkmenistan',
     'Turks and Caicos Islands',
     'Tuvalu',
     'Uganda',
     'Ukraine',
     'United Arab Emirates',
     'United Kingdom',
     'United States',
     'United States Minor Outlying Islands',
     'Uruguay',
     'Uzbekistan',
     'Vanuatu',
     'Venezuela',
     'Viet Nam',
     'Virgin Islands, British',
     'Virgin Islands, U.S.',
     'Wallis and Futuna',
     'Western Sahara',
     'Yemen',
     'Zambia',
     'Zimbabwe',
];
     
@endphp

<x-guest-layout>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="phone" :value="__('phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="age" :value="__('age')" />
            <x-text-input id="age" class="block mt-1 w-full" type="text" name="age" :value="old('age')" required autocomplete="age" />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>

            

        <div class="form-group">
            <label for="input-select">Country</label>
            
            <select class="form-control" id="countries" name="country">
             @foreach ( $countries as $country )
                 <option value="{{$country}}">{{$country}}</option>
             @endforeach
            </select>
            <x-input-error :messages="$errors->get('country')" class="mt-2" />
            
        </div>
        <div class="form-group">
                <label for="input-select">Gender</label>
                <select class="form-control" id="input-select" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                
                </select>
                    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
