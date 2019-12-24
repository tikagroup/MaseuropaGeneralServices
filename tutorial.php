<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://maseuropa.trunk.orbisbooking.com/owbooking/soap/integracion.php?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://maseuropa.trunk.orbisbooking.com/owbooking/soap/integracion.php?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Maseuropa\GeneralServices\ClassMap::get(),
);
/**
 * Samples for Externalbookingticketdisplay ServiceType
 */
$externalbookingticketdisplay = new \Maseuropa\GeneralServices\ServiceType\Externalbookingticketdisplay($options);
/**
 * Sample call for external_booking_ticket_display operation/method
 */
if ($externalbookingticketdisplay->external_booking_ticket_display(new \Maseuropa\GeneralServices\StructType\Auth(), $locator) !== false) {
    print_r($externalbookingticketdisplay->getResult());
} else {
    print_r($externalbookingticketdisplay->getLastError());
}
/**
 * Samples for Languages ServiceType
 */
$languages = new \Maseuropa\GeneralServices\ServiceType\Languages($options);
/**
 * Sample call for languages operation/method
 */
if ($languages->languages(new \Maseuropa\GeneralServices\StructType\Auth()) !== false) {
    print_r($languages->getResult());
} else {
    print_r($languages->getLastError());
}
/**
 * Samples for Airlinesiata ServiceType
 */
$airlinesiata = new \Maseuropa\GeneralServices\ServiceType\Airlinesiata($options);
/**
 * Sample call for airlines_iata operation/method
 */
if ($airlinesiata->airlines_iata(new \Maseuropa\GeneralServices\StructType\Auth(), $name, $supplier_id, $provider_id) !== false) {
    print_r($airlinesiata->getResult());
} else {
    print_r($airlinesiata->getLastError());
}
/**
 * Samples for Airportsiata ServiceType
 */
$airportsiata = new \Maseuropa\GeneralServices\ServiceType\Airportsiata($options);
/**
 * Sample call for airports_iata operation/method
 */
if ($airportsiata->airports_iata(new \Maseuropa\GeneralServices\StructType\Auth(), $name, $city, $country_code, $country_area_id) !== false) {
    print_r($airportsiata->getResult());
} else {
    print_r($airportsiata->getLastError());
}
/**
 * Samples for Agencies ServiceType
 */
$agencies = new \Maseuropa\GeneralServices\ServiceType\Agencies($options);
/**
 * Sample call for agencies operation/method
 */
if ($agencies->agencies(new \Maseuropa\GeneralServices\StructType\Auth(), $name, $address, $city, $province, $country, $agency_id) !== false) {
    print_r($agencies->getResult());
} else {
    print_r($agencies->getLastError());
}
/**
 * Samples for Countries ServiceType
 */
$countries = new \Maseuropa\GeneralServices\ServiceType\Countries($options);
/**
 * Sample call for countries operation/method
 */
if ($countries->countries(new \Maseuropa\GeneralServices\StructType\Auth(), $date_update, $article_class_id, $language_id) !== false) {
    print_r($countries->getResult());
} else {
    print_r($countries->getLastError());
}
/**
 * Samples for Provinces ServiceType
 */
$provinces = new \Maseuropa\GeneralServices\ServiceType\Provinces($options);
/**
 * Sample call for provinces operation/method
 */
if ($provinces->provinces(new \Maseuropa\GeneralServices\StructType\Auth(), $zone_id, $article_class_type_id) !== false) {
    print_r($provinces->getResult());
} else {
    print_r($provinces->getLastError());
}
/**
 * Samples for Cities ServiceType
 */
$cities = new \Maseuropa\GeneralServices\ServiceType\Cities($options);
/**
 * Sample call for cities operation/method
 */
if ($cities->cities(new \Maseuropa\GeneralServices\StructType\Auth(), $zone_id, $country_zone_id, $article_class_type_id, $province, $active_contract, $extended_info, $language_id) !== false) {
    print_r($cities->getResult());
} else {
    print_r($cities->getLastError());
}
/**
 * Samples for Suppliers ServiceType
 */
