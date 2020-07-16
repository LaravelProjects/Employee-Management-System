<?php

use App\Country;
use App\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $us_states = array(
            'AL'	=>	'Alabama',
            'AK'	=>	'Alaska',
            'AS'	=>	'American Samoa',
            'AZ'	=>	'Arizona',
            'AR'	=>	'Arkansas',
            'AE'	=>	'Armed Forces - Europe',
            'AP'	=>	'Armed Forces - Pacific',
            'AA'	=>	'Armed Forces - USA/Canada',
            'CA'	=>	'California',
            'CO'	=>	'Colorado',
            'CT'	=>	'Connecticut',
            'DE'	=>	'Delaware',
            'DC'	=>	'District of Columbia',
            'FL'	=>	'Florida',
            'GA'	=>	'Georgia',
            'GU'	=>	'Guam',
            'HI'	=>	'Hawaii',
            'ID'	=>	'Idaho',
            'IL'	=>	'Illinois',
            'IN'	=>	'Indiana',
            'IA'	=>	'Iowa',
            'KS'	=>	'Kansas',
            'KY'	=>	'Kentucky',
            'LA'	=>	'Louisiana',
            'ME'	=>	'Maine',
            'MD'	=>	'Maryland',
            'MA'	=>	'Massachusetts',
            'MI'	=>	'Michigan',
            'MN'	=>	'Minnesota',
            'MS'	=>	'Mississippi',
            'MO'	=>	'Missouri',
            'MT'	=>	'Montana',
            'NE'	=>	'Nebraska',
            'NV'	=>	'Nevada',
            'NH'	=>	'New Hampshire',
            'NJ'	=>	'New Jersey',
            'NM'	=>	'New Mexico',
            'NY'	=>	'New York',
            'NC'	=>	'North Carolina',
            'ND'	=>	'North Dakota',
            'OH'	=>	'Ohio',
            'OK'	=>	'Oklahoma',
            'OR'	=>	'Oregon',
            'PA'	=>	'Pennsylvania',
            'PR'	=>	'Puerto Rico',
            'RI'	=>	'Rhode Island',
            'SC'	=>	'South Carolina',
            'SD'	=>	'South Dakota',
            'TN'	=>	'Tennessee',
            'TX'	=>	'Texas',
            'UT'	=>	'Utah',
            'VT'	=>	'Vermont',
            'VI'	=>	'Virgin Islands',
            'VA'	=>	'Virginia',
            'WA'	=>	'Washington',
            'WV'	=>	'West Virginia',
            'WI'	=>	'Wisconsin',
            'WY'	=>	'Wyoming'
        );

        $canadian_provinces = array(
            'AB'	=>	'Alberta',
            'BC'	=>	'British Columbia',
            'MB'	=>	'Manitoba',
            'NB'	=>	'New Brunswick',
            'NF'	=>	'Newfoundland and Labrador',
            'NT'	=>	'Northwest Territories',
            'NS'	=>	'Nova Scotia',
            'NU'	=>	'Nunavut',
            'ON'	=>	'Ontario',
            'PE'	=>	'Prince Edward Island',
            'QC'	=>	'Quebec',
            'SK'	=>	'Saskatchewan',
            'YT'	=>	'Yukon Territory'
        ); 

        $aussie_states = array(
            'ACT'	=>	'Australian Capital Territory',
            'JBT'	=>	'Jervis Bay Territory',
            'NSW'	=>	'New South Wales',
            'NT'	=>	'Northern Territory',
            'QLD'	=>	'Queensland',
            'SA'	=>	'South Australia',
            'TAS'	=>	'Tasmania',
            'VIC'	=>	'Victoria',
            'WA'	=>	'Western Australia'
        );

        $us = Country::where('name', 'United States')->first();
        $can = Country::where('name', 'Canada')->first();
        $aus = Country::where('name', 'Australia')->first();

        foreach($us_states as $short => $state) {
            State::create([
                'country_id' => $us->id,
                'name' => $state
            ]);
        }

        foreach($canadian_provinces as $short => $state) {
            State::create([
                'country_id' => $can->id,
                'name' => $state
            ]);
        }

        foreach($aussie_states as $short => $state) {
            State::create([
                'country_id' => $aus->id,
                'name' => $state
            ]);
        }
    }
}
