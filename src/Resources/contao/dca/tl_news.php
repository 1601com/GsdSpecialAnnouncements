<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

// Create Legend for Special Announcements
$GLOBALS['TL_LANG']['tl_news']['special_announcement_legend'] = 'Special Announcement';

// Push a Selector for the trigger Event
array_push($GLOBALS['TL_DCA']['tl_news']['palettes']['__selector__'], 'special_announcement_activate');

// Define empty subpalette
$GLOBALS['TL_DCA']['tl_news']['subpalettes']['special_announcement_activate'] = '';


$GLOBALS['TL_DCA']['tl_news']['config']['onload_callback'] = array(array('GsdSAManipulator', 'manipulatePalette'));


// fields for dca
$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_activate'] = [
    'label'        =>['Special Announcement hinzufügen', ''],
    'exclude'      =>true,
    'inputType'    =>'checkbox',
    'eval'         =>array('submitOnChange'=>true, 'doNotCopy'=>true),
    'sql'          =>"char(1) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_description'] = [
    'label'        =>['Beschreibung des Special Announcements', ''],
    'exclude'      =>true,
    'inputType'    =>'textarea',
    'eval'         =>array('maxlength'=>255, 'tl_class'=>'clr'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_category'] = [
    'label'        =>['Link zur Kategorie des SpecialAnnouncement', 'Beispiel: https://www.wikidata.org/wiki/Q81068910'],
    'inputType'    =>'text',
    'eval'         =>array('maxlength'=>255, 'tl_class'=>'w50', 'rgxp'=>'url'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_expires'] = [
    'label'        =>['Bis wann ist das Special Announcement aktiv?', ''],
    'inputType'    =>'text',
    'eval'         =>array('maxlength'=>255, 'datepicker'=>true, 'tl_class'=>'w50', 'rgxp'=>'date'),
    'sql'          =>"varchar(10) NOT NULL default ''"
];


$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_phone'] = [
    'label'        =>['Telefonnummer', ''],
    'inputType'    =>'text',
    'eval'         =>array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];