$suppliers = new \Maseuropa\GeneralServices\ServiceType\Suppliers($options);
/**
 * Sample call for suppliers operation/method
 */
if ($suppliers->suppliers(new \Maseuropa\GeneralServices\StructType\Auth(), $date_update, $zone_id, $article_class_type_id, $province, $city, $language_id, $extended_info, $active_contract) !== false) {
    print_r($suppliers->getResult());
} else {
    print_r($suppliers->getLastError());
}
/**
 * Samples for Occupancies ServiceType
 */
$occupancies = new \Maseuropa\GeneralServices\ServiceType\Occupancies($options);
/**
 * Sample call for occupancies operation/method
 */
if ($occupancies->occupancies(new \Maseuropa\GeneralServices\StructType\Auth(), $article_class_type_id) !== false) {
    print_r($occupancies->getResult());
} else {
    print_r($occupancies->getLastError());
}
/**
 * Samples for Citiestours ServiceType
 */
$citiestours = new \Maseuropa\GeneralServices\ServiceType\Citiestours($options);
/**
 * Sample call for cities_tours operation/method
 */
if ($citiestours->cities_tours(new \Maseuropa\GeneralServices\StructType\Auth(), $article_class_type_id, $city_name) !== false) {
    print_r($citiestours->getResult());
} else {
    print_r($citiestours->getLastError());
}
/**
 * Samples for Superclasses ServiceType
 */
$superclasses = new \Maseuropa\GeneralServices\ServiceType\Superclasses($options);
/**
 * Sample call for superclasses operation/method
 */
if ($superclasses->superclasses(new \Maseuropa\GeneralServices\StructType\Auth(), $language_id) !== false) {
    print_r($superclasses->getResult());
} else {
    print_r($superclasses->getLastError());
}
/**
 * Samples for Supplementsclasstype ServiceType
 */
$supplementsclasstype = new \Maseuropa\GeneralServices\ServiceType\Supplementsclasstype($options);
/**
 * Sample call for supplements_class_type operation/method
 */
if ($supplementsclasstype->supplements_class_type(new \Maseuropa\GeneralServices\StructType\Auth(), $language_id) !== false) {
    print_r($supplementsclasstype->getResult());
} else {
    print_r($supplementsclasstype->getLastError());
}
/**
 * Samples for Offerstypes ServiceType
 */
$offerstypes = new \Maseuropa\GeneralServices\ServiceType\Offerstypes($options);
/**
 * Sample call for offers_types operation/method
 */
if ($offerstypes->offers_types(new \Maseuropa\GeneralServices\StructType\Auth(), $language_id) !== false) {
    print_r($offerstypes->getResult());
} else {
    print_r($offerstypes->getLastError());
}
/**
 * Samples for Supplementsboard ServiceType
 */
$supplementsboard = new \Maseuropa\GeneralServices\ServiceType\Supplementsboard($options);
/**
 * Sample call for supplements_board operation/method
 */
if ($supplementsboard->supplements_board(new \Maseuropa\GeneralServices\StructType\Auth(), $language_id) !== false) {
    print_r($supplementsboard->getResult());
} else {
    print_r($supplementsboard->getLastError());
}
/**
 * Samples for Supplementtypes ServiceType
 */
$supplementtypes = new \Maseuropa\GeneralServices\ServiceType\Supplementtypes($options);
/**
 * Sample call for supplement_types operation/method
 */
if ($supplementtypes->supplement_types(new \Maseuropa\GeneralServices\StructType\Auth(), $language_id, $supplement_class_type_id) !== false) {
    print_r($supplementtypes->getResult());
} else {
    print_r($supplementtypes->getLastError());
}
/**
 * Samples for Trainstations ServiceType
 */
$trainstations = new \Maseuropa\GeneralServices\ServiceType\Trainstations($options);
/**
 * Sample call for train_stations operation/method
 */
