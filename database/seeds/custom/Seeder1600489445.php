<?php

namespace Database\Seeds\Custom;

use Illuminate\Database\Seeder;
use DB;
class Seeder1600489445 extends Seeder
{
    public function run()
    {
    	$employment_types =  array(
        array('id' => 1, 'value' => 'Employee', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
        array('id' => 2, 'value' => 'Contractor', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('employment_types')->insert($employment_types);

      $contract_types = array(
        array('id' => 1, 'value' => 'Full - Time', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
        array('id' => 2, 'value' => 'Part - Time', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
        array('id' => 3, 'value' => 'Ad - Hoc', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('contract_types')->insert($contract_types);

      $titles = array(
      	array('id' => 1, 'value' => 'Mr', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 2, 'value' => 'Mrs', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 3, 'value' => 'Ms', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 4, 'value' => 'Dr', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 5, 'value' => 'Master', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('contact_titles')->insert($titles);

      $blood_groups = array(
      	array('id' => 1, 'value' => 'A + ve', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 2, 'value' => 'A - ve', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 3, 'value' => 'B + ve', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 4, 'value' => 'B - ve', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 5, 'value' => 'O + ve', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 6, 'value' => 'O - ve', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 7, 'value' => 'AB + ve', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 8, 'value' => 'AB - ve', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('blood_groups')->insert($blood_groups);

      $relationships = array(
      	array('id' => 1, 'value' => 'Partner', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 2, 'value' => 'Wife', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 3, 'value' => 'Husband', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 4, 'value' => 'Son', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 5, 'value' => 'Daughter', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 6, 'value' => 'Brother', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 7, 'value' => 'Sister', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('relationships')->insert($relationships);

      $document_types = array(
      	array('id' => 1, 'value' => 'Passport', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 2, 'value' => 'Driving License', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 3, 'value' => 'Voter ID', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 4, 'value' => 'Adhar card', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 5, 'value' => 'BRP(Bio metric REsident permit)', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 6, 'value' => 'Pan Card', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('document_types')->insert($document_types);

      $period_frequency =  array(
      	array('id' => 1, 'value' => 'Hour', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 2, 'value' => 'Day', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 3, 'value' => 'Week', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 4, 'value' => 'Bi-Weekly', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 5, 'value' => 'Month', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 6, 'value' => 'Year', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('period_frequencies')->insert($period_frequency);

      $attendance = array(
      	array('id' => 1, 'value' => 'Manaul', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 2, 'value' => 'Auto', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 3, 'value' => 'Approval', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('attendances')->insert($attendance);

      $educational_levels = array(
      	array('id' => 1, 'value' => '10th', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 2, 'value' => '12th', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 3, 'value' => 'BCA', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('education_levels')->insert($educational_levels);

      $job_types = array(
      	array('id' => 1, 'value' => 'Full Time', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 2, 'value' => 'Part Time', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 3, 'value' => 'Internship', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('job_types')->insert($job_types);

      $job_categories = array(
      	array('id' => 1, 'value' => 'PHP Developer', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 2, 'value' => 'Android Developer', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 3, 'value' => 'WordPress Developer', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 4, 'value' => 'Graphic Designer', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 5, 'value' => 'Laravel Developer', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 6, 'value' => 'iPhone App Developer', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('job_categories')->insert($job_categories);

      $genders = array(
      	array('id' => 1, 'value' => 'Male', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 2, 'value' => 'Female', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('genders')->insert($genders);

      $marital_status = array(
      	array('id' => 1, 'value' => 'Single', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 2, 'value' => 'Married', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('martial_statuses')->insert($marital_status);

      $contact_tags = array(
      	array('id' => 1, 'value' => 'Marketing', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 2, 'value' => 'Recruitment', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 3, 'value' => 'Client', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('contact_tags')->insert($contact_tags);

      $industry_and_businesses = array(
      	array('id' => 1, 'value' => 'Administrative ', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 2, 'value' => 'Agriculture', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('industry_and_businesses')->insert($industry_and_businesses);

      $nationality = array(
      	array('id' => 1, 'value' => 'Afghan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 2, 'value' => 'Albanian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 3, 'value' => 'Algerian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 4, 'value' => 'American', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 5, 'value' => 'Andorran', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 6, 'value' => 'Angolan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 7, 'value' => 'Anguillan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 8, 'value' => 'Argentine', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 9, 'value' => 'Armenian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 10, 'value' => 'Australian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 11, 'value' => 'Austrian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 12, 'value' => 'Azerbaijani', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 13, 'value' => 'Bahamian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 14, 'value' => 'Bahraini', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 15, 'value' => 'Bangladeshi', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 16, 'value' => 'Barbadian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 17, 'value' => 'Belarusian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 18, 'value' => 'Belgian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 19, 'value' => 'Belizean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 20, 'value' => 'Beninese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 21, 'value' => 'Bermudian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 22, 'value' => 'Bhutanese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 23, 'value' => 'Bolivian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 24, 'value' => 'Botswanan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 25, 'value' => 'Brazilian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 26, 'value' => 'British', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 27, 'value' => 'British Virgin Islander', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 28, 'value' => 'Bruneian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 29, 'value' => 'Bulgarian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 30, 'value' => 'Burkinan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 31, 'value' => 'Burmese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 32, 'value' => 'Burundian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 33, 'value' => 'Cambodian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 34, 'value' => 'Cameroonian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 35, 'value' => 'Canadian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 36, 'value' => 'Cape Verdean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 37, 'value' => 'Cayman Islander', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 38, 'value' => 'Central African', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 39, 'value' => 'Chadian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 40, 'value' => 'Chilean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 41, 'value' => 'Chinese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 42, 'value' => 'Citizen of Antigua and Barbuda', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 43, 'value' => 'Citizen of Bosnia and Herzegovina', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 44, 'value' => 'Citizen of Guinea-Bissau', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 45, 'value' => 'Citizen of Kiribati', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 46, 'value' => 'Citizen of Seychelles', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 47, 'value' => 'Citizen of the Dominican Republic', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
				array('id' => 48, 'value' => 'Citizen of Vanuatu', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 49, 'value' => 'Colombian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 50, 'value' => 'Comoran', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 51, 'value' => 'Congolese (Congo)', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 52, 'value' => 'Congolese (DRC)', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 53, 'value' => 'Cook Islander', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 54, 'value' => 'Costa Rican', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 55, 'value' => 'Croatian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 56, 'value' => 'Cuban', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 57, 'value' => 'Cymraes', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 58, 'value' => 'Cymro', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 59, 'value' => 'Cypriot', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 60, 'value' => 'Czech', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 61, 'value' => 'Danish', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 62, 'value' => 'Djiboutian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 63, 'value' => 'Dominican', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 64, 'value' => 'Dutch', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 65, 'value' => 'East Timorese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 66, 'value' => 'Ecuadorean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 67, 'value' => 'Egyptian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 68, 'value' => 'Emirati', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 69, 'value' => 'English', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 70, 'value' => 'Equatorial Guinean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 71, 'value' => 'Eritrean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 72, 'value' => 'Estonian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 73, 'value' => 'Ethiopian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 74, 'value' => 'Faroese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 75, 'value' => 'Fijian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 76, 'value' => 'Filipino', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 77, 'value' => 'Finnish', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 78, 'value' => 'French', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 79, 'value' => 'Gabonese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 80, 'value' => 'Gambian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 81, 'value' => 'Georgian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 82, 'value' => 'German', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 83, 'value' => 'Ghanaian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 84, 'value' => 'Gibraltarian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 85, 'value' => 'Greek', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 86, 'value' => 'Greenlandic', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 87, 'value' => 'Grenadian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 88, 'value' => 'Guamanian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 89, 'value' => 'Guatemalan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 90, 'value' => 'Guinean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 91, 'value' => 'Guyanese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 92, 'value' => 'Haitian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 93, 'value' => 'Honduran', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 94, 'value' => 'Hong Konger', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 95, 'value' => 'Hungarian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 96, 'value' => 'Icelandic', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 97, 'value' => 'Indian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 98, 'value' => 'Indonesian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 99, 'value' => 'Iranian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 100, 'value' => 'Iraqi', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 101, 'value' => 'Irish', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 102, 'value' => 'Israeli', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 103, 'value' => 'Italian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 104, 'value' => 'Ivorian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 105, 'value' => 'Jamaican', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 106, 'value' => 'Japanese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 107, 'value' => 'Jordanian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 108, 'value' => 'Kazakh', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 109, 'value' => 'Kenyan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 110, 'value' => 'Kittitian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 111, 'value' => 'Kosovan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 112, 'value' => 'Kuwaiti', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 113, 'value' => 'Kyrgyz', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 114, 'value' => 'Lao', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 115, 'value' => 'Latvian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 116, 'value' => 'Lebanese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 117, 'value' => 'Liberian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 118, 'value' => 'Libyan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 119, 'value' => 'Liechtenstein citizen', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 120, 'value' => 'Lithuanian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 121, 'value' => 'Luxembourger', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 122, 'value' => 'Macanese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 123, 'value' => 'Macedonian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 124, 'value' => 'Malagasy', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 125, 'value' => 'Malawian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 126, 'value' => 'Malaysian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 127, 'value' => 'Maldivian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 128, 'value' => 'Malian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 129, 'value' => 'Maltese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 130, 'value' => 'Marshallese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 131, 'value' => 'Martiniquais', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 132, 'value' => 'Mauritanian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 133, 'value' => 'Mauritian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 134, 'value' => 'Mexican', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 135, 'value' => 'Micronesian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 136, 'value' => 'Moldovan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 137, 'value' => 'Monegasque', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
 				array('id' => 138, 'value' => 'Mongolian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 139, 'value' => 'Montenegrin', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 140, 'value' => 'Montserratian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 141, 'value' => 'Moroccan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 142, 'value' => 'Mosotho', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 143, 'value' => 'Mozambican', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 144, 'value' => 'Namibian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 145, 'value' => 'Nauruan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 146, 'value' => 'Nepalese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 147, 'value' => 'New Zealander', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
				array('id' => 148, 'value' => 'Nicaraguan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 149, 'value' => 'Nigerian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 150, 'value' => 'Nigerien', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 151, 'value' => 'Niuean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 152, 'value' => 'North Korean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 153, 'value' => 'Northern Irish', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 154, 'value' => 'Norwegian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 155, 'value' => 'Omani', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 156, 'value' => 'Pakistani', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 157, 'value' => 'Palauan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 158, 'value' => 'Palestinian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 159, 'value' => 'Panamanian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 160, 'value' => 'Papua New Guinean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 161, 'value' => 'Paraguayan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 162, 'value' => 'Peruvian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 163, 'value' => 'Pitcairn Islander', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 164, 'value' => 'Polish', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 165, 'value' => 'Portuguese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 166, 'value' => 'Prydeinig', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 167, 'value' => 'Puerto Rican', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 168, 'value' => 'Qatari', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 169, 'value' => 'Romanian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 170, 'value' => 'Russian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 171, 'value' => 'Rwandan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 172, 'value' => 'Salvadorean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 173, 'value' => 'Sammarinese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 174, 'value' => 'Samoan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 175, 'value' => 'Sao Tomean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 176, 'value' => 'Saudi Arabian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 177, 'value' => 'Scottish', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 178, 'value' => 'Senegalese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 179, 'value' => 'Serbian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 180, 'value' => 'Sierra Leonean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 181, 'value' => 'Singaporean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 182, 'value' => 'Slovak', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 183, 'value' => 'Slovenian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 184, 'value' => 'Solomon Islander', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 185, 'value' => 'Somali', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 186, 'value' => 'South African', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 187, 'value' => 'South Korean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
				array('id' => 188, 'value' => 'South Sudanese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 189, 'value' => 'Spanish', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 190, 'value' => 'Sri Lankan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 191, 'value' => 'St Helenian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 192, 'value' => 'St Lucian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 193, 'value' => 'Stateless', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 194, 'value' => 'Sudanese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 195, 'value' => 'Surinamese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 196, 'value' => 'Swazi', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 197, 'value' => 'Swedish', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 198, 'value' => 'Swiss', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 199, 'value' => 'Syrian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 200, 'value' => 'Taiwanese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 201, 'value' => 'Tajik', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 202, 'value' => 'Tanzanian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 203, 'value' => 'Thai', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 204, 'value' => 'Togolese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 205, 'value' => 'Tongan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 206, 'value' => 'Trinidadian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 207, 'value' => 'Tristanian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 208, 'value' => 'Tunisian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 209, 'value' => 'Turkish', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 210, 'value' => 'Turkmen', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 211, 'value' => 'Turks and Caicos Islander', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 212, 'value' => 'Tuvaluan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 213, 'value' => 'Ugandan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 214, 'value' => 'Ukrainian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 215, 'value' => 'Uruguayan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 216, 'value' => 'Uzbek', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 217, 'value' => 'Vatican citizen', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 218, 'value' => 'Venezuelan', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 219, 'value' => 'Vietnamese', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 220, 'value' => 'Vincentian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 221, 'value' => 'Wallisian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 222, 'value' => 'Welsh', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 223, 'value' => 'Yemeni', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 224, 'value' => 'Zambian', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      	array('id' => 225, 'value' => 'Zimbabwean', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()),
      );
      DB::table('nationalities')->insert($nationality);

    }
}