$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_location_type'] = [
    'label'        =>['Typ der Location', 'Lokales Geschäft => Hotel | Bürgerliche Strukutr => Schule'],
    'exclude'      =>true,
    'inputType'    =>'select',
    'options'      =>[
        'Lokales Unternehmen'                 => [
            'LocalBusiness'                        => 'Lokales Unternehmen',
            'AnimalShelter'                        => 'Tierheim',
            'ArchiveOrganization'                  => 'Archiv-Organisation',
            'AutomotiveBusiness'                   => 'Automobil-Unternehmen',
            'ChildCare'                            => 'Kinderbetreuung',
            'Dentist'                              => 'Zahnarzt',
            'DryCleaningOrLaundry'                 => 'Chemische Reinigung/Trockenreinigung oder Wäscherei',
            'EmergencyService'                     => 'Notdienst',
            'EmploymentAgency'                     => 'Arbeitsvermittlung',
            'EntertainmentBusiness'                => 'Unterhaltungsgeschäft',
            'FinancialService'                     => 'Finanzierungsdienstleistung',
            'FoodEstablishment'                    => 'Lebensmittelunternehmen',
            'GovernmentOffice'                     => 'Regierungsamt',
            'HealthAndBeautyBusiness'              => 'Gesundheits- und Beauty-Branche',
            'HomeAndConstructionBusiness'          => 'Haus- und Bau-Dienstleistungen',
            'InternetCafe'                         => 'Internetcafé',
            'LegalService'                         => 'Rechtsdienst',
            'Library'                              => 'Bibliothek',
            'LodgingBusiness'                      => 'Wohnungsbranche',
            'MedicalBusiness'                      => 'Medizin-Branche',
            'ProfessionalService'                  => 'Professionelle Dienstleistungen',
            'RadioStation'                         => 'Radiosender',
            'RealEstateAgent'                      => 'Immobilienmakler',
            'RecyclingCenter'                      => 'Wertstoffhof',
            'SelfStorage'                          => 'Mietlager',
            'ShoppingCenter'                       => 'Einkaufszentrum',
            'SportsActivityLocation'               => 'Ort für sportliche Aktivitäten',
            'Store'                                => 'Laden',
            'TelevisionStation'                    => 'Fernsehsender',
            'TouristInformationCenter'             => 'Touristeninformation-Zentrum',
            'TravelAgency'                         => 'Reisebüro'
         ],
        'Bürgerliche Struktur'                => [
            'CivicStructure'                       => 'Bürgerliche Struktur',
            'Airport'                              => 'Flughafen',
            'Aquarium'                             => 'Aquarium',
            'Beach'                                => 'Strand',
            'Bridge'                               => 'Brücke',
            'BusStation'                           => 'Busbahnhof',
            'BusStop'                              => 'Bushaltestelle',
            'Campground'                           => 'Zeltplatz',
            'Cemetery'                             => 'Friedhof',
            'Crematorium'                          => 'Krematorium',
            'EducationalOrganization'              => 'Bildungseinrichtung',
            'EventVenue'                           => 'Veranstaltungsort',
            'FireStation'                          => 'Feuerwehrhaus',
            'GovernmentBuilding'                   => 'Regierungsgebäude',
            'Hospital'                             => 'Krankenhaus',
            'MovieTheater'                         => 'Kino',
            'Museum'                               => 'Museum',
            'MusicVenue'                           => 'Musik-Veranstaltungsort',
            'Park'                                 => 'Park',
            'ParkingFacility'                      => 'Parkplatz',
            'PerformingArtsTheater'                => 'Theater',
            'PlaceOfWorship'                       => 'Andachtsstätte',
            'Playground'                           => 'Kinderspielplatz',
            'PoliceStation'                        => 'Polizeistation',
            'PublicToilet'                         => 'Öffentliche Toilette',
            'RVPark'                               => 'Wohnmobilstellplatz',
            'StadiumOrArena'                       => 'Stadion/Arena',
            'SubwayStation'                        => 'U-Bahn-Station',
            'TaxiStand'                            => 'Taxistation',
            'TrainStation'                         => 'Banhof',
            'Zoo'                                  => 'Zoo',
            'School'                               => 'Schule'
        ],
    ],
    'eval'            => array('maxlength'=>255, 'tl_class'=>'w50 clr', 'submitOnChange'=>true),
    'sql'             => "varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_location_name'] = [
    'label'        =>['Name der Location', 'Beispiel: Hotel Albertinum'],
    'exclude'      =>true,
    'inputType'    =>'text',
    'eval'         =>array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_location_streetAddress'] = [
    'label'        =>['Straße und Hausnummer', ''],
    'exclude'      =>true,
    'inputType'    =>'text',
    'eval'         =>array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_location_addressLocality'] = [
    'label'        =>['Ort', ''],
    'exclude'      =>true,
    'inputType'    =>'text',
    'eval'         =>array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_location_postalCode'] = [
    'label'        =>['Postleitzahl', ''],
    'exclude'      =>true,
    'inputType'    =>'text',
    'eval'         =>array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_location_country'] = [
    'label'        =>['Land', 'Ländercode im Format ISO 3166-2: "DE", "EN", ...'],
    'inputType'    =>'text',
    'eval'         =>array('mandatory'=>true, 'maxlength'=>2, 'tl_class'=>'w50', 'eval'=>'language'),
    'sql'          =>"varchar(2) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_location_region'] = [
    'label'        =>['Region (in DE)', 'Bundesland'],
    'inputType'    =>'select',
    'options'      =>[
        'BW' => 'Baden-Württemberg',
        'BY' => 'Bayern',
        'BE' => 'Berlin',
        'BB' => 'Brandenburg',
        'HB' => 'Bremen',
        'HH' => 'Hamburg',
        'HE' => 'Hessen',
        'MV' => 'Mecklenburg-Vorpommern',
        'NI' => 'Niedersachsen',
        'NW' => 'Nordrhein-Westfalen',
        'RP' => 'Rheinland-Pfalz',
        'SL' => 'Saarland',
        'SN' => 'Sachsen',
        'ST' => 'Sachsen-Anhalt',
        'SH' => 'Schleswig-Holstein',
        'TH' => 'Thüringen',
        'SO' => 'Außerhalb von DE (Bitte füllen Sie das Feld "außerhalb von DE" aus)'
    ],
    'eval'         =>array('tl_class'=>'w50', 'submitOnChange'=>true),
    'sql'          =>"varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_location_region_address'] = [
    'label'        =>['Sonstige Region außerhalb von Deutschland', 'Eingabe im Form von gebräuchlichen Abkürzungen. Beispiel: New York -> NY'],
    'search'       =>true,
    'inputType'    =>'text',
    'eval'         =>array('maxlength'=>10, 'tl_class'=>'w50'),
    'sql'          =>"varchar(10) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_location_openingHours'] = [
    'label'        =>['Öffnungszeiten', 'Beispiel: Mo-Fr 09:00-17:30, Sa 09:00-12:00'],
    'exclude'      =>true,
    'inputType'    =>'text',
    'eval'         =>array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_location_priceRange'] = [
    'label'        =>['Preislicher Rahmen', 'Beispiel: €100 - €240'],
    'exclude'      =>true,
    'inputType'    =>'text',
    'eval'         =>array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];