if ($trainstations->train_stations(new \Maseuropa\GeneralServices\StructType\Auth()) !== false) {
    print_r($trainstations->getResult());
} else {
    print_r($trainstations->getLastError());
}
/**
 * Samples for Usersbb ServiceType
 */
$usersbb = new \Maseuropa\GeneralServices\ServiceType\Usersbb($options);
/**
 * Sample call for users_b2b operation/method
 */
if ($usersbb->users_b2b(new \Maseuropa\GeneralServices\StructType\Auth(), $login, $password, $show_admin) !== false) {
    print_r($usersbb->getResult());
} else {
    print_r($usersbb->getLastError());
}
/**
 * Samples for Transfersplaces ServiceType
 */
$transfersplaces = new \Maseuropa\GeneralServices\ServiceType\Transfersplaces($options);
/**
 * Sample call for transfers_places operation/method
 */
if ($transfersplaces->transfers_places(new \Maseuropa\GeneralServices\StructType\Auth(), $transfer_type_place_id) !== false) {
    print_r($transfersplaces->getResult());
} else {
    print_r($transfersplaces->getLastError());
}
/**
 * Samples for Transferstypesplaces ServiceType
 */
$transferstypesplaces = new \Maseuropa\GeneralServices\ServiceType\Transferstypesplaces($options);
/**
 * Sample call for transfers_types_places operation/method
 */
if ($transferstypesplaces->transfers_types_places(new \Maseuropa\GeneralServices\StructType\Auth()) !== false) {
    print_r($transferstypesplaces->getResult());
} else {
    print_r($transferstypesplaces->getLastError());
}
/**
 * Samples for Transfersplacessuppliers ServiceType
 */
$transfersplacessuppliers = new \Maseuropa\GeneralServices\ServiceType\Transfersplacessuppliers($options);
/**
 * Sample call for transfers_places_suppliers operation/method
 */
if ($transfersplacessuppliers->transfers_places_suppliers(new \Maseuropa\GeneralServices\StructType\Auth(), $transfer_place_id) !== false) {
    print_r($transfersplacessuppliers->getResult());
} else {
    print_r($transfersplacessuppliers->getLastError());
}
/**
 * Samples for Transfersdestinations ServiceType
 */
$transfersdestinations = new \Maseuropa\GeneralServices\ServiceType\Transfersdestinations($options);
/**
 * Sample call for transfers_destinations operation/method
 */
if ($transfersdestinations->transfers_destinations(new \Maseuropa\GeneralServices\StructType\Auth(), $supplier_id, $flight) !== false) {
    print_r($transfersdestinations->getResult());
} else {
    print_r($transfersdestinations->getLastError());
}
/**
 * Samples for Transfersairports ServiceType
 */
$transfersairports = new \Maseuropa\GeneralServices\ServiceType\Transfersairports($options);
/**
 * Sample call for transfers_airports operation/method
 */
if ($transfersairports->transfers_airports(new \Maseuropa\GeneralServices\StructType\Auth()) !== false) {
    print_r($transfersairports->getResult());
} else {
    print_r($transfersairports->getLastError());
}
/**
 * Samples for Zones ServiceType
 */
$zones = new \Maseuropa\GeneralServices\ServiceType\Zones($options);
/**
 * Sample call for zones operation/method
 */
if ($zones->zones(new \Maseuropa\GeneralServices\StructType\Auth(), $date_update, $article_class_type_id, $country_zone_id, $language_id, $active_contract) !== false) {
    print_r($zones->getResult());
} else {
    print_r($zones->getLastError());
}
/**
 * Samples for Zonesclosedpackage ServiceType
 */
$zonesclosedpackage = new \Maseuropa\GeneralServices\ServiceType\Zonesclosedpackage($options);
/**
 * Sample call for zones_closed_package operation/method
 */
if ($zonesclosedpackage->zones_closed_package(new \Maseuropa\GeneralServices\StructType\Auth(), $article_class_type_id, $airport_id) !== false) {
    print_r($zonesclosedpackage->getResult());
} else {
    print_r($zonesclosedpackage->getLastError());
}
/**
 * Samples for Recommendedzones ServiceType
 */
