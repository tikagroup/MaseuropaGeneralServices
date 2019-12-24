<?php

namespace Maseuropa\GeneralServices;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'Auth' => '\\Maseuropa\\GeneralServices\\StructType\\Auth',
            'LanguageWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\LanguageWSDO',
            'AirlineWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\AirlineWSDO',
            'AirportWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\AirportWSDO',
            'CountryWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\CountryWSDO',
            'ProvinceWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ProvinceWSDO',
            'SuperclassWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\SuperclassWSDO',
            'SupplementClassTypeWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\SupplementClassTypeWSDO',
            'SupplementBoardWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\SupplementBoardWSDO',
            'TypeSupplementWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\TypeSupplementWSDO',
            'TrainStationWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\TrainStationWSDO',
            'TransferPlaceWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\TransferPlaceWSDO',
            'TransferTypePlaceWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\TransferTypePlaceWSDO',
            'TransferPlaceSupplierWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\TransferPlaceSupplierWSDO',
            'ZoneWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ZoneWSDO',
            'RecommendedZoneWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\RecommendedZoneWSDO',
            'ArticleWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ArticleWSDO',
            'ArticleTypeWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ArticleTypeWSDO',
            'ClassWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ClassWSDO',
            'FlightWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\FlightWSDO',
            'ArticleIdWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ArticleIdWSDO',
            'StationWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\StationWSDO',
            'DynamicPackageWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\DynamicPackageWSDO',
            'ReleaseDayWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ReleaseDayWSDO',
            'CancellationFeeDefinitionWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\CancellationFeeDefinitionWSDO',
            'RateTrainWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\RateTrainWSDO',
            'AvailabilityRangeWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\AvailabilityRangeWSDO',
            'ExternalFlightWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ExternalFlightWSDO',
            'BD_PaxWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\BD_PaxWSDO',
            'BD_SuplementWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\BD_SuplementWSDO',
            'BD_OfferWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\BD_OfferWSDO',
            'BD_ServiceNormalWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\BD_ServiceNormalWSDO',
            'BD_VoucherWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\BD_VoucherWSDO',
            'BookingMinWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\BookingMinWSDO',
            'RetvalAirportsDestinationsWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\RetvalAirportsDestinationsWSDO',
            'TransfersWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\TransfersWSDO',
            'FieldValueWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\FieldValueWSDO',
            'FieldWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\FieldWSDO',
            'FormFieldsWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\FormFieldsWSDO',
            'FormDeparturesWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\FormDeparturesWSDO',
            'FormRoutesWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\FormRoutesWSDO',
            'FormZoneDestination' => '\\Maseuropa\\GeneralServices\\StructType\\FormZoneDestination',
            'FormFieldsRelationsWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\FormFieldsRelationsWSDO',
            'ExternalBookingTravellerWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ExternalBookingTravellerWSDO',
            'ExternalBookingFlightWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ExternalBookingFlightWSDO',
            'ExternalBookingRemarkWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ExternalBookingRemarkWSDO',
            'ExternalBookingReferenceWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ExternalBookingReferenceWSDO',
            'ExternalBookingTicketNumberWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ExternalBookingTicketNumberWSDO',
            'ExternalBookingInfoWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ExternalBookingInfoWSDO',
            'ExternalBookingWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ExternalBookingWSDO',
            'ExternalBookingIssueTicketWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ExternalBookingIssueTicketWSDO',
            'ExternalBookingCancelTicketNumberWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ExternalBookingCancelTicketNumberWSDO',
            'ExternalBookingCancelTicketWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ExternalBookingCancelTicketWSDO',
            'ExternalBookingCancelItineraryWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\ExternalBookingCancelItineraryWSDO',
            'DocumentSaleWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\DocumentSaleWSDO',
            'AmadeusSalesReportWSDO' => '\\Maseuropa\\GeneralServices\\StructType\\AmadeusSalesReportWSDO',
        );
    }
}