// Use the PaletteManipulator to create the legend and activation
PaletteManipulator::create()
    ->addLegend('special_announcement_legend', 'source_legend', PaletteManipulator::POSITION_BEFORE)
    ->addField('special_announcement_activate', 'special_announcement_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_news')
;

// Use the PaletteManipulator to create the subpalette
PaletteManipulator::create()
    # Begin of Announcement Types
    ->addField('special_announcement_description', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)
    ->addField('special_announcement_expires', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)
    ->addField('special_announcement_category', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)
    ->addField('special_announcement_location', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)

    # Begin of Location Types
    ->addField('special_announcement_location_type', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)
    ->addField('special_announcement_location_name', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)
    ->addField('special_announcement_location_streetAddress', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)
    ->addField('special_announcement_location_addressLocality', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)
    ->addField('special_announcement_location_postalCode', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)
    ->addField('special_announcement_phone', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)
    ->addField('special_announcement_location_openingHours', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)
    ->addField('special_announcement_location_country', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)
    ->addField('special_announcement_location_region', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)
    ->applyToSubpalette('special_announcement_activate', 'tl_news')
;

class GsdSAManipulator extends Backend
{
    /**
     * Manipuliere die Palette entsprechend des ausgewählten Location-Types
     * @param $dc
     */
    public function manipulatePalette($dc){
        $result = $this->Database->prepare("SELECT * FROM tl_news WHERE id='$dc->id'")->execute();
        $locationType = $result->special_announcement_location_type;
        $locationRegion = $result->special_announcement_location_region;
        $priceRange = $result->special_announcement_location_priceRange;

        $civicStructureWithPriceRange = ['Campground','FireStation','Hospital','MovieTheater','PoliceStation','StadiumOrArena'];

        $localBusiness = $GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_location_type']['options']['Lokales Unternehmen'];
        $civicStructure = $GLOBALS['TL_DCA']['tl_news']['fields']['special_announcement_location_type']['options']['Bürgerliche Struktur'];

        if(array_key_exists($locationType, $localBusiness) || in_array($locationType, $civicStructureWithPriceRange))
        {
            PaletteManipulator::create()
                ->addField('special_announcement_location_priceRange', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)
                ->applyToSubpalette('special_announcement_activate', 'tl_news')
            ;
        }
        elseif(array_key_exists($locationType, $civicStructure))
        {
            if($priceRange)
            {
                $this->Database->prepare("UPDATE tl_news SET special_announcement_location_priceRange='' WHERE id=?")->execute($dc->id);
            }
        }

        if((string) $locationRegion == 'SO')
        {
            PaletteManipulator::create()
                ->addField('special_announcement_location_region_address', 'special_announcement_activate', PaletteManipulator::POSITION_AFTER)
                ->applyToSubpalette('special_announcement_activate', 'tl_news')
            ;
        }
    }
}