$recommendedzones = new \Maseuropa\GeneralServices\ServiceType\Recommendedzones($options);
/**
 * Sample call for recommended_zones operation/method
 */
if ($recommendedzones->recommended_zones(new \Maseuropa\GeneralServices\StructType\Auth(), $article_class_type_id_origin, $article_class_type_id_destination, $zone_id) !== false) {
    print_r($recommendedzones->getResult());
} else {
    print_r($recommendedzones->getLastError());
}
/**
 * Samples for Airportsoriginclosedpackage ServiceType
 */
$airportsoriginclosedpackage = new \Maseuropa\GeneralServices\ServiceType\Airportsoriginclosedpackage($options);
/**
 * Sample call for airports_origin_closed_package operation/method
 */
if ($airportsoriginclosedpackage->airports_origin_closed_package(new \Maseuropa\GeneralServices\StructType\Auth(), $article_class_type_id) !== false) {
    print_r($airportsoriginclosedpackage->getResult());
} else {
    print_r($airportsoriginclosedpackage->getLastError());
}
/**
 * Samples for Activearticles ServiceType
 */
$activearticles = new \Maseuropa\GeneralServices\ServiceType\Activearticles($options);
/**
 * Sample call for active_articles operation/method
 */
if ($activearticles->active_articles(new \Maseuropa\GeneralServices\StructType\Auth(), $article_class_type_id, $supplier_id, $language_id, $date_update) !== false) {
    print_r($activearticles->getResult());
} else {
    print_r($activearticles->getLastError());
}
/**
 * Samples for Articletypes ServiceType
 */
$articletypes = new \Maseuropa\GeneralServices\ServiceType\Articletypes($options);
/**
 * Sample call for article_types operation/method
 */
if ($articletypes->article_types(new \Maseuropa\GeneralServices\StructType\Auth(), $article_class_type_id, $language_id) !== false) {
    print_r($articletypes->getResult());
} else {
    print_r($articletypes->getLastError());
}
/**
 * Samples for Classes ServiceType
 */
$classes = new \Maseuropa\GeneralServices\ServiceType\Classes($options);
/**
 * Sample call for classes operation/method
 */
if ($classes->classes(new \Maseuropa\GeneralServices\StructType\Auth(), $article_superclass_type_id, $language_id) !== false) {
    print_r($classes->getResult());
} else {
    print_r($classes->getLastError());
}
/**
 * Samples for Flightsdirectory ServiceType
 */
$flightsdirectory = new \Maseuropa\GeneralServices\ServiceType\Flightsdirectory($options);
/**
 * Sample call for flights_directory operation/method
 */
if ($flightsdirectory->flights_directory(new \Maseuropa\GeneralServices\StructType\Auth(), $transfer_place_id, $date, $is_exit) !== false) {
    print_r($flightsdirectory->getResult());
} else {
    print_r($flightsdirectory->getLastError());
}
/**
 * Samples for Contractavailabilitymodifications ServiceType
 */
$contractavailabilitymodifications = new \Maseuropa\GeneralServices\ServiceType\Contractavailabilitymodifications($options);
/**
 * Sample call for contract_availability_modifications operation/method
 */
if ($contractavailabilitymodifications->contract_availability_modifications(new \Maseuropa\GeneralServices\StructType\Auth(), $date) !== false) {
    print_r($contractavailabilitymodifications->getResult());
} else {
    print_r($contractavailabilitymodifications->getLastError());
}
/**
 * Samples for Destinationstations ServiceType
 */
$destinationstations = new \Maseuropa\GeneralServices\ServiceType\Destinationstations($options);
/**
 * Sample call for destination_stations operation/method
 */
if ($destinationstations->destination_stations(new \Maseuropa\GeneralServices\StructType\Auth(), $origin_station_id) !== false) {
    print_r($destinationstations->getResult());
} else {
    print_r($destinationstations->getLastError());
}
/**
 * Samples for Dynamicpackage ServiceType
 */
