<?php
/**
 * SCallback for the Schema organization type field.
 *
 * @package    Toby_Yates
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace TimS_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$types = [

	// First option save null.
	null          => __( 'Select one&hellip;', 'yates' ),
	'Airline'     => __( 'Airline', 'yates' ),
	'Corporation' => __( 'Corporation', 'yates' ),

	// Educational Organizations.
	'EducationalOrganization' => __( 'Educational Organization', 'yates' ),
		'CollegeOrUniversity' => __( '— College or University', 'yates' ),
		'ElementarySchool'    => __( '— Elementary School', 'yates' ),
		'HighSchool'          => __( '— High School', 'yates' ),
		'MiddleSchool'        => __( '— Middle School', 'yates' ),
		'Preschool'           => __( '— Preschool', 'yates' ),
		'School'              => __( '— School', 'yates' ),

	'GovernmentOrganization'  => __( 'Government Organization', 'yates' ),

	// Local Businesses.
	'LocalBusiness' => __( 'Local Business', 'yates' ),
		'AnimalShelter' => __( '— Animal Shelter', 'yates' ),

		// Automotive Businesses.
		'AutomotiveBusiness' => __( '— Automotive Business', 'yates' ),
			'AutoBodyShop'     => __( '—— Auto Body Shop', 'yates' ),
			'AutoDealer'       => __( '—— Auto Dealer', 'yates' ),
			'AutoPartsStore'   => __( '—— Auto Parts Store', 'yates' ),
			'AutoRental'       => __( '—— Auto Rental', 'yates' ),
			'AutoRepair'       => __( '—— Auto Repair', 'yates' ),
			'AutoWash'         => __( '—— Auto Wash', 'yates' ),
			'GasStation'       => __( '—— Gas Station', 'yates' ),
			'MotorcycleDealer' => __( '—— Motorcycle Dealer', 'yates' ),
			'MotorcycleRepair' => __( '—— Motorcycle Repair', 'yates' ),

		'ChildCare'            => __( '— Child Care', 'yates' ),
		'Dentist'              => __( '— Dentist', 'yates' ),
		'DryCleaningOrLaundry' => __( '— Dry Cleaning or Laundry', 'yates' ),

		// Emergency Services.
		'EmergencyService' => __( '— Emergency Service', 'yates' ),
			'FireStation'   => __( '—— Fire Station', 'yates' ),
			'Hospital'      => __( '—— Hospital', 'yates' ),
			'PoliceStation' => __( '—— Police Station', 'yates' ),

		'EmploymentAgency' => __( '— Employment Agency', 'yates' ),

		// Entertainment Businesses.
		'EntertainmentBusiness' => __( '— Entertainment Business', 'yates' ),
			'AdultEntertainment' => __( '—— Adult Entertainment', 'yates' ),
			'AmusementPark'      => __( '—— Amusement Park', 'yates' ),
			'ArtGallery'         => __( '—— Art Gallery', 'yates' ),
			'Casino'             => __( '—— Casino', 'yates' ),
			'ComedyClub'         => __( '—— Comedy Club', 'yates' ),
			'MovieTheater'       => __( '—— Movie Theater', 'yates' ),
			'NightClub'          => __( '—— Night Club', 'yates' ),

		// Financial Services.
		'FinancialService' => __( '— Financial Service', 'yates' ),
			'AccountingService' => __( '—— Accounting Service', 'yates' ),
			'AutomatedTeller'   => __( '—— Automated Teller', 'yates' ),
			'BankOrCreditUnion' => __( '—— Bank or Credit Union', 'yates' ),
			'InsuranceAgency'   => __( '—— Insurance Agency', 'yates' ),

		// Food Establishments.
		'FoodEstablishment' => __( '— Food Establishment', 'yates' ),
			'Bakery'             => __( '—— Bakery', 'yates' ),
			'BarOrPub'           => __( '—— Bar or Pub', 'yates' ),
			'Brewery'            => __( '—— Brewery', 'yates' ),
			'CafeOrCoffeeShop'   => __( '—— Cafe or Coffee Shop', 'yates' ),
			'FastFoodRestaurant' => __( '—— Fast Food Restaurant', 'yates' ),
			'IceCreamShop'       => __( '—— Ice Cream Shop', 'yates' ),
			'Restaurant'         => __( '—— Restaurant', 'yates' ),
			'Winery'             => __( '—— Winery', 'yates' ),

		// Government Offices.
		'GovernmentOffice' => __( '— Government Office', 'yates' ),
			'PostOffice' => __( '—— Post Office', 'yates' ),

		// Health and Beauty Businesses.
		'HealthAndBeautyBusiness' => __( '— Health and Beauty Business', 'yates' ),
			'BeautySalon'  => __( '—— Beauty Salon', 'yates' ),
			'DaySpa'       => __( '—— Day Spa', 'yates' ),
			'HairSalon'    => __( '—— Hair Salon', 'yates' ),
			'HealthClub'   => __( '—— Health Club', 'yates' ),
			'NailSalon'    => __( '—— Nail Salon', 'yates' ),
			'TattooParlor' => __( '—— Tattoo Parlor', 'yates' ),

		// Home and Construction Businesses.
		'HomeAndConstructionBusiness' => __( '— Home and Construction Business', 'yates' ),
			'Electrician'       => __( '—— Electrician', 'yates' ),
			'GeneralContractor' => __( '—— General Contractor', 'yates' ),
			'HVACBusiness'      => __( '—— HVAC Business', 'yates' ),
			'HousePainter'      => __( '—— House Painter', 'yates' ),
			'Locksmith'         => __( '—— Locksmith', 'yates' ),
			'MovingCompany'     => __( '—— MovingCompany', 'yates' ),
			'Plumber'           => __( '—— Plumber', 'yates' ),
			'RoofingContractor' => __( '—— Roofing Contractor', 'yates' ),

		'InternetCafe' => __( '— Internet Cafe', 'yates' ),

		// Legal Services.
		'LegalService' => __( '— Legal Service', 'yates' ),
			'Attorney' => __( '—— Attorney', 'yates' ),
			'Notary'   => __( '—— Notary', 'yates' ),

		'Library' => __( '— Library', 'yates' ),

		// Lodging Businesses.
		'LodgingBusiness' => __( '— Lodging Business', 'yates' ),
			'BedAndBreakfast' => __( '—— Bed and Breakfast', 'yates' ),
			'Campground'      => __( '—— Campground', 'yates' ),
			'Hostel'          => __( '—— Hostel', 'yates' ),
			'Hotel'           => __( '—— Hotel', 'yates' ),
			'Motel'           => __( '—— Motel', 'yates' ),
			'Resort'          => __( '—— Resort', 'yates' ),

		'ProfessionalService' => __( '— Professional Service', 'yates' ),
		'RadioStation'        => __( '— Radio Station', 'yates' ),
		'RealEstateAgent'     => __( '— Real Estate Agent', 'yates' ),
		'RecyclingCenter'     => __( '— Recycling Center', 'yates' ),
		'SelfStorage'         => __( '— Self Storage', 'yates' ),
		'ShoppingCenter'      => __( '— Shopping Center', 'yates' ),

		// Sports Activity Locations.
		'SportsActivityLocation' => __( '— Sports Activity Location', 'yates' ),
			'BowlingAlley'       => __( '—— Bowling Alley', 'yates' ),
			'ExerciseGym'        => __( '—— Exercise Gym', 'yates' ),
			'GolfCourse'         => __( '—— Golf Course', 'yates' ),
			'HealthClub'         => __( '—— Health Club', 'yates' ),
			'PublicSwimmingPool' => __( '—— Public Swimming Pool', 'yates' ),
			'SkiResort'          => __( '—— Ski Resort', 'yates' ),
			'SportsClub'         => __( '—— Sports Club', 'yates' ),
			'StadiumOrArena'     => __( '—— Stadium or Arena', 'yates' ),
			'TennisComplex'      => __( '—— Tennis Complex', 'yates' ),

		// Store types.
		'Store' => __( '— Store', 'yates' ),
			'AutoPartsStore'      => __( '—— Auto Parts Store', 'yates' ),
			'BikeStore'           => __( '—— Bike Store', 'yates' ),
			'BookStore'           => __( '—— Book Store', 'yates' ),
			'ClothingStore'       => __( '—— Clothing Store', 'yates' ),
			'ComputerStore'       => __( '—— Computer Store', 'yates' ),
			'ConvenienceStore'    => __( '—— Convenience Store', 'yates' ),
			'DepartmentStore'     => __( '—— Department Store', 'yates' ),
			'ElectronicsStore'    => __( '—— Electronics Store', 'yates' ),
			'Florist'             => __( '—— Florist', 'yates' ),
			'FurnitureStore'      => __( '—— Furniture Store', 'yates' ),
			'GardenStore'         => __( '—— Garden Store', 'yates' ),
			'GroceryStore'        => __( '—— Grocery Store', 'yates' ),
			'HardwareStore'       => __( '—— Hardware Store', 'yates' ),
			'HobbyShop'           => __( '—— Hobby Shop', 'yates' ),
			'HomeGoodsStore'      => __( '—— Home Goods Store', 'yates' ),
			'JewelryStore'        => __( '—— Jewelry Store', 'yates' ),
			'LiquorStore'         => __( '—— Liquor Store', 'yates' ),
			'MensClothingStore'   => __( '—— Mens Clothing Store', 'yates' ),
			'MobilePhoneStore'    => __( '—— Mobile Phone Store', 'yates' ),
			'MovieRentalStore'    => __( '—— Movie Rental Store', 'yates' ),
			'MusicStore'          => __( '—— Music Store', 'yates' ),
			'OfficeEquipmentStore'=> __( '—— Office Equipment Store', 'yates' ),
			'OutletStore'         => __( '—— Outlet Store', 'yates' ),
			'PawnShop'            => __( '—— Pawn Shop', 'yates' ),
			'PetStore'            => __( '—— Pet Store', 'yates' ),
			'ShoeStore'           => __( '—— Shoe Store', 'yates' ),
			'SportingGoodsStore'  => __( '—— Sporting Goods Store', 'yates' ),
			'TireShop'            => __( '—— Tire Shop', 'yates' ),
			'ToyStore'            => __( '—— Toy Store', 'yates' ),
			'WholesaleStore'      => __( '—— Wholesale Store', 'yates' ),

		'TelevisionStation'        => __( '— Television Station', 'yates' ),
		'TouristInformationCenter' => __( '— Tourist Information Center', 'yates' ),
		'TravelAgency'             => __( '— Travel Agency', 'yates' ),

	'MedicalOrganization' => __( 'Medical Organization', 'yates' ),
	'NGO'                 => __( 'NGO (Non-Governmental Organization', 'yates' ),
	'PerformingGroup'     => __( 'Performing Group', 'yates' ),
	'SportsOrganization'  => __( 'Sports Organization', 'yates' )
];

$options = get_option( 'schema_org_type' );

$html = '<p><select id="schema_org_type" name="schema_org_type">';

foreach( $types as $type => $value ) {

	$selected = ( $options == $type ) ? 'selected="' . esc_attr( 'selected' ) . '"' : '';

	$html .= '<option value="' . esc_attr( $type ) . '" ' . $selected . '>' . esc_html( $value ) . '</option>';

}

$html .= '</select>';
$html .= sprintf(
	'<label for="schema_org_type"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
	$args[0],
	esc_attr( esc_url( 'https://schema.org/docs/full.html#C.Organization' ) ),
	esc_attr( __( 'Read documentation for organization types', 'yates' ) )
);
$html .= '</p>';

echo $html;