$dynamicpackage = new \Maseuropa\GeneralServices\ServiceType\Dynamicpackage($options);
/**
 * Sample call for dynamic_package operation/method
 */
if ($dynamicpackage->dynamic_package(new \Maseuropa\GeneralServices\StructType\Auth(), $initial_date, $article_id, $language_id) !== false) {
    print_r($dynamicpackage->getResult());
} else {
    print_r($dynamicpackage->getLastError());
}
/**
 * Samples for Operatingdatesclosedpackage ServiceType
 */
$operatingdatesclosedpackage = new \Maseuropa\GeneralServices\ServiceType\Operatingdatesclosedpackage($options);
/**
 * Sample call for operating_dates_closed_package operation/method
 */
if ($operatingdatesclosedpackage->operating_dates_closed_package(new \Maseuropa\GeneralServices\StructType\Auth(), $article_class_type_id, $airport_id, $begin_date, $end_date) !== false) {
    print_r($operatingdatesclosedpackage->getResult());
} else {
    print_r($operatingdatesclosedpackage->getLastError());
}
/**
 * Samples for Technicalcardsupplier ServiceType
 */
$technicalcardsupplier = new \Maseuropa\GeneralServices\ServiceType\Technicalcardsupplier($options);
/**
 * Sample call for technical_card_supplier operation/method
 */
if ($technicalcardsupplier->technical_card_supplier(new \Maseuropa\GeneralServices\StructType\Auth(), $supplier_id, $language_id, $itinerary_description) !== false) {
    print_r($technicalcardsupplier->getResult());
} else {
    print_r($technicalcardsupplier->getLastError());
}
/**
 * Samples for Releasedays ServiceType
 */
$releasedays = new \Maseuropa\GeneralServices\ServiceType\Releasedays($options);
/**
 * Sample call for release_days operation/method
 */
if ($releasedays->release_days(new \Maseuropa\GeneralServices\StructType\Auth(), $article_id, $my_assigned_release) !== false) {
    print_r($releasedays->getResult());
} else {
    print_r($releasedays->getLastError());
}
/**
 * Samples for Ratestrain ServiceType
 */
$ratestrain = new \Maseuropa\GeneralServices\ServiceType\Ratestrain($options);
/**
 * Sample call for rates_train operation/method
 */
if ($ratestrain->rates_train(new \Maseuropa\GeneralServices\StructType\Auth()) !== false) {
    print_r($ratestrain->getResult());
} else {
    print_r($ratestrain->getLastError());
}
/**
 * Samples for Availabilityranges ServiceType
 */
$availabilityranges = new \Maseuropa\GeneralServices\ServiceType\Availabilityranges($options);
/**
 * Sample call for availability_ranges operation/method
 */
if ($availabilityranges->availability_ranges(new \Maseuropa\GeneralServices\StructType\Auth(), $article_id, $my_assigned_allotment) !== false) {
    print_r($availabilityranges->getResult());
} else {
    print_r($availabilityranges->getLastError());
}
/**
 * Samples for Newtransferflight ServiceType
 */
$newtransferflight = new \Maseuropa\GeneralServices\ServiceType\Newtransferflight($options);
/**
 * Sample call for new_transfer_flight operation/method
 */
if ($newtransferflight->new_transfer_flight(new \Maseuropa\GeneralServices\StructType\Auth(), $date, $pickup_airport, $origin_airport, $number_flight, $hour, $airport_hotel) !== false) {
    print_r($newtransferflight->getResult());
} else {
    print_r($newtransferflight->getLastError());
}
/**
 * Samples for Externalflightsdirectory ServiceType
 */
$externalflightsdirectory = new \Maseuropa\GeneralServices\ServiceType\Externalflightsdirectory($options);
/**
 * Sample call for external_flights_directory operation/method
 */
if ($externalflightsdirectory->external_flights_directory(new \Maseuropa\GeneralServices\StructType\Auth(), $date, $pickup_airport, $origin_airport, $airport_hotel) !== false) {
    print_r($externalflightsdirectory->getResult());
} else {
    print_r($externalflightsdirectory->getLastError());
}
/**
 * Samples for Dynamicpackagestructure ServiceType
 */
$dynamicpackagestructure = new \Maseuropa\GeneralServices\ServiceType\Dynamicpackagestructure($options);
/**
 * Sample call for dynamic_package_structure operation/method
 */
if ($dynamicpackagestructure->dynamic_package_structure(new \Maseuropa\GeneralServices\StructType\Auth(), $dynamic_package_id, $language_id) !== false) {
    print_r($dynamicpackagestructure->getResult());
} else {
    print_r($dynamicpackagestructure->getLastError());
}
/**
 * Samples for Printingreport ServiceType
 */
$printingreport = new \Maseuropa\GeneralServices\ServiceType\Printingreport($options);
/**
 * Sample call for printing_report operation/method
 */
if ($printingreport->printing_report(new \Maseuropa\GeneralServices\StructType\Auth(), $article_id, $language_id, $begin_date, $end_date, $get_contract_details) !== false) {
    print_r($printingreport->getResult());
} else {
    print_r($printingreport->getLastError());
}
/**
 * Samples for Bookingsdata ServiceType
 */
$bookingsdata = new \Maseuropa\GeneralServices\ServiceType\Bookingsdata($options);
/**
 * Sample call for bookings_data operation/method
 */
if ($bookingsdata->bookings_data(new \Maseuropa\GeneralServices\StructType\Auth(), $locator, $begin_date, $end_date, $begin_date_service, $end_date_service, $update_modification, $extended_info, $email_client, $loyalty_card, $tickets) !== false) {
    print_r($bookingsdata->getResult());
} else {
    print_r($bookingsdata->getLastError());
}
/**
 * Samples for Bookingmin ServiceType
 */
$bookingmin = new \Maseuropa\GeneralServices\ServiceType\Bookingmin($options);
/**
 * Sample call for booking_min operation/method
 */
if ($bookingmin->booking_min(new \Maseuropa\GeneralServices\StructType\Auth(), $locator, $booking_reference, $begin_date_service, $supplier_name, $passenger_name, $passenger_surname) !== false) {
    print_r($bookingmin->getResult());
} else {
    print_r($bookingmin->getLastError());
}
/**
 * Samples for Citiesoh ServiceType
 */
$citiesoh = new \Maseuropa\GeneralServices\ServiceType\Citiesoh($options);
/**
 * Sample call for cities_oh operation/method
 */
if ($citiesoh->cities_oh(new \Maseuropa\GeneralServices\StructType\Auth(), $city_id_OH) !== false) {
    print_r($citiesoh->getResult());
} else {
    print_r($citiesoh->getLastError());
}
/**
 * Samples for Airportsorigin ServiceType
 */
$airportsorigin = new \Maseuropa\GeneralServices\ServiceType\Airportsorigin($options);
/**
 * Sample call for airports_origin operation/method
 */
if ($airportsorigin->airports_origin(new \Maseuropa\GeneralServices\StructType\Auth()) !== false) {
    print_r($airportsorigin->getResult());
} else {
    print_r($airportsorigin->getLastError());
}
/**
 * Samples for Airportsdestinations ServiceType
 */
$airportsdestinations = new \Maseuropa\GeneralServices\ServiceType\Airportsdestinations($options);
/**
 * Sample call for airports_destinations operation/method
 */
if ($airportsdestinations->airports_destinations(new \Maseuropa\GeneralServices\StructType\Auth(), $origin, $article_class_type_id) !== false) {
    print_r($airportsdestinations->getResult());
} else {
    print_r($airportsdestinations->getLastError());
}
/**
 * Samples for Baggageinfo ServiceType
 */
$baggageinfo = new \Maseuropa\GeneralServices\ServiceType\Baggageinfo($options);
/**
 * Sample call for baggage_info operation/method
 */
if ($baggageinfo->baggage_info(new \Maseuropa\GeneralServices\StructType\Auth(), $article_class_type_id, $request_search, $request_code) !== false) {
    print_r($baggageinfo->getResult());
} else {
    print_r($baggageinfo->getLastError());
}
/**
 * Samples for Articletypescentral ServiceType
 */
$articletypescentral = new \Maseuropa\GeneralServices\ServiceType\Articletypescentral($options);
/**
 * Sample call for article_types_central operation/method
 */
if ($articletypescentral->article_types_central(new \Maseuropa\GeneralServices\StructType\Auth(), $language_id) !== false) {
    print_r($articletypescentral->getResult());
} else {
    print_r($articletypescentral->getLastError());
}
/**
 * Samples for Transfersfromto ServiceType
 */
$transfersfromto = new \Maseuropa\GeneralServices\ServiceType\Transfersfromto($options);
/**
 * Sample call for transfers_from_to operation/method
 */
if ($transfersfromto->transfers_from_to(new \Maseuropa\GeneralServices\StructType\Auth(), $article_class_type_id, $country_zone_id) !== false) {
    print_r($transfersfromto->getResult());
} else {
    print_r($transfersfromto->getLastError());
}
/**
 * Samples for Getpdcformfields ServiceType
 */
$getpdcformfields = new \Maseuropa\GeneralServices\ServiceType\Getpdcformfields($options);
/**
 * Sample call for get_pdc_form_fields operation/method
 */
if ($getpdcformfields->get_pdc_form_fields(new \Maseuropa\GeneralServices\StructType\Auth(), $id_tipo_articulo_clase) !== false) {
    print_r($getpdcformfields->getResult());
} else {
    print_r($getpdcformfields->getLastError());
}
/**
 * Samples for Getpdcformfieldsrelations ServiceType
 */
$getpdcformfieldsrelations = new \Maseuropa\GeneralServices\ServiceType\Getpdcformfieldsrelations($options);
/**
 * Sample call for get_pdc_form_fields_relations operation/method
 */
if ($getpdcformfieldsrelations->get_pdc_form_fields_relations(new \Maseuropa\GeneralServices\StructType\Auth(), $id_tipo_articulo_clase) !== false) {
    print_r($getpdcformfieldsrelations->getResult());
} else {
    print_r($getpdcformfieldsrelations->getLastError());
}
/**
 * Samples for Getpdccalendar ServiceType
 */
$getpdccalendar = new \Maseuropa\GeneralServices\ServiceType\Getpdccalendar($options);
/**
 * Sample call for get_pdc_calendar operation/method
 */
if ($getpdccalendar->get_pdc_calendar(new \Maseuropa\GeneralServices\StructType\Auth(), $id_tipo_articulo_clase, $month, $year, $origin, $destination, $category) !== false) {
    print_r($getpdccalendar->getResult());
} else {
    print_r($getpdccalendar->getLastError());
}
/**
 * Samples for Externalbookingretrieval ServiceType
 */
$externalbookingretrieval = new \Maseuropa\GeneralServices\ServiceType\Externalbookingretrieval($options);
/**
 * Sample call for external_booking_retrieval operation/method
 */
if ($externalbookingretrieval->external_booking_retrieval(new \Maseuropa\GeneralServices\StructType\Auth(), $external_locator, $booking_id) !== false) {
    print_r($externalbookingretrieval->getResult());
} else {
    print_r($externalbookingretrieval->getLastError());
}
/**
 * Samples for Externalbookingissueticket ServiceType
 */
$externalbookingissueticket = new \Maseuropa\GeneralServices\ServiceType\Externalbookingissueticket($options);
/**
 * Sample call for external_booking_issue_ticket operation/method
 */
if ($externalbookingissueticket->external_booking_issue_ticket(new \Maseuropa\GeneralServices\StructType\Auth(), $external_locator, $booking_id) !== false) {
    print_r($externalbookingissueticket->getResult());
} else {
    print_r($externalbookingissueticket->getLastError());
}
/**
 * Samples for Externalbookingcancelticket ServiceType
 */
$externalbookingcancelticket = new \Maseuropa\GeneralServices\ServiceType\Externalbookingcancelticket($options);
/**
 * Sample call for external_booking_cancel_ticket operation/method
 */
if ($externalbookingcancelticket->external_booking_cancel_ticket(new \Maseuropa\GeneralServices\StructType\Auth(), $external_locator, $booking_id, $ticket_number) !== false) {
    print_r($externalbookingcancelticket->getResult());
} else {
    print_r($externalbookingcancelticket->getLastError());
}
/**
 * Samples for Externalbookingcancelitinerary ServiceType
 */
$externalbookingcancelitinerary = new \Maseuropa\GeneralServices\ServiceType\Externalbookingcancelitinerary($options);
/**
 * Sample call for external_booking_cancel_itinerary operation/method
 */
if ($externalbookingcancelitinerary->external_booking_cancel_itinerary(new \Maseuropa\GeneralServices\StructType\Auth(), $external_locator, $booking_id) !== false) {
    print_r($externalbookingcancelitinerary->getResult());
} else {
    print_r($externalbookingcancelitinerary->getLastError());
}
/**
 * Samples for Amadeussalesreport ServiceType
 */
$amadeussalesreport = new \Maseuropa\GeneralServices\ServiceType\Amadeussalesreport($options);
/**
 * Sample call for amadeus_sales_report operation/method
 */
if ($amadeussalesreport->amadeus_sales_report(new \Maseuropa\GeneralServices\StructType\Auth(), $begin_date, $end_date) !== false) {
    print_r($amadeussalesreport->getResult());
} else {
    print_r($amadeussalesreport->getLastError());
}
/**
 * Samples for Boats ServiceType
 */
$boats = new \Maseuropa\GeneralServices\ServiceType\Boats($options);
/**
 * Sample call for boats operation/method
 */
if ($boats->boats(new \Maseuropa\GeneralServices\StructType\Auth(), $country_zone_id, $zone_id) !== false) {
    print_r($boats->getResult());
} else {
    print_r($boats->getLastError());
}
/**
 * Samples for Printingreportboats ServiceType
 */
$printingreportboats = new \Maseuropa\GeneralServices\ServiceType\Printingreportboats($options);
/**
 * Sample call for printing_report_boats operation/method
 */
if ($printingreportboats->printing_report_boats(new \Maseuropa\GeneralServices\StructType\Auth(), $boat_id, $article_id) !== false) {
    print_r($printingreportboats->getResult());
} else {
    print_r($printingreportboats->getLastError());
}
/**
 * Samples for Printingreportcruisecabin ServiceType
 */
$printingreportcruisecabin = new \Maseuropa\GeneralServices\ServiceType\Printingreportcruisecabin($options);
/**
 * Sample call for printing_report_cruise_cabin operation/method
 */
if ($printingreportcruisecabin->printing_report_cruise_cabin(new \Maseuropa\GeneralServices\StructType\Auth(), $id_cab_per) !== false) {
    print_r($printingreportcruisecabin->getResult());
} else {
    print_r($printingreportcruisecabin->getLastError());
}
/**
 * Samples for Suppliersboats ServiceType
 */
$suppliersboats = new \Maseuropa\GeneralServices\ServiceType\Suppliersboats($options);
/**
 * Sample call for suppliersboats operation/method
 */
if ($suppliersboats->suppliersboats(new \Maseuropa\GeneralServices\StructType\Auth(), $zone_id, $article_class_type_id, $language_id) !== false) {
    print_r($suppliersboats->getResult());
} else {
    print_r($suppliersboats->getLastError());
}
/**
 * Samples for Availabilityrangeclass ServiceType
 */
$availabilityrangeclass = new \Maseuropa\GeneralServices\ServiceType\Availabilityrangeclass($options);
/**
 * Sample call for availability_range_class operation/method
 */
if ($availabilityrangeclass->availability_range_class(new \Maseuropa\GeneralServices\StructType\Auth(), $article_class_id, $from_date, $to_date, $id_prestatario) !== false) {
    print_r($availabilityrangeclass->getResult());
} else {
    print_r($availabilityrangeclass->getLastError());
}
