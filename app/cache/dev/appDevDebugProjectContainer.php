<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 2; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'a2lix_translation_form.default.listener.translations' => 'getA2lixTranslationForm_Default_Listener_TranslationsService',
            'a2lix_translation_form.default.listener.translationsforms' => 'getA2lixTranslationForm_Default_Listener_TranslationsformsService',
            'a2lix_translation_form.default.service.parameter_locale_provider' => 'getA2lixTranslationForm_Default_Service_ParameterLocaleProviderService',
            'a2lix_translation_form.default.service.translation' => 'getA2lixTranslationForm_Default_Service_TranslationService',
            'a2lix_translation_form.default.type.translatedentity' => 'getA2lixTranslationForm_Default_Type_TranslatedentityService',
            'a2lix_translation_form.default.type.translations' => 'getA2lixTranslationForm_Default_Type_TranslationsService',
            'a2lix_translation_form.default.type.translationsfields' => 'getA2lixTranslationForm_Default_Type_TranslationsfieldsService',
            'a2lix_translation_form.default.type.translationsforms' => 'getA2lixTranslationForm_Default_Type_TranslationsformsService',
            'a2lix_translation_form.default.type.translationslocalesselector' => 'getA2lixTranslationForm_Default_Type_TranslationslocalesselectorService',
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter.jsqueeze' => 'getAssetic_Filter_JsqueezeService',
            'assetic.filter.minifycsscompressor' => 'getAssetic_Filter_MinifycsscompressorService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'bazinga_geocoder.dumper.geojson' => 'getBazingaGeocoder_Dumper_GeojsonService',
            'bazinga_geocoder.dumper.gpx' => 'getBazingaGeocoder_Dumper_GpxService',
            'bazinga_geocoder.dumper.kmp' => 'getBazingaGeocoder_Dumper_KmpService',
            'bazinga_geocoder.dumper.wkb' => 'getBazingaGeocoder_Dumper_WkbService',
            'bazinga_geocoder.dumper.wkt' => 'getBazingaGeocoder_Dumper_WktService',
            'bazinga_geocoder.dumper_manager' => 'getBazingaGeocoder_DumperManagerService',
            'bazinga_geocoder.geocoder' => 'getBazingaGeocoder_GeocoderService',
            'bazinga_geocoder.geocoder.adapter' => 'getBazingaGeocoder_Geocoder_AdapterService',
            'bazinga_geocoder.logger' => 'getBazingaGeocoder_LoggerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'cocorico.ajax.authentication_listener' => 'getCocorico_Ajax_AuthenticationListenerService',
            'cocorico.authentication_success_listener' => 'getCocorico_AuthenticationSuccessListenerService',
            'cocorico.booking.manager' => 'getCocorico_Booking_ManagerService',
            'cocorico.booking_bank_wire.manager' => 'getCocorico_BookingBankWire_ManagerService',
            'cocorico.booking_bank_wire.subscriber' => 'getCocorico_BookingBankWire_SubscriberService',
            'cocorico.booking_payin_refund.manager' => 'getCocorico_BookingPayinRefund_ManagerService',
            'cocorico.booking_payin_refund.subscriber' => 'getCocorico_BookingPayinRefund_SubscriberService',
            'cocorico.booking_user_address_entity_listener' => 'getCocorico_BookingUserAddressEntityListenerService',
            'cocorico.booking_validate.subscriber' => 'getCocorico_BookingValidate_SubscriberService',
            'cocorico.booking_validator' => 'getCocorico_BookingValidatorService',
            'cocorico.breadcrumbs_loader' => 'getCocorico_BreadcrumbsLoaderService',
            'cocorico.breadcrumbs_manager' => 'getCocorico_BreadcrumbsManagerService',
            'cocorico.breadcrumbs_yaml_locator' => 'getCocorico_BreadcrumbsYamlLocatorService',
            'cocorico.breadcrumbs_yaml_parser' => 'getCocorico_BreadcrumbsYamlParserService',
            'cocorico.extra_bundle.routing_loader' => 'getCocorico_ExtraBundle_RoutingLoaderService',
            'cocorico.form.booking.status_filter' => 'getCocorico_Form_Booking_StatusFilterService',
            'cocorico.form.handler.booking' => 'getCocorico_Form_Handler_BookingService',
            'cocorico.form.handler.booking.asker.dashboard' => 'getCocorico_Form_Handler_Booking_Asker_DashboardService',
            'cocorico.form.handler.booking.offerer.dashboard' => 'getCocorico_Form_Handler_Booking_Offerer_DashboardService',
            'cocorico.form.handler.booking_price' => 'getCocorico_Form_Handler_BookingPriceService',
            'cocorico.form.handler.listing' => 'getCocorico_Form_Handler_ListingService',
            'cocorico.form.handler.listing_availability.price.dashboard' => 'getCocorico_Form_Handler_ListingAvailability_Price_DashboardService',
            'cocorico.form.handler.listing_availability.status.dashboard' => 'getCocorico_Form_Handler_ListingAvailability_Status_DashboardService',
            'cocorico.form.handler.review' => 'getCocorico_Form_Handler_ReviewService',
            'cocorico.form.type.booking_edit' => 'getCocorico_Form_Type_BookingEditService',
            'cocorico.form.type.booking_new' => 'getCocorico_Form_Type_BookingNewService',
            'cocorico.form.type.booking_price' => 'getCocorico_Form_Type_BookingPriceService',
            'cocorico.form.type.booking_user_address' => 'getCocorico_Form_Type_BookingUserAddressService',
            'cocorico.form.type.country_filtered' => 'getCocorico_Form_Type_CountryFilteredService',
            'cocorico.form.type.date_hidden' => 'getCocorico_Form_Type_DateHiddenService',
            'cocorico.form.type.date_range' => 'getCocorico_Form_Type_DateRangeService',
            'cocorico.form.type.entity_hidden' => 'getCocorico_Form_Type_EntityHiddenService',
            'cocorico.form.type.language_filtered' => 'getCocorico_Form_Type_LanguageFilteredService',
            'cocorico.form.type.listing_category' => 'getCocorico_Form_Type_ListingCategoryService',
            'cocorico.form.type.listing_characteristic' => 'getCocorico_Form_Type_ListingCharacteristicService',
            'cocorico.form.type.listing_edit' => 'getCocorico_Form_Type_ListingEditService',
            'cocorico.form.type.listing_edit_availabilities' => 'getCocorico_Form_Type_ListingEditAvailabilitiesService',
            'cocorico.form.type.listing_edit_availabilities_prices' => 'getCocorico_Form_Type_ListingEditAvailabilitiesPricesService',
            'cocorico.form.type.listing_edit_availabilities_status' => 'getCocorico_Form_Type_ListingEditAvailabilitiesStatusService',
            'cocorico.form.type.listing_edit_availability_price' => 'getCocorico_Form_Type_ListingEditAvailabilityPriceService',
            'cocorico.form.type.listing_edit_categories' => 'getCocorico_Form_Type_ListingEditCategoriesService',
            'cocorico.form.type.listing_edit_categories_ajax' => 'getCocorico_Form_Type_ListingEditCategoriesAjaxService',
            'cocorico.form.type.listing_edit_characteristic' => 'getCocorico_Form_Type_ListingEditCharacteristicService',
            'cocorico.form.type.listing_edit_description' => 'getCocorico_Form_Type_ListingEditDescriptionService',
            'cocorico.form.type.listing_edit_duration' => 'getCocorico_Form_Type_ListingEditDurationService',
            'cocorico.form.type.listing_edit_images' => 'getCocorico_Form_Type_ListingEditImagesService',
            'cocorico.form.type.listing_edit_location' => 'getCocorico_Form_Type_ListingEditLocationService',
            'cocorico.form.type.listing_edit_price' => 'getCocorico_Form_Type_ListingEditPriceService',
            'cocorico.form.type.listing_edit_status' => 'getCocorico_Form_Type_ListingEditStatusService',
            'cocorico.form.type.listing_new' => 'getCocorico_Form_Type_ListingNewService',
            'cocorico.form.type.listing_new_categories' => 'getCocorico_Form_Type_ListingNewCategoriesService',
            'cocorico.form.type.listing_search' => 'getCocorico_Form_Type_ListingSearchService',
            'cocorico.form.type.listing_search_home' => 'getCocorico_Form_Type_ListingSearchHomeService',
            'cocorico.form.type.listing_search_result' => 'getCocorico_Form_Type_ListingSearchResultService',
            'cocorico.form.type.price' => 'getCocorico_Form_Type_PriceService',
            'cocorico.form.type.review_new' => 'getCocorico_Form_Type_ReviewNewService',
            'cocorico.form.type.time_range' => 'getCocorico_Form_Type_TimeRangeService',
            'cocorico.form.type.weekdays' => 'getCocorico_Form_Type_WeekdaysService',
            'cocorico.helper.global' => 'getCocorico_Helper_GlobalService',
            'cocorico.image_type_extension' => 'getCocorico_ImageTypeExtensionService',
            'cocorico.language.manager' => 'getCocorico_Language_ManagerService',
            'cocorico.listing.manager' => 'getCocorico_Listing_ManagerService',
            'cocorico.listing_availabilities_price_validator' => 'getCocorico_ListingAvailabilitiesPriceValidatorService',
            'cocorico.listing_availability.manager' => 'getCocorico_ListingAvailability_ManagerService',
            'cocorico.listing_availability_param_converter' => 'getCocorico_ListingAvailabilityParamConverterService',
            'cocorico.listing_availability_validator' => 'getCocorico_ListingAvailabilityValidatorService',
            'cocorico.listing_discount_validator' => 'getCocorico_ListingDiscountValidatorService',
            'cocorico.listing_image_upload_listener' => 'getCocorico_ListingImageUploadListenerService',
            'cocorico.listing_image_upload_validation_listener' => 'getCocorico_ListingImageUploadValidationListenerService',
            'cocorico.listing_param_converter' => 'getCocorico_ListingParamConverterService',
            'cocorico.listing_search.manager' => 'getCocorico_ListingSearch_ManagerService',
            'cocorico.listing_search_request' => 'getCocorico_ListingSearchRequestService',
            'cocorico.listing_validator' => 'getCocorico_ListingValidatorService',
            'cocorico.mailer.twig_swift' => 'getCocorico_Mailer_TwigSwiftService',
            'cocorico.namer.image_namer' => 'getCocorico_Namer_ImageNamerService',
            'cocorico.review.listener' => 'getCocorico_Review_ListenerService',
            'cocorico.review.manager' => 'getCocorico_Review_ManagerService',
            'cocorico.star_rating.form.type' => 'getCocorico_StarRating_Form_TypeService',
            'cocorico.star_rating.twig.extension' => 'getCocorico_StarRating_Twig_ExtensionService',
            'cocorico.times_range_overlap_validator' => 'getCocorico_TimesRangeOverlapValidatorService',
            'cocorico.translator.admin.extractor' => 'getCocorico_Translator_Admin_ExtractorService',
            'cocorico.translator.breadcrumbs_extractor' => 'getCocorico_Translator_BreadcrumbsExtractorService',
            'cocorico.translator.entity.extractor' => 'getCocorico_Translator_Entity_ExtractorService',
            'cocorico.translator.manager' => 'getCocorico_Translator_ManagerService',
            'cocorico.twig.core_extension' => 'getCocorico_Twig_CoreExtensionService',
            'cocorico.twig.country_extension' => 'getCocorico_Twig_CountryExtensionService',
            'cocorico.twig.extra_bundle_extension' => 'getCocorico_Twig_ExtraBundleExtensionService',
            'cocorico.twig.language_extension' => 'getCocorico_Twig_LanguageExtensionService',
            'cocorico.user_type.cookie.listener' => 'getCocorico_UserType_Cookie_ListenerService',
            'cocorico_cms.footer.manager' => 'getCocoricoCms_Footer_ManagerService',
            'cocorico_contact.contact.manager' => 'getCocoricoContact_Contact_ManagerService',
            'cocorico_contact.form.handler.contact' => 'getCocoricoContact_Form_Handler_ContactService',
            'cocorico_contact.form.type.contact_new' => 'getCocoricoContact_Form_Type_ContactNewService',
            'cocorico_contact.mailer.twig_swift' => 'getCocoricoContact_Mailer_TwigSwiftService',
            'cocorico_geo.form.type.geocoding' => 'getCocoricoGeo_Form_Type_GeocodingService',
            'cocorico_geo.geocoding.manager' => 'getCocoricoGeo_Geocoding_ManagerService',
            'cocorico_geo.twig.cocorico_geo_extension' => 'getCocoricoGeo_Twig_CocoricoGeoExtensionService',
            'cocorico_message.booking.subscriber' => 'getCocoricoMessage_Booking_SubscriberService',
            'cocorico_message.new_thread.form.type' => 'getCocoricoMessage_NewThread_Form_TypeService',
            'cocorico_message.reply.form.type' => 'getCocoricoMessage_Reply_Form_TypeService',
            'cocorico_message.thread_manager' => 'getCocoricoMessage_ThreadManagerService',
            'cocorico_user.booking.form.subscriber' => 'getCocoricoUser_Booking_Form_SubscriberService',
            'cocorico_user.form.handler.bank_account' => 'getCocoricoUser_Form_Handler_BankAccountService',
            'cocorico_user.form.handler.contact' => 'getCocoricoUser_Form_Handler_ContactService',
            'cocorico_user.form.type.user_address' => 'getCocoricoUser_Form_Type_UserAddressService',
            'cocorico_user.listing_image_upload_validation_listener' => 'getCocoricoUser_ListingImageUploadValidationListenerService',
            'cocorico_user.login.form.type' => 'getCocoricoUser_Login_Form_TypeService',
            'cocorico_user.login_manager' => 'getCocoricoUser_LoginManagerService',
            'cocorico_user.mailer.twig_swift' => 'getCocoricoUser_Mailer_TwigSwiftService',
            'cocorico_user.namer.image_namer' => 'getCocoricoUser_Namer_ImageNamerService',
            'cocorico_user.oauth.user.provider.entity' => 'getCocoricoUser_Oauth_User_Provider_EntityService',
            'cocorico_user.profile_about_me.form.type' => 'getCocoricoUser_ProfileAboutMe_Form_TypeService',
            'cocorico_user.subscriber' => 'getCocoricoUser_SubscriberService',
            'cocorico_user.user.listener' => 'getCocoricoUser_User_ListenerService',
            'cocorico_user.user.validator' => 'getCocoricoUser_User_ValidatorService',
            'cocorico_user.user_image_upload_listener' => 'getCocoricoUser_UserImageUploadListenerService',
            'cocorico_user.user_manager' => 'getCocoricoUser_UserManagerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'doctrine_mongodb' => 'getDoctrineMongodbService',
            'doctrine_mongodb.odm.cache.array' => 'getDoctrineMongodb_Odm_Cache_ArrayService',
            'doctrine_mongodb.odm.data_collector.pretty' => 'getDoctrineMongodb_Odm_DataCollector_PrettyService',
            'doctrine_mongodb.odm.default_configuration' => 'getDoctrineMongodb_Odm_DefaultConfigurationService',
            'doctrine_mongodb.odm.default_connection' => 'getDoctrineMongodb_Odm_DefaultConnectionService',
            'doctrine_mongodb.odm.default_document_manager' => 'getDoctrineMongodb_Odm_DefaultDocumentManagerService',
            'doctrine_mongodb.odm.default_manager_configurator' => 'getDoctrineMongodb_Odm_DefaultManagerConfiguratorService',
            'doctrine_mongodb.odm.event_manager' => 'getDoctrineMongodb_Odm_EventManagerService',
            'doctrine_mongodb.odm.metadata.annotation' => 'getDoctrineMongodb_Odm_Metadata_AnnotationService',
            'doctrine_mongodb.odm.metadata.chain' => 'getDoctrineMongodb_Odm_Metadata_ChainService',
            'doctrine_mongodb.odm.metadata.xml' => 'getDoctrineMongodb_Odm_Metadata_XmlService',
            'doctrine_mongodb.odm.metadata.yml' => 'getDoctrineMongodb_Odm_Metadata_YmlService',
            'doctrine_odm.mongodb.validator.unique' => 'getDoctrineOdm_Mongodb_Validator_UniqueService',
            'doctrine_odm.mongodb.validator_initializer' => 'getDoctrineOdm_Mongodb_ValidatorInitializerService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'fm_elfinder.configurator.default' => 'getFmElfinder_Configurator_DefaultService',
            'fm_elfinder.form.type' => 'getFmElfinder_Form_TypeService',
            'fm_elfinder.loader.default' => 'getFmElfinder_Loader_DefaultService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.extension' => 'getForm_ExtensionService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.mongodb_document' => 'getForm_Type_MongodbDocumentService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.doctrine.mongodb' => 'getForm_TypeGuesser_Doctrine_MongodbService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_message.authorizer' => 'getFosMessage_AuthorizerService',
            'fos_message.composer' => 'getFosMessage_ComposerService',
            'fos_message.deleter' => 'getFosMessage_DeleterService',
            'fos_message.message_manager' => 'getFosMessage_MessageManagerService',
            'fos_message.message_reader' => 'getFosMessage_MessageReaderService',
            'fos_message.new_thread_form.factory' => 'getFosMessage_NewThreadForm_FactoryService',
            'fos_message.new_thread_form.handler' => 'getFosMessage_NewThreadForm_HandlerService',
            'fos_message.participant_provider' => 'getFosMessage_ParticipantProviderService',
            'fos_message.provider' => 'getFosMessage_ProviderService',
            'fos_message.recipients_selector' => 'getFosMessage_RecipientsSelectorService',
            'fos_message.reply_form.factory' => 'getFosMessage_ReplyForm_FactoryService',
            'fos_message.reply_form.handler' => 'getFosMessage_ReplyForm_HandlerService',
            'fos_message.reply_form.type' => 'getFosMessage_ReplyForm_TypeService',
            'fos_message.search_finder.default' => 'getFosMessage_SearchFinder_DefaultService',
            'fos_message.search_query_factory.default' => 'getFosMessage_SearchQueryFactory_DefaultService',
            'fos_message.sender' => 'getFosMessage_SenderService',
            'fos_message.spam_detector' => 'getFosMessage_SpamDetectorService',
            'fos_message.thread_manager' => 'getFosMessage_ThreadManagerService',
            'fos_message.thread_reader' => 'getFosMessage_ThreadReaderService',
            'fos_message.twig_extension' => 'getFosMessage_TwigExtensionService',
            'fos_message.validator.authorization' => 'getFosMessage_Validator_AuthorizationService',
            'fos_message.validator.reply_authorization' => 'getFosMessage_Validator_ReplyAuthorizationService',
            'fos_message.validator.self_recipient' => 'getFosMessage_Validator_SelfRecipientService',
            'fos_message.validator.spam' => 'getFosMessage_Validator_SpamService',
            'fos_user.change_password.form' => 'getFosUser_ChangePassword_FormService',
            'fos_user.change_password.form.handler.default' => 'getFosUser_ChangePassword_Form_Handler_DefaultService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.entity_manager' => 'getFosUser_EntityManagerService',
            'fos_user.group.form' => 'getFosUser_Group_FormService',
            'fos_user.group.form.handler' => 'getFosUser_Group_Form_HandlerService',
            'fos_user.group.form.type' => 'getFosUser_Group_Form_TypeService',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService',
            'fos_user.profile.form' => 'getFosUser_Profile_FormService',
            'fos_user.profile.form.handler' => 'getFosUser_Profile_Form_HandlerService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form' => 'getFosUser_Registration_FormService',
            'fos_user.registration.form.handler' => 'getFosUser_Registration_Form_HandlerService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form' => 'getFosUser_Resetting_FormService',
            'fos_user.resetting.form.handler' => 'getFosUser_Resetting_Form_HandlerService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_to_username_transformer' => 'getFosUser_UserToUsernameTransformerService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'hwi_oauth.http_client' => 'getHwiOauth_HttpClientService',
            'hwi_oauth.resource_owner.facebook' => 'getHwiOauth_ResourceOwner_FacebookService',
            'hwi_oauth.resource_ownermap.main' => 'getHwiOauth_ResourceOwnermap_MainService',
            'hwi_oauth.security.oauth_utils' => 'getHwiOauth_Security_OauthUtilsService',
            'hwi_oauth.templating.helper.oauth' => 'getHwiOauth_Templating_Helper_OauthService',
            'ivory_ck_editor.config_manager' => 'getIvoryCkEditor_ConfigManagerService',
            'ivory_ck_editor.form.type' => 'getIvoryCkEditor_Form_TypeService',
            'ivory_ck_editor.plugin_manager' => 'getIvoryCkEditor_PluginManagerService',
            'ivory_ck_editor.styles_set_manager' => 'getIvoryCkEditor_StylesSetManagerService',
            'ivory_ck_editor.template_manager' => 'getIvoryCkEditor_TemplateManagerService',
            'ivory_ck_editor.templating.helper' => 'getIvoryCkEditor_Templating_HelperService',
            'ivory_ck_editor.twig_extension' => 'getIvoryCkEditor_TwigExtensionService',
            'jms_aop.interceptor_loader' => 'getJmsAop_InterceptorLoaderService',
            'jms_aop.pointcut_container' => 'getJmsAop_PointcutContainerService',
            'jms_di_extra.controller_resolver' => 'getJmsDiExtra_ControllerResolverService',
            'jms_di_extra.metadata.converter' => 'getJmsDiExtra_Metadata_ConverterService',
            'jms_di_extra.metadata.metadata_factory' => 'getJmsDiExtra_Metadata_MetadataFactoryService',
            'jms_di_extra.metadata_driver' => 'getJmsDiExtra_MetadataDriverService',
            'jms_di_extra.service_naming_strategy' => 'getJmsDiExtra_ServiceNamingStrategyService',
            'jms_i18n_routing.cookie_setting_listener' => 'getJmsI18nRouting_CookieSettingListenerService',
            'jms_i18n_routing.loader' => 'getJmsI18nRouting_LoaderService',
            'jms_i18n_routing.locale_choosing_listener' => 'getJmsI18nRouting_LocaleChoosingListenerService',
            'jms_i18n_routing.locale_resolver.default' => 'getJmsI18nRouting_LocaleResolver_DefaultService',
            'jms_i18n_routing.route_exclusion_strategy' => 'getJmsI18nRouting_RouteExclusionStrategyService',
            'jms_translation.config_factory' => 'getJmsTranslation_ConfigFactoryService',
            'jms_translation.loader_manager' => 'getJmsTranslation_LoaderManagerService',
            'jms_translation.twig_extension' => 'getJmsTranslation_TwigExtensionService',
            'jms_translation.updater' => 'getJmsTranslation_UpdaterService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.listener.voters' => 'getKnpMenu_Listener_VotersService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'knp_menu.voter.router' => 'getKnpMenu_Voter_RouterService',
            'lexik_currency.adapter_collector' => 'getLexikCurrency_AdapterCollectorService',
            'lexik_currency.adapter_factory' => 'getLexikCurrency_AdapterFactoryService',
            'lexik_currency.converter' => 'getLexikCurrency_ConverterService',
            'lexik_currency.currency_extension' => 'getLexikCurrency_CurrencyExtensionService',
            'lexik_currency.doctrine_adapter' => 'getLexikCurrency_DoctrineAdapterService',
            'lexik_currency.ecb_adapter' => 'getLexikCurrency_EcbAdapterService',
            'lexik_currency.formatter' => 'getLexikCurrency_FormatterService',
            'lexik_currency.oer_adapter' => 'getLexikCurrency_OerAdapterService',
            'lexik_currency.subscriber.locale' => 'getLexikCurrency_Subscriber_LocaleService',
            'liip_imagine' => 'getLiipImagineService',
            'liip_imagine.binary.loader.default' => 'getLiipImagine_Binary_Loader_DefaultService',
            'liip_imagine.binary.loader.prototype.filesystem' => 'getLiipImagine_Binary_Loader_Prototype_FilesystemService',
            'liip_imagine.binary.loader.prototype.stream' => 'getLiipImagine_Binary_Loader_Prototype_StreamService',
            'liip_imagine.binary.mime_type_guesser' => 'getLiipImagine_Binary_MimeTypeGuesserService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.default' => 'getLiipImagine_Cache_Resolver_DefaultService',
            'liip_imagine.cache.resolver.no_cache_web_path' => 'getLiipImagine_Cache_Resolver_NoCacheWebPathService',
            'liip_imagine.cache.signer' => 'getLiipImagine_Cache_SignerService',
            'liip_imagine.controller' => 'getLiipImagine_ControllerService',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService',
            'liip_imagine.extension_guesser' => 'getLiipImagine_ExtensionGuesserService',
            'liip_imagine.filter.configuration' => 'getLiipImagine_Filter_ConfigurationService',
            'liip_imagine.filter.loader.auto_rotate' => 'getLiipImagine_Filter_Loader_AutoRotateService',
            'liip_imagine.filter.loader.background' => 'getLiipImagine_Filter_Loader_BackgroundService',
            'liip_imagine.filter.loader.crop' => 'getLiipImagine_Filter_Loader_CropService',
            'liip_imagine.filter.loader.downscale' => 'getLiipImagine_Filter_Loader_DownscaleService',
            'liip_imagine.filter.loader.interlace' => 'getLiipImagine_Filter_Loader_InterlaceService',
            'liip_imagine.filter.loader.paste' => 'getLiipImagine_Filter_Loader_PasteService',
            'liip_imagine.filter.loader.relative_resize' => 'getLiipImagine_Filter_Loader_RelativeResizeService',
            'liip_imagine.filter.loader.resize' => 'getLiipImagine_Filter_Loader_ResizeService',
            'liip_imagine.filter.loader.rotate' => 'getLiipImagine_Filter_Loader_RotateService',
            'liip_imagine.filter.loader.strip' => 'getLiipImagine_Filter_Loader_StripService',
            'liip_imagine.filter.loader.thumbnail' => 'getLiipImagine_Filter_Loader_ThumbnailService',
            'liip_imagine.filter.loader.upscale' => 'getLiipImagine_Filter_Loader_UpscaleService',
            'liip_imagine.filter.loader.watermark' => 'getLiipImagine_Filter_Loader_WatermarkService',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService',
            'liip_imagine.filter.post_processor.jpegoptim' => 'getLiipImagine_Filter_PostProcessor_JpegoptimService',
            'liip_imagine.filter.post_processor.optipng' => 'getLiipImagine_Filter_PostProcessor_OptipngService',
            'liip_imagine.form.type.image' => 'getLiipImagine_Form_Type_ImageService',
            'liip_imagine.mime_type_guesser' => 'getLiipImagine_MimeTypeGuesserService',
            'liip_imagine.templating.helper' => 'getLiipImagine_Templating_HelperService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.bazinga_geocoder' => 'getMonolog_Logger_BazingaGeocoderService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'oneup_uploader.chunk_manager' => 'getOneupUploader_ChunkManagerService',
            'oneup_uploader.chunks_storage' => 'getOneupUploader_ChunksStorageService',
            'oneup_uploader.controller.listing_images' => 'getOneupUploader_Controller_ListingImagesService',
            'oneup_uploader.controller.user_images' => 'getOneupUploader_Controller_UserImagesService',
            'oneup_uploader.error_handler.blueimp' => 'getOneupUploader_ErrorHandler_BlueimpService',
            'oneup_uploader.namer.uniqid' => 'getOneupUploader_Namer_UniqidService',
            'oneup_uploader.namer.urlsafe' => 'getOneupUploader_Namer_UrlsafeService',
            'oneup_uploader.orphanage_manager' => 'getOneupUploader_OrphanageManagerService',
            'oneup_uploader.routing.loader' => 'getOneupUploader_Routing_LoaderService',
            'oneup_uploader.storage.listing_images' => 'getOneupUploader_Storage_ListingImagesService',
            'oneup_uploader.storage.user_images' => 'getOneupUploader_Storage_UserImagesService',
            'oneup_uploader.templating.uploader_helper' => 'getOneupUploader_Templating_UploaderHelperService',
            'oneup_uploader.twig.extension.uploader' => 'getOneupUploader_Twig_Extension_UploaderService',
            'oneup_uploader.validation_listener.allowed_mimetype' => 'getOneupUploader_ValidationListener_AllowedMimetypeService',
            'oneup_uploader.validation_listener.disallowed_mimetype' => 'getOneupUploader_ValidationListener_DisallowedMimetypeService',
            'oneup_uploader.validation_listener.max_size' => 'getOneupUploader_ValidationListener_MaxSizeService',
            'payment.form.choose_payment_method_transformer' => 'getPayment_Form_ChoosePaymentMethodTransformerService',
            'payment.form.choose_payment_method_type' => 'getPayment_Form_ChoosePaymentMethodTypeService',
            'payment.form.paypal_express_checkout_type' => 'getPayment_Form_PaypalExpressCheckoutTypeService',
            'payment.paypal.authentication_strategy.token' => 'getPayment_Paypal_AuthenticationStrategy_TokenService',
            'payment.paypal.client' => 'getPayment_Paypal_ClientService',
            'payment.plugin.paypal_express_checkout' => 'getPayment_Plugin_PaypalExpressCheckoutService',
            'payment.plugin_controller' => 'getPayment_PluginControllerService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.admin' => 'getSecurity_Firewall_Map_Context_AdminService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout.handler.session' => 'getSecurity_Logout_Handler_SessionService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker.admin' => 'getSecurity_UserChecker_AdminService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'simplethings_entityaudit.config' => 'getSimplethingsEntityaudit_ConfigService',
            'simplethings_entityaudit.create_schema_listener' => 'getSimplethingsEntityaudit_CreateSchemaListenerService',
            'simplethings_entityaudit.log_revisions_listener' => 'getSimplethingsEntityaudit_LogRevisionsListenerService',
            'simplethings_entityaudit.manager' => 'getSimplethingsEntityaudit_ManagerService',
            'simplethings_entityaudit.reader' => 'getSimplethingsEntityaudit_ReaderService',
            'simplethings_entityaudit.username_callable.token_storage' => 'getSimplethingsEntityaudit_UsernameCallable_TokenStorageService',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService',
            'sonata.admin.audit.orm.reader' => 'getSonata_Admin_Audit_Orm_ReaderService',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService',
            'sonata.admin.booking' => 'getSonata_Admin_BookingService',
            'sonata.admin.booking_bank_wire' => 'getSonata_Admin_BookingBankWireService',
            'sonata.admin.booking_payin_refund' => 'getSonata_Admin_BookingPayinRefundService',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService',
            'sonata.admin.builder.orm_datagrid' => 'getSonata_Admin_Builder_OrmDatagridService',
            'sonata.admin.builder.orm_form' => 'getSonata_Admin_Builder_OrmFormService',
            'sonata.admin.builder.orm_list' => 'getSonata_Admin_Builder_OrmListService',
            'sonata.admin.builder.orm_show' => 'getSonata_Admin_Builder_OrmShowService',
            'sonata.admin.contact' => 'getSonata_Admin_ContactService',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService',
            'sonata.admin.footer' => 'getSonata_Admin_FooterService',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService',
            'sonata.admin.form.extension.field.mopa' => 'getSonata_Admin_Form_Extension_Field_MopaService',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService',
            'sonata.admin.form.type.model_autocomplete' => 'getSonata_Admin_Form_Type_ModelAutocompleteService',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService',
            'sonata.admin.guesser.orm_datagrid' => 'getSonata_Admin_Guesser_OrmDatagridService',
            'sonata.admin.guesser.orm_datagrid_chain' => 'getSonata_Admin_Guesser_OrmDatagridChainService',
            'sonata.admin.guesser.orm_list' => 'getSonata_Admin_Guesser_OrmListService',
            'sonata.admin.guesser.orm_list_chain' => 'getSonata_Admin_Guesser_OrmListChainService',
            'sonata.admin.guesser.orm_show' => 'getSonata_Admin_Guesser_OrmShowService',
            'sonata.admin.guesser.orm_show_chain' => 'getSonata_Admin_Guesser_OrmShowChainService',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService',
            'sonata.admin.listing' => 'getSonata_Admin_ListingService',
            'sonata.admin.listing_category' => 'getSonata_Admin_ListingCategoryService',
            'sonata.admin.listing_characteristic' => 'getSonata_Admin_ListingCharacteristicService',
            'sonata.admin.listing_characteristic_group' => 'getSonata_Admin_ListingCharacteristicGroupService',
            'sonata.admin.listing_characteristic_type' => 'getSonata_Admin_ListingCharacteristicTypeService',
            'sonata.admin.listing_characteristic_value' => 'getSonata_Admin_ListingCharacteristicValueService',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService',
            'sonata.admin.message' => 'getSonata_Admin_MessageService',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService',
            'sonata.admin.page' => 'getSonata_Admin_PageService',
            'sonata.admin.parameter' => 'getSonata_Admin_ParameterService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.review' => 'getSonata_Admin_ReviewService',
            'sonata.admin.route.cache' => 'getSonata_Admin_Route_CacheService',
            'sonata.admin.route.cache_warmup' => 'getSonata_Admin_Route_CacheWarmupService',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService',
            'sonata.admin.security.handler' => 'getSonata_Admin_Security_HandlerService',
            'sonata.admin.thread' => 'getSonata_Admin_ThreadService',
            'sonata.admin.translator.extractor.jms_translator_bundle' => 'getSonata_Admin_Translator_Extractor_JmsTranslatorBundleService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService',
            'sonata.admin_doctrine_orm.block.audit' => 'getSonata_AdminDoctrineOrm_Block_AuditService',
            'sonata.block.cache.handler.default' => 'getSonata_Block_Cache_Handler_DefaultService',
            'sonata.block.cache.handler.noop' => 'getSonata_Block_Cache_Handler_NoopService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService',
            'sonata.block.exception.strategy.manager' => 'getSonata_Block_Exception_Strategy_ManagerService',
            'sonata.block.form.type.block' => 'getSonata_Block_Form_Type_BlockService',
            'sonata.block.form.type.container_template' => 'getSonata_Block_Form_Type_ContainerTemplateService',
            'sonata.block.loader.chain' => 'getSonata_Block_Loader_ChainService',
            'sonata.block.loader.service' => 'getSonata_Block_Loader_ServiceService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService',
            'sonata.block.templating.helper' => 'getSonata_Block_Templating_HelperService',
            'sonata.block.twig.global' => 'getSonata_Block_Twig_GlobalService',
            'sonata.core.date.moment_format_converter' => 'getSonata_Core_Date_MomentFormatConverterService',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.form.type.array' => 'getSonata_Core_Form_Type_ArrayService',
            'sonata.core.form.type.boolean' => 'getSonata_Core_Form_Type_BooleanService',
            'sonata.core.form.type.collection' => 'getSonata_Core_Form_Type_CollectionService',
            'sonata.core.form.type.color_selector' => 'getSonata_Core_Form_Type_ColorSelectorService',
            'sonata.core.form.type.date_picker' => 'getSonata_Core_Form_Type_DatePickerService',
            'sonata.core.form.type.date_range' => 'getSonata_Core_Form_Type_DateRangeService',
            'sonata.core.form.type.date_range_picker' => 'getSonata_Core_Form_Type_DateRangePickerService',
            'sonata.core.form.type.datetime_picker' => 'getSonata_Core_Form_Type_DatetimePickerService',
            'sonata.core.form.type.datetime_range' => 'getSonata_Core_Form_Type_DatetimeRangeService',
            'sonata.core.form.type.datetime_range_picker' => 'getSonata_Core_Form_Type_DatetimeRangePickerService',
            'sonata.core.form.type.equal' => 'getSonata_Core_Form_Type_EqualService',
            'sonata.core.form.type.translatable_choice' => 'getSonata_Core_Form_Type_TranslatableChoiceService',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService',
            'sonata.core.slugify.cocur' => 'getSonata_Core_Slugify_CocurService',
            'sonata.core.slugify.native' => 'getSonata_Core_Slugify_NativeService',
            'sonata.core.twig.extension.text' => 'getSonata_Core_Twig_Extension_TextService',
            'sonata.core.twig.extension.wrapping' => 'getSonata_Core_Twig_Extension_WrappingService',
            'sonata.core.twig.status_extension' => 'getSonata_Core_Twig_StatusExtensionService',
            'sonata.core.twig.template_extension' => 'getSonata_Core_Twig_TemplateExtensionService',
            'sonata.core.validator.inline' => 'getSonata_Core_Validator_InlineService',
            'sonata.easy_extends.doctrine.mapper' => 'getSonata_EasyExtends_Doctrine_MapperService',
            'sonata.easy_extends.generator.bundle' => 'getSonata_EasyExtends_Generator_BundleService',
            'sonata.easy_extends.generator.odm' => 'getSonata_EasyExtends_Generator_OdmService',
            'sonata.easy_extends.generator.orm' => 'getSonata_EasyExtends_Generator_OrmService',
            'sonata.easy_extends.generator.phpcr' => 'getSonata_EasyExtends_Generator_PhpcrService',
            'sonata.easy_extends.generator.serializer' => 'getSonata_EasyExtends_Generator_SerializerService',
            'sonata.user.admin.user' => 'getSonata_User_Admin_UserService',
            'sonata.user.block.account' => 'getSonata_User_Block_AccountService',
            'sonata.user.block.menu' => 'getSonata_User_Block_MenuService',
            'sonata.user.editable_role_builder' => 'getSonata_User_EditableRoleBuilderService',
            'sonata.user.form.gender_list' => 'getSonata_User_Form_GenderListService',
            'sonata.user.form.type.security_roles' => 'getSonata_User_Form_Type_SecurityRolesService',
            'sonata.user.profile.form' => 'getSonata_User_Profile_FormService',
            'sonata.user.profile.form.handler' => 'getSonata_User_Profile_Form_HandlerService',
            'sonata.user.profile.form.type' => 'getSonata_User_Profile_Form_TypeService',
            'sonata.user.profile.menu_builder' => 'getSonata_User_Profile_MenuBuilderService',
            'sonata.user.twig.global' => 'getSonata_User_Twig_GlobalService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'troopers_mangopay.bank_information_helper' => 'getTroopersMangopay_BankInformationHelperService',
            'troopers_mangopay.bankwire_helper' => 'getTroopersMangopay_BankwireHelperService',
            'troopers_mangopay.card_registration_helper' => 'getTroopersMangopay_CardRegistrationHelperService',
            'troopers_mangopay.form.card' => 'getTroopersMangopay_Form_CardService',
            'troopers_mangopay.mango_api' => 'getTroopersMangopay_MangoApiService',
            'troopers_mangopay.payment_direct_helper' => 'getTroopersMangopay_PaymentDirectHelperService',
            'troopers_mangopay.payment_helper' => 'getTroopersMangopay_PaymentHelperService',
            'troopers_mangopay.payment_out_helper' => 'getTroopersMangopay_PaymentOutHelperService',
            'troopers_mangopay.user_helper' => 'getTroopersMangopay_UserHelperService',
            'troopers_mangopay.wallet_helper' => 'getTroopersMangopay_WalletHelperService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.fm_elfinder_init' => 'getTwig_Extension_FmElfinderInitService',
            'twig.extension.intl' => 'getTwig_Extension_IntlService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.text_extension' => 'getTwig_TextExtensionService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'validator.validator_factory' => 'getValidator_ValidatorFactoryService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
            'white_october_breadcrumbs' => 'getWhiteOctoberBreadcrumbsService',
            'white_october_breadcrumbs.helper' => 'getWhiteOctoberBreadcrumbs_HelperService',
            'white_october_breadcrumbs.twig' => 'getWhiteOctoberBreadcrumbs_TwigService',
        );
        $this->aliases = array(
            'a2lix_translation_form.default.service.locale_provider' => 'a2lix_translation_form.default.service.parameter_locale_provider',
            'a2lix_translation_form.manager_registry' => 'doctrine',
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.odm.mongodb.document_manager' => 'doctrine_mongodb.odm.default_document_manager',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'doctrine_mongodb.odm.cache' => 'doctrine_mongodb.odm.cache.array',
            'doctrine_mongodb.odm.document_manager' => 'doctrine_mongodb.odm.default_document_manager',
            'doctrine_mongodb.odm.metadata.annotation_reader' => 'annotation_reader',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fm_elfinder.configurator' => 'fm_elfinder.configurator.default',
            'fm_elfinder.loader' => 'fm_elfinder.loader.default',
            'fos_message.new_thread_form.type' => 'cocorico_message.new_thread.form.type',
            'fos_message.search_finder' => 'fos_message.search_finder.default',
            'fos_message.search_query_factory' => 'fos_message.search_query_factory.default',
            'fos_user.change_password.form.handler' => 'fos_user.change_password.form.handler.default',
            'fos_user.mailer' => 'cocorico_user.mailer.twig_swift',
            'fos_user.user_manager' => 'cocorico_user.user_manager',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'geocoder' => 'bazinga_geocoder.geocoder',
            'hwi_oauth.account.connector' => 'cocorico_user.oauth.user.provider.entity',
            'hwi_oauth.user.provider.entity.main' => 'cocorico_user.oauth.user.provider.entity',
            'hwi_oauth.user_checker' => 'security.user_checker.admin',
            'lexik_currency.default_adapter' => 'lexik_currency.doctrine_adapter',
            'mailer' => 'swiftmailer.mailer.default',
            'payment.paypal.authentication_strategy' => 'payment.paypal.authentication_strategy.token',
            'security.user_checker.main' => 'security.user_checker.admin',
            'session.storage' => 'session.storage.native',
            'simplethings\\entityaudit\\auditconfiguration' => 'simplethings_entityaudit.config',
            'simplethings\\entityaudit\\auditmanager' => 'simplethings_entityaudit.manager',
            'simplethings\\entityaudit\\auditreader' => 'simplethings_entityaudit.reader',
            'simplethings_entityaudit.username_callable' => 'simplethings_entityaudit.username_callable.token_storage',
            'sonata.block.cache.handler' => 'sonata.block.cache.handler.default',
            'sonata.block.context_manager' => 'sonata.block.context_manager.default',
            'sonata.block.renderer' => 'sonata.block.renderer.default',
            'sonata.user.authentication.form' => 'fos_user.profile.form',
            'sonata.user.authentication.form_handler' => 'fos_user.profile.form.handler',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /**
     * Gets the 'a2lix_translation_form.default.listener.translations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Form\EventListener\TranslationsListener A A2lix\TranslationFormBundle\Form\EventListener\TranslationsListener instance
     */
    protected function getA2lixTranslationForm_Default_Listener_TranslationsService()
    {
        return $this->services['a2lix_translation_form.default.listener.translations'] = new \A2lix\TranslationFormBundle\Form\EventListener\TranslationsListener($this->get('a2lix_translation_form.default.service.translation'));
    }

    /**
     * Gets the 'a2lix_translation_form.default.listener.translationsforms' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Form\EventListener\TranslationsFormsListener A A2lix\TranslationFormBundle\Form\EventListener\TranslationsFormsListener instance
     */
    protected function getA2lixTranslationForm_Default_Listener_TranslationsformsService()
    {
        return $this->services['a2lix_translation_form.default.listener.translationsforms'] = new \A2lix\TranslationFormBundle\Form\EventListener\TranslationsFormsListener();
    }

    /**
     * Gets the 'a2lix_translation_form.default.service.parameter_locale_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Locale\DefaultProvider A A2lix\TranslationFormBundle\Locale\DefaultProvider instance
     */
    protected function getA2lixTranslationForm_Default_Service_ParameterLocaleProviderService()
    {
        return $this->services['a2lix_translation_form.default.service.parameter_locale_provider'] = new \A2lix\TranslationFormBundle\Locale\DefaultProvider(array(0 => 'en', 1 => 'ee'), 'en', array());
    }

    /**
     * Gets the 'a2lix_translation_form.default.service.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\TranslationForm\TranslationForm A A2lix\TranslationFormBundle\TranslationForm\TranslationForm instance
     */
    protected function getA2lixTranslationForm_Default_Service_TranslationService()
    {
        return $this->services['a2lix_translation_form.default.service.translation'] = new \A2lix\TranslationFormBundle\TranslationForm\TranslationForm($this->get('form.registry'), $this->get('doctrine'));
    }

    /**
     * Gets the 'a2lix_translation_form.default.type.translatedentity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Form\Type\TranslatedEntityType A A2lix\TranslationFormBundle\Form\Type\TranslatedEntityType instance
     */
    protected function getA2lixTranslationForm_Default_Type_TranslatedentityService()
    {
        $this->services['a2lix_translation_form.default.type.translatedentity'] = $instance = new \A2lix\TranslationFormBundle\Form\Type\TranslatedEntityType();

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'a2lix_translation_form.default.type.translations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Form\Type\TranslationsType A A2lix\TranslationFormBundle\Form\Type\TranslationsType instance
     */
    protected function getA2lixTranslationForm_Default_Type_TranslationsService()
    {
        return $this->services['a2lix_translation_form.default.type.translations'] = new \A2lix\TranslationFormBundle\Form\Type\TranslationsType($this->get('a2lix_translation_form.default.listener.translations'), $this->get('a2lix_translation_form.default.service.parameter_locale_provider'));
    }

    /**
     * Gets the 'a2lix_translation_form.default.type.translationsfields' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Form\Type\TranslationsFieldsType A A2lix\TranslationFormBundle\Form\Type\TranslationsFieldsType instance
     */
    protected function getA2lixTranslationForm_Default_Type_TranslationsfieldsService()
    {
        return $this->services['a2lix_translation_form.default.type.translationsfields'] = new \A2lix\TranslationFormBundle\Form\Type\TranslationsFieldsType();
    }

    /**
     * Gets the 'a2lix_translation_form.default.type.translationsforms' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Form\Type\TranslationsFormsType A A2lix\TranslationFormBundle\Form\Type\TranslationsFormsType instance
     */
    protected function getA2lixTranslationForm_Default_Type_TranslationsformsService()
    {
        return $this->services['a2lix_translation_form.default.type.translationsforms'] = new \A2lix\TranslationFormBundle\Form\Type\TranslationsFormsType($this->get('a2lix_translation_form.default.service.translation'), $this->get('a2lix_translation_form.default.listener.translationsforms'), $this->get('a2lix_translation_form.default.service.parameter_locale_provider'));
    }

    /**
     * Gets the 'a2lix_translation_form.default.type.translationslocalesselector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \A2lix\TranslationFormBundle\Form\Type\TranslationsLocalesSelectorType A A2lix\TranslationFormBundle\Form\Type\TranslationsLocalesSelectorType instance
     */
    protected function getA2lixTranslationForm_Default_Type_TranslationslocalesselectorService()
    {
        return $this->services['a2lix_translation_form.default.type.translationslocalesselector'] = new \A2lix\TranslationFormBundle\Form\Type\TranslationsLocalesSelectorType($this->get('a2lix_translation_form.default.service.parameter_locale_provider'));
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(new \Doctrine\Common\Annotations\AnnotationReader(), new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/annotations')), true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'CocoricoCoreBundle', ($this->targetDirs[2].'/Resources/CocoricoCoreBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'CocoricoCoreBundle', '/cocorico/src/Cocorico/CoreBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'CocoricoUserBundle', ($this->targetDirs[2].'/Resources/CocoricoUserBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'CocoricoUserBundle', '/cocorico/src/Cocorico/UserBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[2].'/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter.jsqueeze' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\JSqueezeFilter A Assetic\Filter\JSqueezeFilter instance
     */
    protected function getAssetic_Filter_JsqueezeService()
    {
        $this->services['assetic.filter.jsqueeze'] = $instance = new \Assetic\Filter\JSqueezeFilter();

        $instance->setSingleLine(true);
        $instance->keepImportantComments(true);
        $instance->setSpecialVarRx(false);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.minifycsscompressor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\MinifyCssCompressorFilter A Assetic\Filter\MinifyCssCompressorFilter instance
     */
    protected function getAssetic_Filter_MinifycsscompressorService()
    {
        return $this->services['assetic.filter.minifycsscompressor'] = new \Assetic\Filter\MinifyCssCompressorFilter();
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite', 'minifycsscompressor' => 'assetic.filter.minifycsscompressor', 'jsqueeze' => 'assetic.filter.jsqueeze'));
    }

    /**
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /**
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\UrlPackage(array(0 => 'http://localhost'), new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }

    /**
     * Gets the 'bazinga_geocoder.dumper.geojson' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Geocoder\Dumper\GeoJson A Geocoder\Dumper\GeoJson instance
     */
    protected function getBazingaGeocoder_Dumper_GeojsonService()
    {
        return $this->services['bazinga_geocoder.dumper.geojson'] = new \Geocoder\Dumper\GeoJson();
    }

    /**
     * Gets the 'bazinga_geocoder.dumper.gpx' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Geocoder\Dumper\Gpx A Geocoder\Dumper\Gpx instance
     */
    protected function getBazingaGeocoder_Dumper_GpxService()
    {
        return $this->services['bazinga_geocoder.dumper.gpx'] = new \Geocoder\Dumper\Gpx();
    }

    /**
     * Gets the 'bazinga_geocoder.dumper.kmp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Geocoder\Dumper\Kml A Geocoder\Dumper\Kml instance
     */
    protected function getBazingaGeocoder_Dumper_KmpService()
    {
        return $this->services['bazinga_geocoder.dumper.kmp'] = new \Geocoder\Dumper\Kml();
    }

    /**
     * Gets the 'bazinga_geocoder.dumper.wkb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Geocoder\Dumper\Wkb A Geocoder\Dumper\Wkb instance
     */
    protected function getBazingaGeocoder_Dumper_WkbService()
    {
        return $this->services['bazinga_geocoder.dumper.wkb'] = new \Geocoder\Dumper\Wkb();
    }

    /**
     * Gets the 'bazinga_geocoder.dumper.wkt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Geocoder\Dumper\Wkt A Geocoder\Dumper\Wkt instance
     */
    protected function getBazingaGeocoder_Dumper_WktService()
    {
        return $this->services['bazinga_geocoder.dumper.wkt'] = new \Geocoder\Dumper\Wkt();
    }

    /**
     * Gets the 'bazinga_geocoder.dumper_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bazinga\Bundle\GeocoderBundle\DumperManager A Bazinga\Bundle\GeocoderBundle\DumperManager instance
     */
    protected function getBazingaGeocoder_DumperManagerService()
    {
        return $this->services['bazinga_geocoder.dumper_manager'] = new \Bazinga\Bundle\GeocoderBundle\DumperManager(array('geojson' => new \Geocoder\Dumper\GeoJson(), 'gpx' => new \Geocoder\Dumper\Gpx(), 'kmp' => new \Geocoder\Dumper\Kml(), 'wkb' => new \Geocoder\Dumper\Wkb(), 'wkt' => new \Geocoder\Dumper\Wkt()));
    }

    /**
     * Gets the 'bazinga_geocoder.geocoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bazinga\Bundle\GeocoderBundle\Geocoder\LoggableGeocoder A Bazinga\Bundle\GeocoderBundle\Geocoder\LoggableGeocoder instance
     */
    protected function getBazingaGeocoder_GeocoderService()
    {
        $this->services['bazinga_geocoder.geocoder'] = $instance = new \Bazinga\Bundle\GeocoderBundle\Geocoder\LoggableGeocoder();

        $instance->registerProviders(array(0 => new \Geocoder\Provider\GoogleMaps($this->get('bazinga_geocoder.geocoder.adapter'), NULL, NULL, false, NULL)));
        $instance->setLogger($this->get('bazinga_geocoder.logger'));

        return $instance;
    }

    /**
     * Gets the 'bazinga_geocoder.geocoder.adapter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\HttpAdapter\CurlHttpAdapter A Ivory\HttpAdapter\CurlHttpAdapter instance
     */
    protected function getBazingaGeocoder_Geocoder_AdapterService()
    {
        return $this->services['bazinga_geocoder.geocoder.adapter'] = new \Ivory\HttpAdapter\CurlHttpAdapter();
    }

    /**
     * Gets the 'bazinga_geocoder.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bazinga\Bundle\GeocoderBundle\Logger\GeocoderLogger A Bazinga\Bundle\GeocoderBundle\Logger\GeocoderLogger instance
     */
    protected function getBazingaGeocoder_LoggerService()
    {
        return $this->services['bazinga_geocoder.logger'] = new \Bazinga\Bundle\GeocoderBundle\Logger\GeocoderLogger($this->get('monolog.logger.bazinga_geocoder', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Doctrine\Bundle\MongoDBBundle\CacheWarmer\ProxyCacheWarmer($this), 1 => new \Doctrine\Bundle\MongoDBBundle\CacheWarmer\HydratorCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 3 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 4 => $this->get('kernel.class_cache.cache_warmer'), 5 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 6 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 7 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array()), 8 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this->get('twig'), new \Symfony\Bundle\TwigBundle\TemplateIterator($a, $this->targetDirs[2], array())), 9 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 10 => new \JMS\DiExtraBundle\HttpKernel\ControllerInjectorsWarmer($a, $this->get('jms_di_extra.controller_resolver'), array()), 11 => $this->get('sonata.admin.route.cache_warmup')));
    }

    /**
     * Gets the 'cocorico.ajax.authentication_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Listener\AjaxAuthenticationListener A Cocorico\CoreBundle\Listener\AjaxAuthenticationListener instance
     */
    protected function getCocorico_Ajax_AuthenticationListenerService()
    {
        return $this->services['cocorico.ajax.authentication_listener'] = new \Cocorico\CoreBundle\Listener\AjaxAuthenticationListener();
    }

    /**
     * Gets the 'cocorico.authentication_success_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Authentication\Handler\LoginSuccessHandler A Cocorico\CoreBundle\Authentication\Handler\LoginSuccessHandler instance
     */
    protected function getCocorico_AuthenticationSuccessListenerService()
    {
        return $this->services['cocorico.authentication_success_listener'] = new \Cocorico\CoreBundle\Authentication\Handler\LoginSuccessHandler($this->get('security.http_utils'), array('target_path_parameter' => 'redirect_to', 'login_path' => 'cocorico_user_login', 'use_referer' => true));
    }

    /**
     * Gets the 'cocorico.booking.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Model\Manager\BookingManager A Cocorico\CoreBundle\Model\Manager\BookingManager instance
     */
    protected function getCocorico_Booking_ManagerService()
    {
        return $this->services['cocorico.booking.manager'] = new \Cocorico\CoreBundle\Model\Manager\BookingManager($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine_mongodb.odm.default_document_manager'), $this->get('cocorico.listing_availability.manager'), $this->get('cocorico.mailer.twig_swift'), NULL, $this->get('debug.event_dispatcher'), array('parameters' => array('cocorico_fee_as_asker' => '0.00', 'cocorico_fee_as_offerer' => '0.00', 'cocorico_fee_general' => 5.0, 'cocorico_time_unit' => 60, 'cocorico_time_zone' => 'Europe/Tallinn', 'cocorico_time_max' => 8, 'cocorico_time_hours_available' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15, 16 => 16, 17 => 17, 18 => 18, 19 => 19, 20 => 20, 21 => 21, 22 => 22, 23 => 23), 'cocorico_booking_expiration_delay' => 2880, 'cocorico_booking_acceptation_delay' => 240, 'cocorico_booking_allow_single_day' => true, 'cocorico_booking_end_day_included' => true, 'cocorico_booking_min_start_delay' => 0, 'cocorico_booking_min_start_time_delay' => 720, 'cocorico_booking_price_min' => 500, 'cocorico_dashboard_max_per_page' => 10, 'cocorico_listing_availability_status' => 1, 'cocorico_vat' => 0.2, 'cocorico_include_vat' => false, 'cocorico_bundles' => array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle', 'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle', 'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle', 'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle', 'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\JMSPaymentCoreBundle', 'JMSPaymentPaypalBundle' => 'JMS\\Payment\\PaypalBundle\\JMSPaymentPaypalBundle', 'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\LexikCurrencyBundle', 'BazingaGeocoderBundle' => 'Bazinga\\Bundle\\GeocoderBundle\\BazingaGeocoderBundle', 'DoctrineMongoDBBundle' => 'Doctrine\\Bundle\\MongoDBBundle\\DoctrineMongoDBBundle', 'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle', 'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle', 'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle', 'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle', 'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle', 'FOSMessageBundle' => 'FOS\\MessageBundle\\FOSMessageBundle', 'WhiteOctoberBreadcrumbsBundle' => 'WhiteOctober\\BreadcrumbsBundle\\WhiteOctoberBreadcrumbsBundle', 'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle', 'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle', 'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'SimpleThingsEntityAuditBundle' => 'SimpleThings\\EntityAudit\\SimpleThingsEntityAuditBundle', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\CocoricoCoreBundle', 'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\CocoricoGeoBundle', 'CocoricoUserBundle' => 'Cocorico\\UserBundle\\CocoricoUserBundle', 'CocoricoPageBundle' => 'Cocorico\\PageBundle\\CocoricoPageBundle', 'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\CocoricoCMSBundle', 'CocoricoBreadcrumbBundle' => 'Cocorico\\BreadcrumbBundle\\CocoricoBreadcrumbBundle', 'CocoricoSonataAdminBundle' => 'Cocorico\\SonataAdminBundle\\CocoricoSonataAdminBundle', 'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\CocoricoMessageBundle', 'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\CocoricoContactBundle', 'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\CocoricoReviewBundle', 'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\CocoricoConfigBundle', 'TroopersMangopayBundle' => 'Troopers\\MangopayBundle\\TroopersMangopayBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'DeployBundle' => 'Hpatoio\\DeployBundle\\DeployBundle'))));
    }

    /**
     * Gets the 'cocorico.booking_bank_wire.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Model\Manager\BookingBankWireManager A Cocorico\CoreBundle\Model\Manager\BookingBankWireManager instance
     */
    protected function getCocorico_BookingBankWire_ManagerService()
    {
        return $this->services['cocorico.booking_bank_wire.manager'] = new \Cocorico\CoreBundle\Model\Manager\BookingBankWireManager($this->get('doctrine.orm.default_entity_manager'), false, $this->get('cocorico.mailer.twig_swift'), 10, $this->get('debug.event_dispatcher'), array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle', 'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle', 'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle', 'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle', 'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\JMSPaymentCoreBundle', 'JMSPaymentPaypalBundle' => 'JMS\\Payment\\PaypalBundle\\JMSPaymentPaypalBundle', 'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\LexikCurrencyBundle', 'BazingaGeocoderBundle' => 'Bazinga\\Bundle\\GeocoderBundle\\BazingaGeocoderBundle', 'DoctrineMongoDBBundle' => 'Doctrine\\Bundle\\MongoDBBundle\\DoctrineMongoDBBundle', 'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle', 'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle', 'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle', 'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle', 'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle', 'FOSMessageBundle' => 'FOS\\MessageBundle\\FOSMessageBundle', 'WhiteOctoberBreadcrumbsBundle' => 'WhiteOctober\\BreadcrumbsBundle\\WhiteOctoberBreadcrumbsBundle', 'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle', 'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle', 'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'SimpleThingsEntityAuditBundle' => 'SimpleThings\\EntityAudit\\SimpleThingsEntityAuditBundle', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\CocoricoCoreBundle', 'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\CocoricoGeoBundle', 'CocoricoUserBundle' => 'Cocorico\\UserBundle\\CocoricoUserBundle', 'CocoricoPageBundle' => 'Cocorico\\PageBundle\\CocoricoPageBundle', 'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\CocoricoCMSBundle', 'CocoricoBreadcrumbBundle' => 'Cocorico\\BreadcrumbBundle\\CocoricoBreadcrumbBundle', 'CocoricoSonataAdminBundle' => 'Cocorico\\SonataAdminBundle\\CocoricoSonataAdminBundle', 'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\CocoricoMessageBundle', 'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\CocoricoContactBundle', 'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\CocoricoReviewBundle', 'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\CocoricoConfigBundle', 'TroopersMangopayBundle' => 'Troopers\\MangopayBundle\\TroopersMangopayBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'DeployBundle' => 'Hpatoio\\DeployBundle\\DeployBundle'));
    }

    /**
     * Gets the 'cocorico.booking_bank_wire.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Event\BookingBankWireSubscriber A Cocorico\CoreBundle\Event\BookingBankWireSubscriber instance
     */
    protected function getCocorico_BookingBankWire_SubscriberService()
    {
        return $this->services['cocorico.booking_bank_wire.subscriber'] = new \Cocorico\CoreBundle\Event\BookingBankWireSubscriber($this->get('cocorico.booking_bank_wire.manager'), $this->get('logger'));
    }

    /**
     * Gets the 'cocorico.booking_payin_refund.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Model\Manager\BookingPayinRefundManager A Cocorico\CoreBundle\Model\Manager\BookingPayinRefundManager instance
     */
    protected function getCocorico_BookingPayinRefund_ManagerService()
    {
        return $this->services['cocorico.booking_payin_refund.manager'] = new \Cocorico\CoreBundle\Model\Manager\BookingPayinRefundManager($this->get('doctrine.orm.default_entity_manager'), array('flexible' => array('time_before_start' => 86400, 'refund_min' => 0.5, 'refund_max' => 1), 'strict' => array('time_before_start' => 86400, 'refund_min' => 0, 'refund_max' => 0.5)), $this->get('cocorico.mailer.twig_swift'), 10, 'Europe/Tallinn', array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle', 'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle', 'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle', 'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle', 'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\JMSPaymentCoreBundle', 'JMSPaymentPaypalBundle' => 'JMS\\Payment\\PaypalBundle\\JMSPaymentPaypalBundle', 'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\LexikCurrencyBundle', 'BazingaGeocoderBundle' => 'Bazinga\\Bundle\\GeocoderBundle\\BazingaGeocoderBundle', 'DoctrineMongoDBBundle' => 'Doctrine\\Bundle\\MongoDBBundle\\DoctrineMongoDBBundle', 'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle', 'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle', 'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle', 'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle', 'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle', 'FOSMessageBundle' => 'FOS\\MessageBundle\\FOSMessageBundle', 'WhiteOctoberBreadcrumbsBundle' => 'WhiteOctober\\BreadcrumbsBundle\\WhiteOctoberBreadcrumbsBundle', 'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle', 'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle', 'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'SimpleThingsEntityAuditBundle' => 'SimpleThings\\EntityAudit\\SimpleThingsEntityAuditBundle', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\CocoricoCoreBundle', 'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\CocoricoGeoBundle', 'CocoricoUserBundle' => 'Cocorico\\UserBundle\\CocoricoUserBundle', 'CocoricoPageBundle' => 'Cocorico\\PageBundle\\CocoricoPageBundle', 'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\CocoricoCMSBundle', 'CocoricoBreadcrumbBundle' => 'Cocorico\\BreadcrumbBundle\\CocoricoBreadcrumbBundle', 'CocoricoSonataAdminBundle' => 'Cocorico\\SonataAdminBundle\\CocoricoSonataAdminBundle', 'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\CocoricoMessageBundle', 'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\CocoricoContactBundle', 'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\CocoricoReviewBundle', 'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\CocoricoConfigBundle', 'TroopersMangopayBundle' => 'Troopers\\MangopayBundle\\TroopersMangopayBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'DeployBundle' => 'Hpatoio\\DeployBundle\\DeployBundle'));
    }

    /**
     * Gets the 'cocorico.booking_payin_refund.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Event\BookingPayinRefundSubscriber A Cocorico\CoreBundle\Event\BookingPayinRefundSubscriber instance
     */
    protected function getCocorico_BookingPayinRefund_SubscriberService()
    {
        return $this->services['cocorico.booking_payin_refund.subscriber'] = new \Cocorico\CoreBundle\Event\BookingPayinRefundSubscriber($this->get('cocorico.booking_payin_refund.manager'));
    }

    /**
     * Gets the 'cocorico.booking_user_address_entity_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Listener\BookingUserAddressEntityListener A Cocorico\CoreBundle\Listener\BookingUserAddressEntityListener instance
     */
    protected function getCocorico_BookingUserAddressEntityListenerService()
    {
        return $this->services['cocorico.booking_user_address_entity_listener'] = new \Cocorico\CoreBundle\Listener\BookingUserAddressEntityListener($this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'cocorico.booking_validate.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Event\BookingValidateSubscriber A Cocorico\CoreBundle\Event\BookingValidateSubscriber instance
     */
    protected function getCocorico_BookingValidate_SubscriberService()
    {
        return $this->services['cocorico.booking_validate.subscriber'] = new \Cocorico\CoreBundle\Event\BookingValidateSubscriber($this->get('cocorico.booking_bank_wire.manager'));
    }

    /**
     * Gets the 'cocorico.booking_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Validator\Constraints\BookingValidator A Cocorico\CoreBundle\Validator\Constraints\BookingValidator instance
     */
    protected function getCocorico_BookingValidatorService()
    {
        return $this->services['cocorico.booking_validator'] = new \Cocorico\CoreBundle\Validator\Constraints\BookingValidator($this->get('cocorico.booking.manager'), 0, 720, 'EUR');
    }

    /**
     * Gets the 'cocorico.breadcrumbs_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\BreadcrumbBundle\Services\BreadcrumbsYamlLoader A Cocorico\BreadcrumbBundle\Services\BreadcrumbsYamlLoader instance
     */
    protected function getCocorico_BreadcrumbsLoaderService()
    {
        return $this->services['cocorico.breadcrumbs_loader'] = new \Cocorico\BreadcrumbBundle\Services\BreadcrumbsYamlLoader($this->get('cocorico.breadcrumbs_yaml_parser'), $this->get('cocorico.breadcrumbs_yaml_locator'));
    }

    /**
     * Gets the 'cocorico.breadcrumbs_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\BreadcrumbBundle\Services\BreadcrumbsManager A Cocorico\BreadcrumbBundle\Services\BreadcrumbsManager instance
     */
    protected function getCocorico_BreadcrumbsManagerService()
    {
        return $this->services['cocorico.breadcrumbs_manager'] = new \Cocorico\BreadcrumbBundle\Services\BreadcrumbsManager($this->get('white_october_breadcrumbs'), $this->get('router'), $this->get('cocorico.breadcrumbs_loader'), $this->get('translator.default'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'cocorico.breadcrumbs_yaml_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\FileLocator A Symfony\Component\Config\FileLocator instance
     */
    protected function getCocorico_BreadcrumbsYamlLocatorService()
    {
        return $this->services['cocorico.breadcrumbs_yaml_locator'] = new \Symfony\Component\Config\FileLocator(($this->targetDirs[2].'/../src/Cocorico/BreadcrumbBundle/Resources/content/'));
    }

    /**
     * Gets the 'cocorico.breadcrumbs_yaml_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Yaml\Parser A Symfony\Component\Yaml\Parser instance
     */
    protected function getCocorico_BreadcrumbsYamlParserService()
    {
        return $this->services['cocorico.breadcrumbs_yaml_parser'] = new \Symfony\Component\Yaml\Parser();
    }

    /**
     * Gets the 'cocorico.extra_bundle.routing_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Routing\ExtraBundleLoader A Cocorico\CoreBundle\Routing\ExtraBundleLoader instance
     */
    protected function getCocorico_ExtraBundle_RoutingLoaderService()
    {
        return $this->services['cocorico.extra_bundle.routing_loader'] = new \Cocorico\CoreBundle\Routing\ExtraBundleLoader(array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle', 'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle', 'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle', 'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle', 'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\JMSPaymentCoreBundle', 'JMSPaymentPaypalBundle' => 'JMS\\Payment\\PaypalBundle\\JMSPaymentPaypalBundle', 'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\LexikCurrencyBundle', 'BazingaGeocoderBundle' => 'Bazinga\\Bundle\\GeocoderBundle\\BazingaGeocoderBundle', 'DoctrineMongoDBBundle' => 'Doctrine\\Bundle\\MongoDBBundle\\DoctrineMongoDBBundle', 'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle', 'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle', 'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle', 'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle', 'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle', 'FOSMessageBundle' => 'FOS\\MessageBundle\\FOSMessageBundle', 'WhiteOctoberBreadcrumbsBundle' => 'WhiteOctober\\BreadcrumbsBundle\\WhiteOctoberBreadcrumbsBundle', 'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle', 'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle', 'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'SimpleThingsEntityAuditBundle' => 'SimpleThings\\EntityAudit\\SimpleThingsEntityAuditBundle', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\CocoricoCoreBundle', 'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\CocoricoGeoBundle', 'CocoricoUserBundle' => 'Cocorico\\UserBundle\\CocoricoUserBundle', 'CocoricoPageBundle' => 'Cocorico\\PageBundle\\CocoricoPageBundle', 'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\CocoricoCMSBundle', 'CocoricoBreadcrumbBundle' => 'Cocorico\\BreadcrumbBundle\\CocoricoBreadcrumbBundle', 'CocoricoSonataAdminBundle' => 'Cocorico\\SonataAdminBundle\\CocoricoSonataAdminBundle', 'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\CocoricoMessageBundle', 'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\CocoricoContactBundle', 'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\CocoricoReviewBundle', 'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\CocoricoConfigBundle', 'TroopersMangopayBundle' => 'Troopers\\MangopayBundle\\TroopersMangopayBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'DeployBundle' => 'Hpatoio\\DeployBundle\\DeployBundle'), 'dev');
    }

    /**
     * Gets the 'cocorico.form.booking.status_filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\BookingStatusFilterType A Cocorico\CoreBundle\Form\Type\Dashboard\BookingStatusFilterType instance
     */
    protected function getCocorico_Form_Booking_StatusFilterService()
    {
        return $this->services['cocorico.form.booking.status_filter'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\BookingStatusFilterType();
    }

    /**
     * Gets the 'cocorico.form.handler.booking' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Handler\Frontend\BookingFormHandler A Cocorico\CoreBundle\Form\Handler\Frontend\BookingFormHandler instance
     */
    protected function getCocorico_Form_Handler_BookingService()
    {
        return $this->services['cocorico.form.handler.booking'] = new \Cocorico\CoreBundle\Form\Handler\Frontend\BookingFormHandler($this->get('request_stack'), $this->get('cocorico.booking.manager'), $this->get('fos_user.registration.form.handler'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'cocorico.form.handler.booking.asker.dashboard' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Handler\Dashboard\BookingAskerFormHandler A Cocorico\CoreBundle\Form\Handler\Dashboard\BookingAskerFormHandler instance
     */
    protected function getCocorico_Form_Handler_Booking_Asker_DashboardService()
    {
        $this->services['cocorico.form.handler.booking.asker.dashboard'] = $instance = new \Cocorico\CoreBundle\Form\Handler\Dashboard\BookingAskerFormHandler();

        $instance->setRequest($this->get('request_stack'));
        $instance->setBookingManager($this->get('cocorico.booking.manager'));
        $instance->setThreadManager($this->get('cocorico_message.thread_manager'));

        return $instance;
    }

    /**
     * Gets the 'cocorico.form.handler.booking.offerer.dashboard' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Handler\Dashboard\BookingOffererFormHandler A Cocorico\CoreBundle\Form\Handler\Dashboard\BookingOffererFormHandler instance
     */
    protected function getCocorico_Form_Handler_Booking_Offerer_DashboardService()
    {
        $this->services['cocorico.form.handler.booking.offerer.dashboard'] = $instance = new \Cocorico\CoreBundle\Form\Handler\Dashboard\BookingOffererFormHandler();

        $instance->setRequest($this->get('request_stack'));
        $instance->setBookingManager($this->get('cocorico.booking.manager'));
        $instance->setThreadManager($this->get('cocorico_message.thread_manager'));

        return $instance;
    }

    /**
     * Gets the 'cocorico.form.handler.booking_price' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Handler\Frontend\BookingPriceFormHandler A Cocorico\CoreBundle\Form\Handler\Frontend\BookingPriceFormHandler instance
     */
    protected function getCocorico_Form_Handler_BookingPriceService()
    {
        return $this->services['cocorico.form.handler.booking_price'] = new \Cocorico\CoreBundle\Form\Handler\Frontend\BookingPriceFormHandler($this->get('session'), $this->get('cocorico.form.type.booking_price'), $this->get('request_stack'), $this->get('cocorico.listing_search_request'), $this->get('cocorico.booking.manager'));
    }

    /**
     * Gets the 'cocorico.form.handler.listing' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Handler\Frontend\ListingFormHandler A Cocorico\CoreBundle\Form\Handler\Frontend\ListingFormHandler instance
     */
    protected function getCocorico_Form_Handler_ListingService()
    {
        return $this->services['cocorico.form.handler.listing'] = new \Cocorico\CoreBundle\Form\Handler\Frontend\ListingFormHandler($this->get('request_stack'), $this->get('cocorico.listing.manager'), $this->get('fos_user.registration.form.handler'));
    }

    /**
     * Gets the 'cocorico.form.handler.listing_availability.price.dashboard' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Handler\Dashboard\ListingAvailabilityPriceFormHandler A Cocorico\CoreBundle\Form\Handler\Dashboard\ListingAvailabilityPriceFormHandler instance
     */
    protected function getCocorico_Form_Handler_ListingAvailability_Price_DashboardService()
    {
        $this->services['cocorico.form.handler.listing_availability.price.dashboard'] = $instance = new \Cocorico\CoreBundle\Form\Handler\Dashboard\ListingAvailabilityPriceFormHandler();

        $instance->setRequest($this->get('request_stack'));
        $instance->setListingAvailabilityManager($this->get('cocorico.listing_availability.manager'));
        $instance->setEntityManager($this->get('doctrine.orm.default_entity_manager'));

        return $instance;
    }

    /**
     * Gets the 'cocorico.form.handler.listing_availability.status.dashboard' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Handler\Dashboard\ListingAvailabilityStatusFormHandler A Cocorico\CoreBundle\Form\Handler\Dashboard\ListingAvailabilityStatusFormHandler instance
     */
    protected function getCocorico_Form_Handler_ListingAvailability_Status_DashboardService()
    {
        $this->services['cocorico.form.handler.listing_availability.status.dashboard'] = $instance = new \Cocorico\CoreBundle\Form\Handler\Dashboard\ListingAvailabilityStatusFormHandler();

        $instance->setRequest($this->get('request_stack'));
        $instance->setListingAvailabilityManager($this->get('cocorico.listing_availability.manager'));
        $instance->setEntityManager($this->get('doctrine.orm.default_entity_manager'));

        return $instance;
    }

    /**
     * Gets the 'cocorico.form.handler.review' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\ReviewBundle\Form\Handler\Frontend\ReviewFormHandler A Cocorico\ReviewBundle\Form\Handler\Frontend\ReviewFormHandler instance
     */
    protected function getCocorico_Form_Handler_ReviewService()
    {
        return $this->services['cocorico.form.handler.review'] = new \Cocorico\ReviewBundle\Form\Handler\Frontend\ReviewFormHandler($this->get('request_stack'), $this->get('cocorico.review.manager'));
    }

    /**
     * Gets the 'cocorico.form.type.booking_edit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\BookingEditType A Cocorico\CoreBundle\Form\Type\Dashboard\BookingEditType instance
     */
    protected function getCocorico_Form_Type_BookingEditService()
    {
        return $this->services['cocorico.form.type.booking_edit'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\BookingEditType();
    }

    /**
     * Gets the 'cocorico.form.type.booking_new' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Frontend\BookingNewType A Cocorico\CoreBundle\Form\Type\Frontend\BookingNewType instance
     */
    protected function getCocorico_Form_Type_BookingNewService()
    {
        return $this->services['cocorico.form.type.booking_new'] = new \Cocorico\CoreBundle\Form\Type\Frontend\BookingNewType($this->get('cocorico.booking.manager'), $this->get('debug.event_dispatcher'), array('parameters' => array('cocorico_booking_allow_single_day' => true, 'cocorico_booking_end_day_included' => true, 'cocorico_booking_min_start_delay' => 0, 'cocorico_booking_min_start_time_delay' => 720, 'cocorico_currency' => 'EUR', 'cocorico_user_address_delivery' => true)));
    }

    /**
     * Gets the 'cocorico.form.type.booking_price' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Frontend\BookingPriceType A Cocorico\CoreBundle\Form\Type\Frontend\BookingPriceType instance
     */
    protected function getCocorico_Form_Type_BookingPriceService()
    {
        return $this->services['cocorico.form.type.booking_price'] = new \Cocorico\CoreBundle\Form\Type\Frontend\BookingPriceType($this->get('cocorico.booking.manager'), true, true, 'range', 'duration');
    }

    /**
     * Gets the 'cocorico.form.type.booking_user_address' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Frontend\BookingUserAddressFormType A Cocorico\CoreBundle\Form\Type\Frontend\BookingUserAddressFormType instance
     */
    protected function getCocorico_Form_Type_BookingUserAddressService()
    {
        return $this->services['cocorico.form.type.booking_user_address'] = new \Cocorico\CoreBundle\Form\Type\Frontend\BookingUserAddressFormType($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the 'cocorico.form.type.country_filtered' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\CountryFilteredType A Cocorico\CoreBundle\Form\Type\CountryFilteredType instance
     */
    protected function getCocorico_Form_Type_CountryFilteredService()
    {
        return $this->services['cocorico.form.type.country_filtered'] = new \Cocorico\CoreBundle\Form\Type\CountryFilteredType(NULL, array(0 => 'EE'));
    }

    /**
     * Gets the 'cocorico.form.type.date_hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\DateHiddenType A Cocorico\CoreBundle\Form\Type\DateHiddenType instance
     */
    protected function getCocorico_Form_Type_DateHiddenService()
    {
        return $this->services['cocorico.form.type.date_hidden'] = new \Cocorico\CoreBundle\Form\Type\DateHiddenType();
    }

    /**
     * Gets the 'cocorico.form.type.date_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\DateRangeType A Cocorico\CoreBundle\Form\Type\DateRangeType instance
     */
    protected function getCocorico_Form_Type_DateRangeService()
    {
        return $this->services['cocorico.form.type.date_range'] = new \Cocorico\CoreBundle\Form\Type\DateRangeType(60, 360);
    }

    /**
     * Gets the 'cocorico.form.type.entity_hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\EntityHiddenType A Cocorico\CoreBundle\Form\Type\EntityHiddenType instance
     */
    protected function getCocorico_Form_Type_EntityHiddenService()
    {
        return $this->services['cocorico.form.type.entity_hidden'] = new \Cocorico\CoreBundle\Form\Type\EntityHiddenType($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'cocorico.form.type.language_filtered' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\LanguageFilteredType A Cocorico\CoreBundle\Form\Type\LanguageFilteredType instance
     */
    protected function getCocorico_Form_Type_LanguageFilteredService()
    {
        return $this->services['cocorico.form.type.language_filtered'] = new \Cocorico\CoreBundle\Form\Type\LanguageFilteredType(array(0 => 'en', 1 => 'ee'));
    }

    /**
     * Gets the 'cocorico.form.type.listing_category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\ListingCategoryType A Cocorico\CoreBundle\Form\Type\ListingCategoryType instance
     */
    protected function getCocorico_Form_Type_ListingCategoryService()
    {
        return $this->services['cocorico.form.type.listing_category'] = new \Cocorico\CoreBundle\Form\Type\ListingCategoryType($this->get('request_stack'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'cocorico.form.type.listing_characteristic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\ListingCharacteristicType A Cocorico\CoreBundle\Form\Type\ListingCharacteristicType instance
     */
    protected function getCocorico_Form_Type_ListingCharacteristicService()
    {
        return $this->services['cocorico.form.type.listing_characteristic'] = new \Cocorico\CoreBundle\Form\Type\ListingCharacteristicType($this->get('request_stack'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'cocorico.form.type.listing_edit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditType A Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditType instance
     */
    protected function getCocorico_Form_Type_ListingEditService()
    {
        return $this->services['cocorico.form.type.listing_edit'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditType($this->get('security.token_storage'), $this->get('request_stack'), array(0 => 'en', 1 => 'ee'), $this->get('cocorico.listing.manager'), 60);
    }

    /**
     * Gets the 'cocorico.form.type.listing_edit_availabilities' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditAvailabilitiesType A Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditAvailabilitiesType instance
     */
    protected function getCocorico_Form_Type_ListingEditAvailabilitiesService()
    {
        return $this->services['cocorico.form.type.listing_edit_availabilities'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditAvailabilitiesType(60, 180);
    }

    /**
     * Gets the 'cocorico.form.type.listing_edit_availabilities_prices' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditAvailabilitiesPricesType A Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditAvailabilitiesPricesType instance
     */
    protected function getCocorico_Form_Type_ListingEditAvailabilitiesPricesService()
    {
        return $this->services['cocorico.form.type.listing_edit_availabilities_prices'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditAvailabilitiesPricesType(60, 180);
    }

    /**
     * Gets the 'cocorico.form.type.listing_edit_availabilities_status' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditAvailabilitiesStatusType A Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditAvailabilitiesStatusType instance
     */
    protected function getCocorico_Form_Type_ListingEditAvailabilitiesStatusService()
    {
        return $this->services['cocorico.form.type.listing_edit_availabilities_status'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditAvailabilitiesStatusType(60, 180);
    }

    /**
     * Gets the 'cocorico.form.type.listing_edit_availability_price' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditAvailabilityPriceType A Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditAvailabilityPriceType instance
     */
    protected function getCocorico_Form_Type_ListingEditAvailabilityPriceService()
    {
        return $this->services['cocorico.form.type.listing_edit_availability_price'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditAvailabilityPriceType();
    }

    /**
     * Gets the 'cocorico.form.type.listing_edit_categories' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditCategoriesType A Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditCategoriesType instance
     */
    protected function getCocorico_Form_Type_ListingEditCategoriesService()
    {
        return $this->services['cocorico.form.type.listing_edit_categories'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditCategoriesType();
    }

    /**
     * Gets the 'cocorico.form.type.listing_edit_categories_ajax' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditCategoriesAjaxType A Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditCategoriesAjaxType instance
     */
    protected function getCocorico_Form_Type_ListingEditCategoriesAjaxService()
    {
        return $this->services['cocorico.form.type.listing_edit_categories_ajax'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditCategoriesAjaxType($this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'cocorico.form.type.listing_edit_characteristic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditCharacteristicType A Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditCharacteristicType instance
     */
    protected function getCocorico_Form_Type_ListingEditCharacteristicService()
    {
        return $this->services['cocorico.form.type.listing_edit_characteristic'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditCharacteristicType($this->get('security.token_storage'), $this->get('request_stack'), array(0 => 'en', 1 => 'ee'), $this->get('cocorico.listing.manager'), 60);
    }

    /**
     * Gets the 'cocorico.form.type.listing_edit_description' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditDescriptionType A Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditDescriptionType instance
     */
    protected function getCocorico_Form_Type_ListingEditDescriptionService()
    {
        return $this->services['cocorico.form.type.listing_edit_description'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditDescriptionType($this->get('security.token_storage'), $this->get('request_stack'), array(0 => 'en', 1 => 'ee'), $this->get('cocorico.listing.manager'), 60);
    }

    /**
     * Gets the 'cocorico.form.type.listing_edit_duration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditDurationType A Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditDurationType instance
     */
    protected function getCocorico_Form_Type_ListingEditDurationService()
    {
        return $this->services['cocorico.form.type.listing_edit_duration'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditDurationType();
    }

    /**
     * Gets the 'cocorico.form.type.listing_edit_images' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditImagesType A Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditImagesType instance
     */
    protected function getCocorico_Form_Type_ListingEditImagesService()
    {
        return $this->services['cocorico.form.type.listing_edit_images'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditImagesType($this->get('security.token_storage'), $this->get('request_stack'), array(0 => 'en', 1 => 'ee'), $this->get('cocorico.listing.manager'), 60);
    }

    /**
     * Gets the 'cocorico.form.type.listing_edit_location' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditLocationType A Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditLocationType instance
     */
    protected function getCocorico_Form_Type_ListingEditLocationService()
    {
        return $this->services['cocorico.form.type.listing_edit_location'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditLocationType($this->get('security.token_storage'), $this->get('request_stack'), array(0 => 'en', 1 => 'ee'), $this->get('cocorico.listing.manager'), 60);
    }

    /**
     * Gets the 'cocorico.form.type.listing_edit_price' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditPriceType A Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditPriceType instance
     */
    protected function getCocorico_Form_Type_ListingEditPriceService()
    {
        return $this->services['cocorico.form.type.listing_edit_price'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditPriceType($this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'cocorico.form.type.listing_edit_status' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditStatusType A Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditStatusType instance
     */
    protected function getCocorico_Form_Type_ListingEditStatusService()
    {
        return $this->services['cocorico.form.type.listing_edit_status'] = new \Cocorico\CoreBundle\Form\Type\Dashboard\ListingEditStatusType($this->get('security.token_storage'), $this->get('request_stack'), array(0 => 'en', 1 => 'ee'), $this->get('cocorico.listing.manager'), 60);
    }

    /**
     * Gets the 'cocorico.form.type.listing_new' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Frontend\ListingNewType A Cocorico\CoreBundle\Form\Type\Frontend\ListingNewType instance
     */
    protected function getCocorico_Form_Type_ListingNewService()
    {
        return $this->services['cocorico.form.type.listing_new'] = new \Cocorico\CoreBundle\Form\Type\Frontend\ListingNewType($this->get('security.token_storage'), $this->get('security.authorization_checker'), $this->get('cocorico_user.login_manager'), $this->get('request_stack'), array(0 => 'en', 1 => 'ee'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'cocorico.form.type.listing_new_categories' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Frontend\ListingNewCategoriesType A Cocorico\CoreBundle\Form\Type\Frontend\ListingNewCategoriesType instance
     */
    protected function getCocorico_Form_Type_ListingNewCategoriesService()
    {
        return $this->services['cocorico.form.type.listing_new_categories'] = new \Cocorico\CoreBundle\Form\Type\Frontend\ListingNewCategoriesType($this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'cocorico.form.type.listing_search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Frontend\ListingSearchType A Cocorico\CoreBundle\Form\Type\Frontend\ListingSearchType instance
     */
    protected function getCocorico_Form_Type_ListingSearchService()
    {
        return $this->services['cocorico.form.type.listing_search'] = new \Cocorico\CoreBundle\Form\Type\Frontend\ListingSearchType($this->get('session'), 'EUR', $this->get('doctrine.orm.default_entity_manager'), $this->get('request_stack'), 60, 0, true, true, 'range', 'duration', 0, $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'cocorico.form.type.listing_search_home' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Frontend\ListingSearchHomeType A Cocorico\CoreBundle\Form\Type\Frontend\ListingSearchHomeType instance
     */
    protected function getCocorico_Form_Type_ListingSearchHomeService()
    {
        return $this->services['cocorico.form.type.listing_search_home'] = new \Cocorico\CoreBundle\Form\Type\Frontend\ListingSearchHomeType($this->get('session'), 'EUR', $this->get('doctrine.orm.default_entity_manager'), $this->get('request_stack'), 60, 0, true, true, 'range', 'duration', 0, $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'cocorico.form.type.listing_search_result' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\Frontend\ListingSearchResultType A Cocorico\CoreBundle\Form\Type\Frontend\ListingSearchResultType instance
     */
    protected function getCocorico_Form_Type_ListingSearchResultService()
    {
        return $this->services['cocorico.form.type.listing_search_result'] = new \Cocorico\CoreBundle\Form\Type\Frontend\ListingSearchResultType($this->get('session'), 'EUR', $this->get('doctrine.orm.default_entity_manager'), $this->get('request_stack'), 60, 0, true, true, 'range', 'duration', 0, $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'cocorico.form.type.price' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\PriceType A Cocorico\CoreBundle\Form\Type\PriceType instance
     */
    protected function getCocorico_Form_Type_PriceService()
    {
        return $this->services['cocorico.form.type.price'] = new \Cocorico\CoreBundle\Form\Type\PriceType('EUR', 2, $this->get('lexik_currency.converter'));
    }

    /**
     * Gets the 'cocorico.form.type.review_new' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\ReviewBundle\Form\Type\Dashboard\ReviewType A Cocorico\ReviewBundle\Form\Type\Dashboard\ReviewType instance
     */
    protected function getCocorico_Form_Type_ReviewNewService()
    {
        return $this->services['cocorico.form.type.review_new'] = new \Cocorico\ReviewBundle\Form\Type\Dashboard\ReviewType();
    }

    /**
     * Gets the 'cocorico.form.type.time_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\TimeRangeType A Cocorico\CoreBundle\Form\Type\TimeRangeType instance
     */
    protected function getCocorico_Form_Type_TimeRangeService()
    {
        return $this->services['cocorico.form.type.time_range'] = new \Cocorico\CoreBundle\Form\Type\TimeRangeType(60, 8, true, array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15, 16 => 16, 17 => 17, 18 => 18, 19 => 19, 20 => 20, 21 => 21, 22 => 22, 23 => 23));
    }

    /**
     * Gets the 'cocorico.form.type.weekdays' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Type\WeekDaysType A Cocorico\CoreBundle\Form\Type\WeekDaysType instance
     */
    protected function getCocorico_Form_Type_WeekdaysService()
    {
        return $this->services['cocorico.form.type.weekdays'] = new \Cocorico\CoreBundle\Form\Type\WeekDaysType();
    }

    /**
     * Gets the 'cocorico.helper.global' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Helper\GlobalHelper A Cocorico\CoreBundle\Helper\GlobalHelper instance
     */
    protected function getCocorico_Helper_GlobalService()
    {
        return $this->services['cocorico.helper.global'] = new \Cocorico\CoreBundle\Helper\GlobalHelper('dev');
    }

    /**
     * Gets the 'cocorico.image_type_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Form\Extension\ImageTypeExtension A Cocorico\CoreBundle\Form\Extension\ImageTypeExtension instance
     */
    protected function getCocorico_ImageTypeExtensionService()
    {
        return $this->services['cocorico.image_type_extension'] = new \Cocorico\CoreBundle\Form\Extension\ImageTypeExtension();
    }

    /**
     * Gets the 'cocorico.language.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Model\Manager\LanguageManager A Cocorico\CoreBundle\Model\Manager\LanguageManager instance
     */
    protected function getCocorico_Language_ManagerService()
    {
        return $this->services['cocorico.language.manager'] = new \Cocorico\CoreBundle\Model\Manager\LanguageManager($this->get('doctrine.orm.default_entity_manager'), $this->get('router'), array(0 => 'en', 1 => 'ee'));
    }

    /**
     * Gets the 'cocorico.listing.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Model\Manager\ListingManager A Cocorico\CoreBundle\Model\Manager\ListingManager instance
     */
    protected function getCocorico_Listing_ManagerService()
    {
        return $this->services['cocorico.listing.manager'] = new \Cocorico\CoreBundle\Model\Manager\ListingManager($this->get('doctrine.orm.default_entity_manager'), $this->get('security.token_storage'), 1, 10, $this->get('cocorico.mailer.twig_swift'));
    }

    /**
     * Gets the 'cocorico.listing_availabilities_price_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Validator\Constraints\ListingAvailabilitiesPriceValidator A Cocorico\CoreBundle\Validator\Constraints\ListingAvailabilitiesPriceValidator instance
     */
    protected function getCocorico_ListingAvailabilitiesPriceValidatorService()
    {
        return $this->services['cocorico.listing_availabilities_price_validator'] = new \Cocorico\CoreBundle\Validator\Constraints\ListingAvailabilitiesPriceValidator(100);
    }

    /**
     * Gets the 'cocorico.listing_availability.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Model\Manager\ListingAvailabilityManager A Cocorico\CoreBundle\Model\Manager\ListingAvailabilityManager instance
     */
    protected function getCocorico_ListingAvailability_ManagerService()
    {
        return $this->services['cocorico.listing_availability.manager'] = new \Cocorico\CoreBundle\Model\Manager\ListingAvailabilityManager($this->get('doctrine_mongodb.odm.default_document_manager'), 60, 1);
    }

    /**
     * Gets the 'cocorico.listing_availability_param_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Request\ListingAvailabilityParamConverter A Cocorico\CoreBundle\Request\ListingAvailabilityParamConverter instance
     */
    protected function getCocorico_ListingAvailabilityParamConverterService()
    {
        return $this->services['cocorico.listing_availability_param_converter'] = new \Cocorico\CoreBundle\Request\ListingAvailabilityParamConverter($this->get('doctrine_mongodb.odm.default_document_manager'));
    }

    /**
     * Gets the 'cocorico.listing_availability_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Validator\Constraints\ListingAvailabilityValidator A Cocorico\CoreBundle\Validator\Constraints\ListingAvailabilityValidator instance
     */
    protected function getCocorico_ListingAvailabilityValidatorService()
    {
        return $this->services['cocorico.listing_availability_validator'] = new \Cocorico\CoreBundle\Validator\Constraints\ListingAvailabilityValidator(100);
    }

    /**
     * Gets the 'cocorico.listing_discount_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Validator\Constraints\ListingDiscountValidator A Cocorico\CoreBundle\Validator\Constraints\ListingDiscountValidator instance
     */
    protected function getCocorico_ListingDiscountValidatorService()
    {
        return $this->services['cocorico.listing_discount_validator'] = new \Cocorico\CoreBundle\Validator\Constraints\ListingDiscountValidator(1, 90);
    }

    /**
     * Gets the 'cocorico.listing_image_upload_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Listener\ListingImageUploadListener A Cocorico\CoreBundle\Listener\ListingImageUploadListener instance
     */
    protected function getCocorico_ListingImageUploadListenerService()
    {
        return $this->services['cocorico.listing_image_upload_listener'] = new \Cocorico\CoreBundle\Listener\ListingImageUploadListener($this->get('cocorico.listing.manager'));
    }

    /**
     * Gets the 'cocorico.listing_image_upload_validation_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Listener\ListingImageUploadValidationListener A Cocorico\CoreBundle\Listener\ListingImageUploadValidationListener instance
     */
    protected function getCocorico_ListingImageUploadValidationListenerService()
    {
        return $this->services['cocorico.listing_image_upload_validation_listener'] = new \Cocorico\CoreBundle\Listener\ListingImageUploadValidationListener(12);
    }

    /**
     * Gets the 'cocorico.listing_param_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Request\ListingParamConverter A Cocorico\CoreBundle\Request\ListingParamConverter instance
     */
    protected function getCocorico_ListingParamConverterService()
    {
        return $this->services['cocorico.listing_param_converter'] = new \Cocorico\CoreBundle\Request\ListingParamConverter($this->get('doctrine.orm.default_entity_manager'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'cocorico.listing_search.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Model\Manager\ListingSearchManager A Cocorico\CoreBundle\Model\Manager\ListingSearchManager instance
     */
    protected function getCocorico_ListingSearch_ManagerService()
    {
        return $this->services['cocorico.listing_search.manager'] = new \Cocorico\CoreBundle\Model\Manager\ListingSearchManager($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine_mongodb.odm.default_document_manager'), $this->get('debug.event_dispatcher'), array('parameters' => array('cocorico_booking_end_day_included' => true, 'cocorico_time_unit' => 60, 'cocorico_listing_search_max_per_page' => 10, 'cocorico_listing_availability_status' => 1)));
    }

    /**
     * Gets the 'cocorico.listing_search_request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Model\ListingSearchRequest A Cocorico\CoreBundle\Model\ListingSearchRequest instance
     */
    protected function getCocorico_ListingSearchRequestService()
    {
        return $this->services['cocorico.listing_search_request'] = new \Cocorico\CoreBundle\Model\ListingSearchRequest($this->get('request_stack'), 10);
    }

    /**
     * Gets the 'cocorico.listing_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Validator\Constraints\ListingValidator A Cocorico\CoreBundle\Validator\Constraints\ListingValidator instance
     */
    protected function getCocorico_ListingValidatorService()
    {
        return $this->services['cocorico.listing_validator'] = new \Cocorico\CoreBundle\Validator\Constraints\ListingValidator($this->get('doctrine.orm.default_entity_manager'), 24, 1, 1, 100, NULL);
    }

    /**
     * Gets the 'cocorico.mailer.twig_swift' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Mailer\TwigSwiftMailer A Cocorico\CoreBundle\Mailer\TwigSwiftMailer instance
     */
    protected function getCocorico_Mailer_TwigSwiftService()
    {
        return $this->services['cocorico.mailer.twig_swift'] = new \Cocorico\CoreBundle\Mailer\TwigSwiftMailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('twig'), $this->get('request_stack'), $this->get('translator.default'), array('parameters' => array('cocorico_time_unit' => 60, 'cocorico_locales' => array(0 => 'en', 1 => 'ee'), 'cocorico_locale' => 'en', 'cocorico_from_email' => 'no-reply@koduteenus.online', 'cocorico_contact_email' => 'contact@koduteenus.online')), array('templates' => array('listing_activated_offerer' => 'CocoricoCoreBundle:Mails/Offerer:listing_activated_offerer.txt.twig', 'booking_request_offerer' => 'CocoricoCoreBundle:Mails/Offerer:booking_request_offerer.txt.twig', 'booking_accepted_offerer' => 'CocoricoCoreBundle:Mails/Offerer:booking_accepted_offerer.txt.twig', 'booking_canceled_by_asker_offerer' => 'CocoricoCoreBundle:Mails/Offerer:booking_canceled_by_asker_offerer.txt.twig', 'booking_canceled_by_asker_asker' => 'CocoricoCoreBundle:Mails/Asker:booking_canceled_by_asker_asker.txt.twig', 'booking_request_expired_offerer' => 'CocoricoCoreBundle:Mails/Offerer:booking_request_expired_offerer.txt.twig', 'booking_request_expired_asker' => 'CocoricoCoreBundle:Mails/Asker:booking_request_expired_asker.txt.twig', 'booking_request_asker' => 'CocoricoCoreBundle:Mails/Asker:booking_request_asker.txt.twig', 'booking_accepted_asker' => 'CocoricoCoreBundle:Mails/Asker:booking_accepted_asker.txt.twig', 'booking_refused_asker' => 'CocoricoCoreBundle:Mails/Asker:booking_refused_asker.txt.twig', 'booking_refused_offerer' => 'CocoricoCoreBundle:Mails/Offerer:booking_refused_offerer.txt.twig', 'booking_imminent_offerer' => 'CocoricoCoreBundle:Mails/Offerer:booking_imminent_offerer.txt.twig', 'booking_imminent_asker' => 'CocoricoCoreBundle:Mails/Asker:booking_imminent_asker.txt.twig', 'booking_request_expiration_alert_offerer' => 'CocoricoCoreBundle:Mails/Offerer:booking_request_expiration_alert_offerer.txt.twig', 'booking_bank_wire_transfer_offerer' => 'CocoricoCoreBundle:Mails/Offerer:booking_bank_wire_transfer_offerer.txt.twig', 'reminder_to_rate_asker_offerer' => 'CocoricoCoreBundle:Mails/Offerer:reminder_to_rate_asker_offerer.txt.twig', 'reminder_to_rate_offerer_asker' => 'CocoricoCoreBundle:Mails/Asker:reminder_to_rate_offerer_asker.txt.twig', 'update_your_calendar_offerer' => 'CocoricoCoreBundle:Mails/Offerer:update_your_calendar_offerer.txt.twig', 'payment_error_asker' => 'CocoricoCoreBundle:Mails/Asker:payment_error_asker.txt.twig', 'admin_message' => 'CocoricoCoreBundle:Mails:admin_message.txt.twig')));
    }

    /**
     * Gets the 'cocorico.namer.image_namer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Namer\ImageNamer A Cocorico\CoreBundle\Namer\ImageNamer instance
     */
    protected function getCocorico_Namer_ImageNamerService()
    {
        return $this->services['cocorico.namer.image_namer'] = new \Cocorico\CoreBundle\Namer\ImageNamer();
    }

    /**
     * Gets the 'cocorico.review.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\ReviewBundle\Entity\Listener\ReviewListener A Cocorico\ReviewBundle\Entity\Listener\ReviewListener instance
     */
    protected function getCocorico_Review_ListenerService()
    {
        return $this->services['cocorico.review.listener'] = new \Cocorico\ReviewBundle\Entity\Listener\ReviewListener();
    }

    /**
     * Gets the 'cocorico.review.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\ReviewBundle\Model\ReviewManager A Cocorico\ReviewBundle\Model\ReviewManager instance
     */
    protected function getCocorico_Review_ManagerService()
    {
        return $this->services['cocorico.review.manager'] = new \Cocorico\ReviewBundle\Model\ReviewManager($this->get('doctrine.orm.default_entity_manager'), 10);
    }

    /**
     * Gets the 'cocorico.star_rating.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\ReviewBundle\Form\Type\StarRatingType A Cocorico\ReviewBundle\Form\Type\StarRatingType instance
     */
    protected function getCocorico_StarRating_Form_TypeService()
    {
        return $this->services['cocorico.star_rating.form.type'] = new \Cocorico\ReviewBundle\Form\Type\StarRatingType();
    }

    /**
     * Gets the 'cocorico.star_rating.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\ReviewBundle\Extension\StarRatingTwigExtension A Cocorico\ReviewBundle\Extension\StarRatingTwigExtension instance
     */
    protected function getCocorico_StarRating_Twig_ExtensionService()
    {
        return $this->services['cocorico.star_rating.twig.extension'] = new \Cocorico\ReviewBundle\Extension\StarRatingTwigExtension();
    }

    /**
     * Gets the 'cocorico.times_range_overlap_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Validator\Constraints\TimeRangesOverlapValidator A Cocorico\CoreBundle\Validator\Constraints\TimeRangesOverlapValidator instance
     */
    protected function getCocorico_TimesRangeOverlapValidatorService()
    {
        return $this->services['cocorico.times_range_overlap_validator'] = new \Cocorico\CoreBundle\Validator\Constraints\TimeRangesOverlapValidator();
    }

    /**
     * Gets the 'cocorico.translator.admin.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Translator\AdminExtractor A Cocorico\CoreBundle\Translator\AdminExtractor instance
     */
    protected function getCocorico_Translator_Admin_ExtractorService()
    {
        return $this->services['cocorico.translator.admin.extractor'] = new \Cocorico\CoreBundle\Translator\AdminExtractor();
    }

    /**
     * Gets the 'cocorico.translator.breadcrumbs_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\BreadcrumbBundle\Translator\BreadcrumbsExtractor A Cocorico\BreadcrumbBundle\Translator\BreadcrumbsExtractor instance
     */
    protected function getCocorico_Translator_BreadcrumbsExtractorService()
    {
        return $this->services['cocorico.translator.breadcrumbs_extractor'] = new \Cocorico\BreadcrumbBundle\Translator\BreadcrumbsExtractor($this->get('cocorico.breadcrumbs_loader'), array('separator' => '', 'separatorClass' => 'separator', 'listId' => 'breadcrumbs', 'listClass' => 'breadcrumb', 'itemClass' => '', 'linkRel' => '', 'translation_domain' => 'cocorico_breadcrumbs', 'viewTemplate' => 'WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig', 'locale' => NULL));
    }

    /**
     * Gets the 'cocorico.translator.entity.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Translator\EntityExtractor A Cocorico\CoreBundle\Translator\EntityExtractor instance
     */
    protected function getCocorico_Translator_Entity_ExtractorService()
    {
        return $this->services['cocorico.translator.entity.extractor'] = new \Cocorico\CoreBundle\Translator\EntityExtractor();
    }

    /**
     * Gets the 'cocorico.translator.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Model\Manager\TranslateManager A Cocorico\CoreBundle\Model\Manager\TranslateManager instance
     */
    protected function getCocorico_Translator_ManagerService()
    {
        return $this->services['cocorico.translator.manager'] = new \Cocorico\CoreBundle\Model\Manager\TranslateManager(NULL, 'https://api.cognitive.microsoft.com/sts/v1.0/issueToken', 'http://api.microsofttranslator.com/v2/Http.svc/TranslateArray');
    }

    /**
     * Gets the 'cocorico.twig.core_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Twig\CoreExtension A Cocorico\CoreBundle\Twig\CoreExtension instance
     */
    protected function getCocorico_Twig_CoreExtensionService()
    {
        return $this->services['cocorico.twig.core_extension'] = new \Cocorico\CoreBundle\Twig\CoreExtension($this->get('lexik_currency.currency_extension'), $this->get('translator.default'), $this->get('session'), array('parameters' => array('cocorico_locales' => array(0 => 'en', 1 => 'ee'), 'cocorico_time_unit' => 60, 'cocorico_time_zone' => 'Europe/Tallinn', 'cocorico_time_unit_allday' => true, 'cocorico_time_unit_flexibility' => 0, 'cocorico_time_picker' => true, 'cocorico_time_hours_available' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15, 16 => 16, 17 => 17, 18 => 18, 19 => 19, 20 => 20, 21 => 21, 22 => 22, 23 => 23), 'cocorico_days_display_mode' => 'range', 'cocorico_times_display_mode' => 'duration', 'cocorico_currencies' => array('EUR' => '€'), 'cocorico_currency' => 'EUR', 'cocorico_fee_as_offerer' => '0.00', 'cocorico_fee_as_asker' => '0.00', 'cocorico_listing_availability_status' => 1, 'cocorico_listing_price_precision' => 2, 'cocorico_listing_price_min' => 100, 'cocorico_listing_price_max' => 100000, 'cocorico_listing_map_display_marker' => false, 'cocorico_listing_search_min_result' => 0, 'cocorico_listing_duplication' => true, 'cocorico_booking_allow_single_day' => true, 'cocorico_booking_end_day_included' => true, 'cocorico_booking_expiration_delay' => 2880, 'cocorico_booking_acceptation_delay' => 240, 'cocorico_booking_validated_moment' => 'start', 'cocorico_booking_validated_delay' => 0, 'cocorico_booking_price_min' => 500, 'cocorico_booking_min_start_delay' => 0, 'cocorico_booking_min_start_time_delay' => 720, 'cocorico_vat' => 0.2, 'cocorico_include_vat' => false, 'cocorico_display_vat' => true, 'cocorico_user_address_delivery' => true)));
    }

    /**
     * Gets the 'cocorico.twig.country_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Twig\CountryExtension A Cocorico\CoreBundle\Twig\CountryExtension instance
     */
    protected function getCocorico_Twig_CountryExtensionService()
    {
        return $this->services['cocorico.twig.country_extension'] = new \Cocorico\CoreBundle\Twig\CountryExtension();
    }

    /**
     * Gets the 'cocorico.twig.extra_bundle_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Twig\ExtraBundleExtension A Cocorico\CoreBundle\Twig\ExtraBundleExtension instance
     */
    protected function getCocorico_Twig_ExtraBundleExtensionService()
    {
        return $this->services['cocorico.twig.extra_bundle_extension'] = new \Cocorico\CoreBundle\Twig\ExtraBundleExtension(array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle', 'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle', 'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle', 'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle', 'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\JMSPaymentCoreBundle', 'JMSPaymentPaypalBundle' => 'JMS\\Payment\\PaypalBundle\\JMSPaymentPaypalBundle', 'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\LexikCurrencyBundle', 'BazingaGeocoderBundle' => 'Bazinga\\Bundle\\GeocoderBundle\\BazingaGeocoderBundle', 'DoctrineMongoDBBundle' => 'Doctrine\\Bundle\\MongoDBBundle\\DoctrineMongoDBBundle', 'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle', 'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle', 'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle', 'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle', 'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle', 'FOSMessageBundle' => 'FOS\\MessageBundle\\FOSMessageBundle', 'WhiteOctoberBreadcrumbsBundle' => 'WhiteOctober\\BreadcrumbsBundle\\WhiteOctoberBreadcrumbsBundle', 'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle', 'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle', 'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'SimpleThingsEntityAuditBundle' => 'SimpleThings\\EntityAudit\\SimpleThingsEntityAuditBundle', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\CocoricoCoreBundle', 'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\CocoricoGeoBundle', 'CocoricoUserBundle' => 'Cocorico\\UserBundle\\CocoricoUserBundle', 'CocoricoPageBundle' => 'Cocorico\\PageBundle\\CocoricoPageBundle', 'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\CocoricoCMSBundle', 'CocoricoBreadcrumbBundle' => 'Cocorico\\BreadcrumbBundle\\CocoricoBreadcrumbBundle', 'CocoricoSonataAdminBundle' => 'Cocorico\\SonataAdminBundle\\CocoricoSonataAdminBundle', 'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\CocoricoMessageBundle', 'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\CocoricoContactBundle', 'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\CocoricoReviewBundle', 'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\CocoricoConfigBundle', 'TroopersMangopayBundle' => 'Troopers\\MangopayBundle\\TroopersMangopayBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'DeployBundle' => 'Hpatoio\\DeployBundle\\DeployBundle'));
    }

    /**
     * Gets the 'cocorico.twig.language_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Twig\LanguageExtension A Cocorico\CoreBundle\Twig\LanguageExtension instance
     */
    protected function getCocorico_Twig_LanguageExtensionService()
    {
        return $this->services['cocorico.twig.language_extension'] = new \Cocorico\CoreBundle\Twig\LanguageExtension();
    }

    /**
     * Gets the 'cocorico.user_type.cookie.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CoreBundle\Listener\UserTypeCookieListener A Cocorico\CoreBundle\Listener\UserTypeCookieListener instance
     */
    protected function getCocorico_UserType_Cookie_ListenerService()
    {
        return $this->services['cocorico.user_type.cookie.listener'] = new \Cocorico\CoreBundle\Listener\UserTypeCookieListener();
    }

    /**
     * Gets the 'cocorico_cms.footer.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CMSBundle\Model\Manager\FooterManager A Cocorico\CMSBundle\Model\Manager\FooterManager instance
     */
    protected function getCocoricoCms_Footer_ManagerService()
    {
        return $this->services['cocorico_cms.footer.manager'] = new \Cocorico\CMSBundle\Model\Manager\FooterManager($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'cocorico_contact.contact.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\ContactBundle\Model\Manager\ContactManager A Cocorico\ContactBundle\Model\Manager\ContactManager instance
     */
    protected function getCocoricoContact_Contact_ManagerService()
    {
        return $this->services['cocorico_contact.contact.manager'] = new \Cocorico\ContactBundle\Model\Manager\ContactManager($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'cocorico_contact.form.handler.contact' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\ContactBundle\Form\Handler\Frontend\ContactFormHandler A Cocorico\ContactBundle\Form\Handler\Frontend\ContactFormHandler instance
     */
    protected function getCocoricoContact_Form_Handler_ContactService()
    {
        return $this->services['cocorico_contact.form.handler.contact'] = new \Cocorico\ContactBundle\Form\Handler\Frontend\ContactFormHandler($this->get('request_stack'), $this->get('cocorico_contact.contact.manager'), $this->get('cocorico_contact.mailer.twig_swift'));
    }

    /**
     * Gets the 'cocorico_contact.form.type.contact_new' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\ContactBundle\Form\Type\Frontend\ContactNewType A Cocorico\ContactBundle\Form\Type\Frontend\ContactNewType instance
     */
    protected function getCocoricoContact_Form_Type_ContactNewService()
    {
        return $this->services['cocorico_contact.form.type.contact_new'] = new \Cocorico\ContactBundle\Form\Type\Frontend\ContactNewType();
    }

    /**
     * Gets the 'cocorico_contact.mailer.twig_swift' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\ContactBundle\Mailer\TwigSwiftMailer A Cocorico\ContactBundle\Mailer\TwigSwiftMailer instance
     */
    protected function getCocoricoContact_Mailer_TwigSwiftService()
    {
        return $this->services['cocorico_contact.mailer.twig_swift'] = new \Cocorico\ContactBundle\Mailer\TwigSwiftMailer($this->get('swiftmailer.mailer.default'), $this->get('twig'), array('parameters' => array('cocorico_locale' => 'en', 'cocorico_contact_from_email' => 'no-reply@koduteenus.online', 'cocorico_contact_contact_email' => 'contact@koduteenus.online')), array('templates' => array('contact_message' => 'CocoricoContactBundle:Mails:contact_message.txt.twig')));
    }

    /**
     * Gets the 'cocorico_geo.form.type.geocoding' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\GeoBundle\Form\Type\GeocodingToCoordinateType A Cocorico\GeoBundle\Form\Type\GeocodingToCoordinateType instance
     */
    protected function getCocoricoGeo_Form_Type_GeocodingService()
    {
        return $this->services['cocorico_geo.form.type.geocoding'] = new \Cocorico\GeoBundle\Form\Type\GeocodingToCoordinateType($this->get('doctrine.orm.default_entity_manager'), array(0 => 'en', 1 => 'ee'), $this->get('request_stack'), 'AIzaSyAar48C5lX4pnXGtHf8DLXLJ7f_-bCjay0');
    }

    /**
     * Gets the 'cocorico_geo.geocoding.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\GeoBundle\Model\Manager\GeocodingManager A Cocorico\GeoBundle\Model\Manager\GeocodingManager instance
     */
    protected function getCocoricoGeo_Geocoding_ManagerService()
    {
        return $this->services['cocorico_geo.geocoding.manager'] = new \Cocorico\GeoBundle\Model\Manager\GeocodingManager($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'cocorico_geo.twig.cocorico_geo_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\GeoBundle\Twig\GeoExtension A Cocorico\GeoBundle\Twig\GeoExtension instance
     */
    protected function getCocoricoGeo_Twig_CocoricoGeoExtensionService()
    {
        return $this->services['cocorico_geo.twig.cocorico_geo_extension'] = new \Cocorico\GeoBundle\Twig\GeoExtension('AIzaSyAar48C5lX4pnXGtHf8DLXLJ7f_-bCjay0', NULL);
    }

    /**
     * Gets the 'cocorico_message.booking.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\MessageBundle\Event\BookingSubscriber A Cocorico\MessageBundle\Event\BookingSubscriber instance
     */
    protected function getCocoricoMessage_Booking_SubscriberService()
    {
        return $this->services['cocorico_message.booking.subscriber'] = new \Cocorico\MessageBundle\Event\BookingSubscriber($this->get('cocorico_message.thread_manager'));
    }

    /**
     * Gets the 'cocorico_message.new_thread.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\MessageBundle\Form\Type\Frontend\NewThreadMessageFormType A Cocorico\MessageBundle\Form\Type\Frontend\NewThreadMessageFormType instance
     */
    protected function getCocoricoMessage_NewThread_Form_TypeService()
    {
        return $this->services['cocorico_message.new_thread.form.type'] = new \Cocorico\MessageBundle\Form\Type\Frontend\NewThreadMessageFormType('Cocorico\\MessageBundle\\Entity\\Thread');
    }

    /**
     * Gets the 'cocorico_message.reply.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\MessageBundle\Form\Type\Frontend\ReplyMessageFormType A Cocorico\MessageBundle\Form\Type\Frontend\ReplyMessageFormType instance
     */
    protected function getCocoricoMessage_Reply_Form_TypeService()
    {
        return $this->services['cocorico_message.reply.form.type'] = new \Cocorico\MessageBundle\Form\Type\Frontend\ReplyMessageFormType('Cocorico\\MessageBundle\\Entity\\Thread');
    }

    /**
     * Gets the 'cocorico_message.thread_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\MessageBundle\Model\ThreadManager A Cocorico\MessageBundle\Model\ThreadManager instance
     */
    protected function getCocoricoMessage_ThreadManagerService()
    {
        return $this->services['cocorico_message.thread_manager'] = new \Cocorico\MessageBundle\Model\ThreadManager($this->get('fos_message.thread_manager'), $this->get('fos_message.message_manager'), 10, $this->get('cocorico_user.mailer.twig_swift'));
    }

    /**
     * Gets the 'cocorico_user.booking.form.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Event\BookingFormSubscriber A Cocorico\UserBundle\Event\BookingFormSubscriber instance
     */
    protected function getCocoricoUser_Booking_Form_SubscriberService()
    {
        return $this->services['cocorico_user.booking.form.subscriber'] = new \Cocorico\UserBundle\Event\BookingFormSubscriber($this->get('security.token_storage'), $this->get('security.authorization_checker'), $this->get('cocorico_user.login_manager'));
    }

    /**
     * Gets the 'cocorico_user.form.handler.bank_account' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Form\Handler\BankAccountFormHandler A Cocorico\UserBundle\Form\Handler\BankAccountFormHandler instance
     */
    protected function getCocoricoUser_Form_Handler_BankAccountService()
    {
        return $this->services['cocorico_user.form.handler.bank_account'] = new \Cocorico\UserBundle\Form\Handler\BankAccountFormHandler($this->get('request_stack'), $this->get('cocorico_user.user_manager'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'cocorico_user.form.handler.contact' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Form\Handler\ContactFormHandler A Cocorico\UserBundle\Form\Handler\ContactFormHandler instance
     */
    protected function getCocoricoUser_Form_Handler_ContactService()
    {
        return $this->services['cocorico_user.form.handler.contact'] = new \Cocorico\UserBundle\Form\Handler\ContactFormHandler($this->get('request_stack'), $this->get('cocorico_user.user_manager'), $this->get('debug.event_dispatcher'), true);
    }

    /**
     * Gets the 'cocorico_user.form.type.user_address' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Form\Type\UserAddressFormType A Cocorico\UserBundle\Form\Type\UserAddressFormType instance
     */
    protected function getCocoricoUser_Form_Type_UserAddressService()
    {
        return $this->services['cocorico_user.form.type.user_address'] = new \Cocorico\UserBundle\Form\Type\UserAddressFormType();
    }

    /**
     * Gets the 'cocorico_user.listing_image_upload_validation_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Listener\UserImageUploadValidationListener A Cocorico\UserBundle\Listener\UserImageUploadValidationListener instance
     */
    protected function getCocoricoUser_ListingImageUploadValidationListenerService()
    {
        return $this->services['cocorico_user.listing_image_upload_validation_listener'] = new \Cocorico\UserBundle\Listener\UserImageUploadValidationListener(12);
    }

    /**
     * Gets the 'cocorico_user.login.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Form\Type\LoginFormType A Cocorico\UserBundle\Form\Type\LoginFormType instance
     */
    protected function getCocoricoUser_Login_Form_TypeService()
    {
        return $this->services['cocorico_user.login.form.type'] = new \Cocorico\UserBundle\Form\Type\LoginFormType();
    }

    /**
     * Gets the 'cocorico_user.login_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Security\LoginManager A Cocorico\UserBundle\Security\LoginManager instance
     */
    protected function getCocoricoUser_LoginManagerService()
    {
        return $this->services['cocorico_user.login_manager'] = new \Cocorico\UserBundle\Security\LoginManager($this->get('cocorico_user.user_manager'), $this->get('fos_user.security.login_manager'), $this->get('security.encoder_factory'), 'main');
    }

    /**
     * Gets the 'cocorico_user.mailer.twig_swift' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Mailer\TwigSwiftMailer A Cocorico\UserBundle\Mailer\TwigSwiftMailer instance
     */
    protected function getCocoricoUser_Mailer_TwigSwiftService()
    {
        return $this->services['cocorico_user.mailer.twig_swift'] = new \Cocorico\UserBundle\Mailer\TwigSwiftMailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('twig'), $this->get('request_stack'), array('templates' => array('account_created_user' => 'CocoricoUserBundle:Mails/User:account_created_user.txt.twig', 'forgot_password_user' => 'CocoricoUserBundle:Mails/User:forgot_password_user.txt.twig', 'new_message_user' => 'CocoricoUserBundle:Mails/User:new_message_user.txt.twig', 'account_creation_confirmation_user' => 'CocoricoUserBundle:Mails/User:account_creation_confirmation_user.txt.twig'), 'from_email' => 'no-reply@koduteenus.online', 'site_name' => 'KoduTeenus', 'locales' => array(0 => 'en', 1 => 'ee'), 'locale' => 'en'));
    }

    /**
     * Gets the 'cocorico_user.namer.image_namer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Namer\ImageNamer A Cocorico\UserBundle\Namer\ImageNamer instance
     */
    protected function getCocoricoUser_Namer_ImageNamerService()
    {
        return $this->services['cocorico_user.namer.image_namer'] = new \Cocorico\UserBundle\Namer\ImageNamer();
    }

    /**
     * Gets the 'cocorico_user.oauth.user.provider.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Security\OAuthUserProvider A Cocorico\UserBundle\Security\OAuthUserProvider instance
     */
    protected function getCocoricoUser_Oauth_User_Provider_EntityService()
    {
        return $this->services['cocorico_user.oauth.user.provider.entity'] = new \Cocorico\UserBundle\Security\OAuthUserProvider($this->get('cocorico_user.user_manager'));
    }

    /**
     * Gets the 'cocorico_user.profile_about_me.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Form\Type\ProfileAboutMeFormType A Cocorico\UserBundle\Form\Type\ProfileAboutMeFormType instance
     */
    protected function getCocoricoUser_ProfileAboutMe_Form_TypeService()
    {
        return $this->services['cocorico_user.profile_about_me.form.type'] = new \Cocorico\UserBundle\Form\Type\ProfileAboutMeFormType('Cocorico\\UserBundle\\Entity\\User', $this->get('request_stack'), array(0 => 'en', 1 => 'ee'));
    }

    /**
     * Gets the 'cocorico_user.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Event\UserSubscriber A Cocorico\UserBundle\Event\UserSubscriber instance
     */
    protected function getCocoricoUser_SubscriberService()
    {
        return $this->services['cocorico_user.subscriber'] = new \Cocorico\UserBundle\Event\UserSubscriber();
    }

    /**
     * Gets the 'cocorico_user.user.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Listener\UserEntityListener A Cocorico\UserBundle\Listener\UserEntityListener instance
     */
    protected function getCocoricoUser_User_ListenerService()
    {
        return $this->services['cocorico_user.user.listener'] = new \Cocorico\UserBundle\Listener\UserEntityListener($this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'cocorico_user.user.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Validator\Constraints\UserValidator A Cocorico\UserBundle\Validator\Constraints\UserValidator instance
     */
    protected function getCocoricoUser_User_ValidatorService()
    {
        return $this->services['cocorico_user.user.validator'] = new \Cocorico\UserBundle\Validator\Constraints\UserValidator(6, 1);
    }

    /**
     * Gets the 'cocorico_user.user_image_upload_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Listener\UserImageUploadListener A Cocorico\UserBundle\Listener\UserImageUploadListener instance
     */
    protected function getCocoricoUser_UserImageUploadListenerService()
    {
        return $this->services['cocorico_user.user_image_upload_listener'] = new \Cocorico\UserBundle\Listener\UserImageUploadListener($this->get('cocorico_user.user_manager'));
    }

    /**
     * Gets the 'cocorico_user.user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Model\UserManager A Cocorico\UserBundle\Model\UserManager instance
     */
    protected function getCocoricoUser_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['cocorico_user.user_manager'] = new \Cocorico\UserBundle\Model\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('fos_user.entity_manager'), 'Cocorico\\UserBundle\\Entity\\User', $this->targetDirs[2], $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array(0 => new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker(), 1 => new \Symfony\Component\Config\Resource\BCResourceInterfaceChecker()));
    }

    /**
     * Gets the 'data_collector.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector A Symfony\Component\Form\Extension\DataCollector\FormDataCollector instance
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'));
    }

    /**
     * Gets the 'data_collector.form.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor A Symfony\Component\Form\Extension\DataCollector\FormDataExtractor instance
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'data_collector.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector A Symfony\Component\Translation\DataCollector\TranslationDataCollector instance
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($this->get('translator'));
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver($this->get('jms_di_extra.controller_resolver'), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), -4182, NULL, true, NULL);
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('oneup_uploader.post_upload', array(0 => 'cocorico.listing_image_upload_listener', 1 => 'onUpload'), 0);
        $instance->addListenerService('oneup_uploader.validation', array(0 => 'cocorico.listing_image_upload_validation_listener', 1 => 'onValidate'), 0);
        $instance->addListenerService('kernel.exception', array(0 => 'cocorico.ajax.authentication_listener', 1 => 'onCoreException'), 1000);
        $instance->addListenerService('kernel.request', array(0 => 'cocorico.user_type.cookie.listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('security.interactive_login', array(0 => 'fos_user.security.interactive_login_listener', 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListenerService('kernel.exception', array(0 => 'jms_i18n_routing.locale_choosing_listener', 1 => 'onKernelException'), 128);
        $instance->addListenerService('kernel.response', array(0 => 'jms_i18n_routing.cookie_setting_listener', 1 => 'onKernelResponse'), 256);
        $instance->addListenerService('oneup_uploader.validation', array(0 => 'oneup_uploader.validation_listener.max_size', 1 => 'onValidate'), 0);
        $instance->addListenerService('oneup_uploader.validation', array(0 => 'oneup_uploader.validation_listener.allowed_mimetype', 1 => 'onValidate'), 0);
        $instance->addListenerService('oneup_uploader.validation', array(0 => 'oneup_uploader.validation_listener.disallowed_mimetype', 1 => 'onValidate'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'sonata.block.cache.handler.default', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'knp_menu.listener.voters', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('oneup_uploader.post_upload', array(0 => 'cocorico_user.user_image_upload_listener', 1 => 'onUpload'), 0);
        $instance->addListenerService('oneup_uploader.validation', array(0 => 'cocorico_user.listing_image_upload_validation_listener', 1 => 'onValidate'), 0);
        $instance->addSubscriberService('cocorico.booking_payin_refund.subscriber', 'Cocorico\\CoreBundle\\Event\\BookingPayinRefundSubscriber');
        $instance->addSubscriberService('cocorico.booking_validate.subscriber', 'Cocorico\\CoreBundle\\Event\\BookingValidateSubscriber');
        $instance->addSubscriberService('cocorico.booking_bank_wire.subscriber', 'Cocorico\\CoreBundle\\Event\\BookingBankWireSubscriber');
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('lexik_currency.subscriber.locale', 'Lexik\\Bundle\\CurrencyBundle\\EventListener\\LocaleListener');
        $instance->addSubscriberService('cocorico_user.subscriber', 'Cocorico\\UserBundle\\Event\\UserSubscriber');
        $instance->addSubscriberService('cocorico_user.booking.form.subscriber', 'Cocorico\\UserBundle\\Event\\BookingFormSubscriber');
        $instance->addSubscriberService('cocorico_message.booking.subscriber', 'Cocorico\\MessageBundle\\Event\\BookingSubscriber');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array('extended_payment_data' => array('class' => 'JMS\\Payment\\CoreBundle\\Entity\\ExtendedDataType', 'commented' => true), 'json' => array('class' => 'Sonata\\Doctrine\\Types\\JsonType', 'commented' => true)));
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $a->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Gedmo\Tree\TreeListener();
        $c->setAnnotationReader($this->get('annotation_reader'));

        $d = new \Knp\DoctrineBehaviors\Reflection\ClassAnalyzer();

        $e = new \Cocorico\CoreBundle\Listener\ResolveTargetEntityListener();
        $e->addResolveTargetEntity('Cocorico\\CoreBundle\\Model\\ListingOptionInterface', 'Cocorico\\ListingOptionBundle\\Entity\\ListingOption', array());
        $e->addResolveTargetEntity('Cocorico\\CoreBundle\\Model\\BookingOptionInterface', 'Cocorico\\ListingOptionBundle\\Entity\\BookingOption', array());
        $e->addResolveTargetEntity('Cocorico\\CoreBundle\\Model\\ListingCategoryFieldInterface', 'none', array());
        $e->addResolveTargetEntity('Cocorico\\CoreBundle\\Model\\ListingCategoryFieldValueInterface', 'none', array());
        $e->addResolveTargetEntity('Cocorico\\CoreBundle\\Model\\ListingCategoryListingCategoryFieldInterface', 'none', array());
        $e->addResolveTargetEntity('Cocorico\\UserBundle\\Model\\ListingAlertInterface', 'none', array());

        $f = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $f->addEventSubscriber($this->get('sonata.easy_extends.doctrine.mapper'));
        $f->addEventSubscriber($this->get('simplethings_entityaudit.log_revisions_listener'));
        $f->addEventSubscriber(new \FOS\UserBundle\Entity\UserListener($this));
        $f->addEventSubscriber($c);
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Sluggable\SluggableSubscriber($d, true, 'Knp\\DoctrineBehaviors\\Model\\Sluggable\\Sluggable'));
        $f->addEventSubscriber($e);
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Loggable\LoggableSubscriber($d, true, new \Knp\DoctrineBehaviors\ORM\Loggable\LoggerCallable($this->get('logger'))));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Translatable\TranslatableSubscriber($d, true, new \Knp\DoctrineBehaviors\ORM\Translatable\CurrentLocaleCallable($this), new \Knp\DoctrineBehaviors\ORM\Translatable\DefaultLocaleCallable('en'), 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translatable', 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translation', 'EAGER', 'EAGER'));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Sortable\SortableSubscriber($d, true, 'Knp\\DoctrineBehaviors\\Model\\Sortable\\Sortable'));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Blameable\BlameableSubscriber($d, true, 'Knp\\DoctrineBehaviors\\Model\\Blameable\\Blameable', new \Knp\DoctrineBehaviors\ORM\Blameable\UserCallable($this), NULL));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Tree\TreeSubscriber($d, true, 'Knp\\DoctrineBehaviors\\Model\\Tree\\Node'));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Timestampable\TimestampableSubscriber($d, true, 'Knp\\DoctrineBehaviors\\Model\\Timestampable\\Timestampable', 'datetime'));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\SoftDeletable\SoftDeletableSubscriber($d, true, 'Knp\\DoctrineBehaviors\\Model\\SoftDeletable\\SoftDeletable'));
        $f->addEventSubscriber($this->get('simplethings_entityaudit.create_schema_listener'));
        $f->addEventSubscriber(new \Knp\DoctrineBehaviors\ORM\Geocodable\GeocodableSubscriber($d, true, 'Knp\\DoctrineBehaviors\\Model\\Geocodable\\Geocodable', NULL));
        $f->addEventSubscriber($this->get('cocorico_user.user.listener'));
        $f->addEventSubscriber($this->get('cocorico.booking_user_address_entity_listener'));
        $f->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'cocorico', 'user' => 'cocorico', 'password' => 'cocorico', 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $b, $f, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultEntityListenerResolver A Doctrine\ORM\Mapping\DefaultEntityListenerResolver instance
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        $a = $this->get('cocorico.review.listener');

        $this->services['doctrine.orm.default_entity_listener_resolver'] = $instance = new \Doctrine\ORM\Mapping\DefaultEntityListenerResolver();

        $instance->register($a);
        $instance->register($a);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \EntityManager5ba1b8403ebe4_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager A EntityManager5ba1b8403ebe4_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager instance
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        require_once (__DIR__.'/jms_diextra/doctrine/EntityManager_5ba1b8403ebe4.php');

        $a = $this->get('annotation_reader');

        $b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => '/cocorico/vendor/gedmo/doctrine-extensions/lib/Gedmo/Tree/Entity', 1 => '/cocorico/src/Cocorico/CoreBundle/Entity', 2 => '/cocorico/src/Cocorico/GeoBundle/Entity', 3 => '/cocorico/src/Cocorico/UserBundle/Entity', 4 => '/cocorico/src/Cocorico/PageBundle/Entity', 5 => '/cocorico/src/Cocorico/CMSBundle/Entity', 6 => '/cocorico/src/Cocorico/MessageBundle/Entity', 7 => '/cocorico/src/Cocorico/ContactBundle/Entity', 8 => '/cocorico/src/Cocorico/ReviewBundle/Entity', 9 => '/cocorico/src/Cocorico/ConfigBundle/Entity', 10 => '/cocorico/vendor/troopers/mangopay-bundle/Troopers/MangopayBundle/Entity'));

        $c = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array('/cocorico/vendor/sonata-project/user-bundle/Resources/config/doctrine' => 'Sonata\\UserBundle\\Entity', '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/doctrine' => 'FOS\\UserBundle\\Entity', '/cocorico/vendor/jms/payment-core-bundle/JMS/Payment/CoreBundle/Resources/config/doctrine' => 'JMS\\Payment\\CoreBundle\\Entity', '/cocorico/vendor/lexik/currency-bundle/Resources/config/doctrine' => 'Lexik\\Bundle\\CurrencyBundle\\Entity', '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/config/doctrine' => 'FOS\\MessageBundle\\Entity'));
        $c->setGlobalBasename('mapping');

        $d = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $d->addDriver($b, 'Gedmo\\Tree\\Entity');
        $d->addDriver($b, 'Cocorico\\CoreBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\GeoBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\UserBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\PageBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\CMSBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\MessageBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\ContactBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\ReviewBundle\\Entity');
        $d->addDriver($b, 'Cocorico\\ConfigBundle\\Entity');
        $d->addDriver($b, 'Troopers\\MangopayBundle\\Entity');
        $d->addDriver($c, 'Sonata\\UserBundle\\Entity');
        $d->addDriver($c, 'FOS\\UserBundle\\Entity');
        $d->addDriver($c, 'JMS\\Payment\\CoreBundle\\Entity');
        $d->addDriver($c, 'Lexik\\Bundle\\CurrencyBundle\\Entity');
        $d->addDriver($c, 'FOS\\MessageBundle\\Entity');

        $e = new \Doctrine\ORM\Configuration();
        $e->setEntityNamespaces(array('GedmoTree' => 'Gedmo\\Tree\\Entity', 'SonataUserBundle' => 'Sonata\\UserBundle\\Entity', 'FOSUserBundle' => 'FOS\\UserBundle\\Entity', 'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\Entity', 'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\Entity', 'FOSMessageBundle' => 'FOS\\MessageBundle\\Entity', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\Entity', 'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\Entity', 'CocoricoUserBundle' => 'Cocorico\\UserBundle\\Entity', 'CocoricoPageBundle' => 'Cocorico\\PageBundle\\Entity', 'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\Entity', 'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\Entity', 'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\Entity', 'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\Entity', 'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\Entity', 'TroopersMangopayBundle' => 'Troopers\\MangopayBundle\\Entity'));
        $e->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $e->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $e->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $e->setMetadataDriverImpl($d);
        $e->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $e->setProxyNamespace('Proxies');
        $e->setAutoGenerateProxyClasses(true);
        $e->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $e->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $e->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $e->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $e->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));
        $e->addCustomStringFunction('CAST', 'Cocorico\\CoreBundle\\DQL\\CastFunction');
        $e->addCustomNumericFunction('GEO_DISTANCE', 'Cocorico\\CoreBundle\\DQL\\GeoDistanceFunction');
        $e->addCustomDatetimeFunction('DATE_FORMAT', 'Cocorico\\CoreBundle\\DQL\\DateFormatFunction');
        $e->addCustomDatetimeFunction('TIME_DIFF', 'Cocorico\\CoreBundle\\DQL\\TimeDiffFunction');
        $e->addCustomDatetimeFunction('TIMESTAMP_DIFF', 'Cocorico\\CoreBundle\\DQL\\TimestampDiffFunction');

        $f = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $e);
        $this->get('doctrine.orm.default_manager_configurator')->configure($f);

        return $this->services['doctrine.orm.default_entity_manager'] = new \EntityManager5ba1b8403ebe4_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager($f, $this);
    }

    /**
     * Gets the 'doctrine.orm.default_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_fcc75563023bdafb9ee50fa24adfc5ef97f2f2e5fe3512572489baa9a5316ccc');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_fcc75563023bdafb9ee50fa24adfc5ef97f2f2e5fe3512572489baa9a5316ccc');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_fcc75563023bdafb9ee50fa24adfc5ef97f2f2e5fe3512572489baa9a5316ccc');

        return $instance;
    }

    /**
     * Gets the 'doctrine_mongodb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\ManagerRegistry A Doctrine\Bundle\MongoDBBundle\ManagerRegistry instance
     */
    protected function getDoctrineMongodbService()
    {
        $this->services['doctrine_mongodb'] = $instance = new \Doctrine\Bundle\MongoDBBundle\ManagerRegistry('MongoDB', array('default' => 'doctrine_mongodb.odm.default_connection'), array('default' => 'doctrine_mongodb.odm.default_document_manager'), 'default', 'default', 'Doctrine\\ODM\\MongoDB\\Proxy\\Proxy');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'doctrine_mongodb.odm.cache.array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineMongodb_Odm_Cache_ArrayService()
    {
        return $this->services['doctrine_mongodb.odm.cache.array'] = new \Doctrine\Common\Cache\ArrayCache();
    }

    /**
     * Gets the 'doctrine_mongodb.odm.default_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ODM\MongoDB\Configuration A Doctrine\ODM\MongoDB\Configuration instance
     */
    protected function getDoctrineMongodb_Odm_DefaultConfigurationService()
    {
        $a = new \Doctrine\Common\Cache\ArrayCache();
        $a->setNamespace('sf2mongodb_default_fcc75563023bdafb9ee50fa24adfc5ef97f2f2e5fe3512572489baa9a5316ccc');

        $b = new \Doctrine\Bundle\MongoDBBundle\Mapping\Driver\XmlDriver(array('/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/doctrine' => 'FOS\\UserBundle\\Document', '/cocorico/vendor/sonata-project/user-bundle/Resources/config/doctrine' => 'Sonata\\UserBundle\\Document', '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/config/doctrine' => 'FOS\\MessageBundle\\Document'));
        $b->setGlobalBasename('mapping');

        $c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver($b, 'FOS\\UserBundle\\Document');
        $c->addDriver($b, 'Sonata\\UserBundle\\Document');
        $c->addDriver($b, 'FOS\\MessageBundle\\Document');
        $c->addDriver(new \Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array(0 => '/cocorico/src/Cocorico/CoreBundle/Document')), 'Cocorico\\CoreBundle\\Document');

        $d = new \Doctrine\Bundle\MongoDBBundle\Logger\Logger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $d->setBatchInsertThreshold(4);

        $this->services['doctrine_mongodb.odm.default_configuration'] = $instance = new \Doctrine\ODM\MongoDB\Configuration();

        $instance->setDocumentNamespaces(array('FOSUserBundle' => 'FOS\\UserBundle\\Document', 'SonataUserBundle' => 'Sonata\\UserBundle\\Document', 'FOSMessageBundle' => 'FOS\\MessageBundle\\Document', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\Document'));
        $instance->setMetadataCacheImpl($a);
        $instance->setMetadataDriverImpl($c);
        $instance->setProxyDir((__DIR__.'/doctrine/odm/mongodb/Proxies'));
        $instance->setProxyNamespace('MongoDBODMProxies');
        $instance->setAutoGenerateProxyClasses(false);
        $instance->setHydratorDir((__DIR__.'/doctrine/odm/mongodb/Hydrators'));
        $instance->setHydratorNamespace('Hydrators');
        $instance->setAutoGenerateHydratorClasses(false);
        $instance->setDefaultDB('cocorico');
        $instance->setDefaultCommitOptions(array());
        $instance->setRetryConnect(0);
        $instance->setRetryQuery(0);
        $instance->setLoggerCallable(array(0 => new \Doctrine\Bundle\MongoDBBundle\Logger\AggregateLogger(array(0 => $d, 1 => $this->get('doctrine_mongodb.odm.data_collector.pretty'))), 1 => 'logQuery'));

        return $instance;
    }

    /**
     * Gets the 'doctrine_mongodb.odm.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\MongoDB\Connection A Doctrine\MongoDB\Connection instance
     */
    protected function getDoctrineMongodb_Odm_DefaultConnectionService()
    {
        return $this->services['doctrine_mongodb.odm.default_connection'] = new \Doctrine\MongoDB\Connection('mongodb://127.0.0.1:27017', array(), $this->get('doctrine_mongodb.odm.default_configuration'), $this->get('doctrine_mongodb.odm.event_manager'));
    }

    /**
     * Gets the 'doctrine_mongodb.odm.default_document_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ODM\MongoDB\DocumentManager A Doctrine\ODM\MongoDB\DocumentManager instance
     */
    protected function getDoctrineMongodb_Odm_DefaultDocumentManagerService()
    {
        $this->services['doctrine_mongodb.odm.default_document_manager'] = $instance = \Doctrine\ODM\MongoDB\DocumentManager::create($this->get('doctrine_mongodb.odm.default_connection'), $this->get('doctrine_mongodb.odm.default_configuration'), $this->get('doctrine_mongodb.odm.event_manager'));

        $this->get('doctrine_mongodb.odm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine_mongodb.odm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\ManagerConfigurator A Doctrine\Bundle\MongoDBBundle\ManagerConfigurator instance
     */
    protected function getDoctrineMongodb_Odm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine_mongodb.odm.default_manager_configurator'] = new \Doctrine\Bundle\MongoDBBundle\ManagerConfigurator(array());
    }

    /**
     * Gets the 'doctrine_mongodb.odm.event_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\ContainerAwareEventManager A Symfony\Bridge\Doctrine\ContainerAwareEventManager instance
     */
    protected function getDoctrineMongodb_Odm_EventManagerService()
    {
        return $this->services['doctrine_mongodb.odm.event_manager'] = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
    }

    /**
     * Gets the 'doctrine_mongodb.odm.metadata.annotation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver A Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver instance
     */
    protected function getDoctrineMongodb_Odm_Metadata_AnnotationService()
    {
        return $this->services['doctrine_mongodb.odm.metadata.annotation'] = new \Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array());
    }

    /**
     * Gets the 'doctrine_mongodb.odm.metadata.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain A Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain instance
     */
    protected function getDoctrineMongodb_Odm_Metadata_ChainService()
    {
        return $this->services['doctrine_mongodb.odm.metadata.chain'] = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
    }

    /**
     * Gets the 'doctrine_mongodb.odm.metadata.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Mapping\Driver\XmlDriver A Doctrine\Bundle\MongoDBBundle\Mapping\Driver\XmlDriver instance
     */
    protected function getDoctrineMongodb_Odm_Metadata_XmlService()
    {
        return $this->services['doctrine_mongodb.odm.metadata.xml'] = new \Doctrine\Bundle\MongoDBBundle\Mapping\Driver\XmlDriver(array());
    }

    /**
     * Gets the 'doctrine_mongodb.odm.metadata.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Mapping\Driver\YamlDriver A Doctrine\Bundle\MongoDBBundle\Mapping\Driver\YamlDriver instance
     */
    protected function getDoctrineMongodb_Odm_Metadata_YmlService()
    {
        return $this->services['doctrine_mongodb.odm.metadata.yml'] = new \Doctrine\Bundle\MongoDBBundle\Mapping\Driver\YamlDriver(array());
    }

    /**
     * Gets the 'doctrine_odm.mongodb.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance
     */
    protected function getDoctrineOdm_Mongodb_Validator_UniqueService()
    {
        return $this->services['doctrine_odm.mongodb.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine_mongodb'));
    }

    /**
     * Gets the 'doctrine_odm.mongodb.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance
     */
    protected function getDoctrineOdm_Mongodb_ValidatorInitializerService()
    {
        return $this->services['doctrine_odm.mongodb.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine_mongodb'));
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'fm_elfinder.configurator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FM\ElfinderBundle\Configuration\ElFinderConfigurationReader A FM\ElfinderBundle\Configuration\ElFinderConfigurationReader instance
     */
    protected function getFmElfinder_Configurator_DefaultService()
    {
        return $this->services['fm_elfinder.configurator.default'] = new \FM\ElfinderBundle\Configuration\ElFinderConfigurationReader(array('instances' => array('ckeditor' => array('locale' => 'en', 'editor' => 'ckeditor', 'fullscreen' => true, 'theme' => 'smoothness', 'include_assets' => true, 'connector' => array('debug' => false, 'roots' => array('uploads' => array('show_hidden' => false, 'driver' => 'LocalFileSystem', 'path' => 'uploads', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'application/pdf', 4 => 'image/gif'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '12M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '/', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/', 'visible_mime_types' => array())), 'configuration_provider' => 'fm_elfinder.configurator.default', 'assets_path' => '/assets', 'loader' => 'fm_elfinder.loader.default'), $this->get('request_stack'), $this);
    }

    /**
     * Gets the 'fm_elfinder.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FM\ElfinderBundle\Form\Type\ElFinderType A FM\ElfinderBundle\Form\Type\ElFinderType instance
     */
    protected function getFmElfinder_Form_TypeService()
    {
        return $this->services['fm_elfinder.form.type'] = new \FM\ElfinderBundle\Form\Type\ElFinderType();
    }

    /**
     * Gets the 'fm_elfinder.loader.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FM\ElfinderBundle\Loader\ElFinderLoader A FM\ElfinderBundle\Loader\ElFinderLoader instance
     */
    protected function getFmElfinder_Loader_DefaultService()
    {
        return $this->services['fm_elfinder.loader.default'] = new \FM\ElfinderBundle\Loader\ElFinderLoader($this->get('fm_elfinder.configurator.default'));
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter A Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter instance
     *
     * @deprecated The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.
     */
    protected function getForm_CsrfProviderService()
    {
        @trigger_error('The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.', E_USER_DEPRECATED);

        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /**
     * Gets the 'form.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Extension\DependencyInjectionExtension A Sonata\CoreBundle\Form\Extension\DependencyInjectionExtension instance
     */
    protected function getForm_ExtensionService()
    {
        return $this->services['form.extension'] = new \Sonata\CoreBundle\Form\Extension\DependencyInjectionExtension($this, array('listing_new' => 'cocorico.form.type.listing_new', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\ListingNewType' => 'cocorico.form.type.listing_new', 'listing_edit' => 'cocorico.form.type.listing_edit', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditType' => 'cocorico.form.type.listing_edit', 'listing_edit_status' => 'cocorico.form.type.listing_edit_status', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditStatusType' => 'cocorico.form.type.listing_edit_status', 'listing_edit_description' => 'cocorico.form.type.listing_edit_description', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditDescriptionType' => 'cocorico.form.type.listing_edit_description', 'listing_edit_price' => 'cocorico.form.type.listing_edit_price', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditPriceType' => 'cocorico.form.type.listing_edit_price', 'listing_edit_images' => 'cocorico.form.type.listing_edit_images', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditImagesType' => 'cocorico.form.type.listing_edit_images', 'listing_edit_location' => 'cocorico.form.type.listing_edit_location', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditLocationType' => 'cocorico.form.type.listing_edit_location', 'listing_edit_characteristic' => 'cocorico.form.type.listing_edit_characteristic', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditCharacteristicType' => 'cocorico.form.type.listing_edit_characteristic', 'listing_edit_availabilities' => 'cocorico.form.type.listing_edit_availabilities', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditAvailabilitiesType' => 'cocorico.form.type.listing_edit_availabilities', 'listing_edit_availabilities_status' => 'cocorico.form.type.listing_edit_availabilities_status', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditAvailabilitiesStatusType' => 'cocorico.form.type.listing_edit_availabilities_status', 'listing_edit_availabilities_prices' => 'cocorico.form.type.listing_edit_availabilities_prices', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditAvailabilitiesPricesType' => 'cocorico.form.type.listing_edit_availabilities_prices', 'listing_edit_availability_price' => 'cocorico.form.type.listing_edit_availability_price', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditAvailabilityPriceType' => 'cocorico.form.type.listing_edit_availability_price', 'listing_new_categories' => 'cocorico.form.type.listing_new_categories', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\ListingNewCategoriesType' => 'cocorico.form.type.listing_new_categories', 'listing_edit_categories' => 'cocorico.form.type.listing_edit_categories', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditCategoriesType' => 'cocorico.form.type.listing_edit_categories', 'listing_edit_categories_ajax' => 'cocorico.form.type.listing_edit_categories_ajax', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditCategoriesAjaxType' => 'cocorico.form.type.listing_edit_categories_ajax', 'country_filtered' => 'cocorico.form.type.country_filtered', 'Cocorico\\CoreBundle\\Form\\Type\\CountryFilteredType' => 'cocorico.form.type.country_filtered', 'language_filtered' => 'cocorico.form.type.language_filtered', 'Cocorico\\CoreBundle\\Form\\Type\\LanguageFilteredType' => 'cocorico.form.type.language_filtered', 'price' => 'cocorico.form.type.price', 'Cocorico\\CoreBundle\\Form\\Type\\PriceType' => 'cocorico.form.type.price', 'entity_hidden' => 'cocorico.form.type.entity_hidden', 'Cocorico\\CoreBundle\\Form\\Type\\EntityHiddenType' => 'cocorico.form.type.entity_hidden', 'listing_category' => 'cocorico.form.type.listing_category', 'Cocorico\\CoreBundle\\Form\\Type\\ListingCategoryType' => 'cocorico.form.type.listing_category', 'listing_search_result' => 'cocorico.form.type.listing_search_result', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\ListingSearchResultType' => 'cocorico.form.type.listing_search_result', 'listing_search' => 'cocorico.form.type.listing_search', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\ListingSearchType' => 'cocorico.form.type.listing_search', 'listing_search_home' => 'cocorico.form.type.listing_search_home', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\ListingSearchHomeType' => 'cocorico.form.type.listing_search_home', 'listing_characteristic' => 'cocorico.form.type.listing_characteristic', 'Cocorico\\CoreBundle\\Form\\Type\\ListingCharacteristicType' => 'cocorico.form.type.listing_characteristic', 'date_range' => 'cocorico.form.type.date_range', 'Cocorico\\CoreBundle\\Form\\Type\\DateRangeType' => 'cocorico.form.type.date_range', 'date_hidden' => 'cocorico.form.type.date_hidden', 'Cocorico\\CoreBundle\\Form\\Type\\DateHiddenType' => 'cocorico.form.type.date_hidden', 'time_range' => 'cocorico.form.type.time_range', 'Cocorico\\CoreBundle\\Form\\Type\\TimeRangeType' => 'cocorico.form.type.time_range', 'listing_edit_duration' => 'cocorico.form.type.listing_edit_duration', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\ListingEditDurationType' => 'cocorico.form.type.listing_edit_duration', 'booking_new' => 'cocorico.form.type.booking_new', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\BookingNewType' => 'cocorico.form.type.booking_new', 'booking_edit' => 'cocorico.form.type.booking_edit', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\BookingEditType' => 'cocorico.form.type.booking_edit', 'booking_price' => 'cocorico.form.type.booking_price', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\BookingPriceType' => 'cocorico.form.type.booking_price', 'booking_user_address' => 'cocorico.form.type.booking_user_address', 'Cocorico\\CoreBundle\\Form\\Type\\Frontend\\BookingUserAddressFormType' => 'cocorico.form.type.booking_user_address', 'weekdays' => 'cocorico.form.type.weekdays', 'Cocorico\\CoreBundle\\Form\\Type\\WeekDaysType' => 'cocorico.form.type.weekdays', 'booking_status_filter' => 'cocorico.form.booking.status_filter', 'Cocorico\\CoreBundle\\Form\\Type\\Dashboard\\BookingStatusFilterType' => 'cocorico.form.booking.status_filter', 'form' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'birthday' => 'form.type.birthday', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'collection' => 'form.type.collection', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => 'form.type.collection', 'country' => 'form.type.country', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType' => 'form.type.country', 'date' => 'form.type.date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'form.type.date', 'datetime' => 'form.type.datetime', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'form.type.datetime', 'email' => 'form.type.email', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => 'form.type.email', 'file' => 'form.type.file', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => 'form.type.file', 'hidden' => 'form.type.hidden', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType' => 'form.type.hidden', 'integer' => 'form.type.integer', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => 'form.type.integer', 'language' => 'form.type.language', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType' => 'form.type.language', 'locale' => 'form.type.locale', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType' => 'form.type.locale', 'money' => 'form.type.money', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType' => 'form.type.money', 'number' => 'form.type.number', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType' => 'form.type.number', 'password' => 'form.type.password', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => 'form.type.password', 'percent' => 'form.type.percent', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType' => 'form.type.percent', 'radio' => 'form.type.radio', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType' => 'form.type.radio', 'range' => 'form.type.range', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RangeType' => 'form.type.range', 'repeated' => 'form.type.repeated', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => 'form.type.repeated', 'search' => 'form.type.search', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType' => 'form.type.search', 'textarea' => 'form.type.textarea', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => 'form.type.textarea', 'text' => 'form.type.text', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => 'form.type.text', 'time' => 'form.type.time', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType' => 'form.type.time', 'timezone' => 'form.type.timezone', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType' => 'form.type.timezone', 'url' => 'form.type.url', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType' => 'form.type.url', 'button' => 'form.type.button', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType' => 'form.type.button', 'submit' => 'form.type.submit', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => 'form.type.submit', 'reset' => 'form.type.reset', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType' => 'form.type.reset', 'currency' => 'form.type.currency', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType' => 'form.type.currency', 'entity' => 'form.type.entity', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'fos_user_username' => 'fos_user.username_form_type', 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => 'fos_user.profile.form.type', 'user_registration' => 'fos_user.registration.form.type', 'Cocorico\\UserBundle\\Form\\Type\\RegistrationFormType' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => 'fos_user.change_password.form.type', 'user_resetting' => 'fos_user.resetting.form.type', 'Cocorico\\UserBundle\\Form\\Type\\ResettingFormType' => 'fos_user.resetting.form.type', 'fos_user_group' => 'fos_user.group.form.type', 'FOS\\UserBundle\\Form\\Type\\GroupFormType' => 'fos_user.group.form.type', 'jms_choose_payment_method' => 'payment.form.choose_payment_method_type', 'JMS\\Payment\\CoreBundle\\Form\\ChoosePaymentMethodType' => 'payment.form.choose_payment_method_type', 'paypal_express_checkout' => 'payment.form.paypal_express_checkout_type', 'JMS\\Payment\\PaypalBundle\\Form\\ExpressCheckoutType' => 'payment.form.paypal_express_checkout_type', 'a2lix_translations' => 'a2lix_translation_form.default.type.translations', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsType' => 'a2lix_translation_form.default.type.translations', 'a2lix_translationsFields' => 'a2lix_translation_form.default.type.translationsfields', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFieldsType' => 'a2lix_translation_form.default.type.translationsfields', 'a2lix_translationsForms' => 'a2lix_translation_form.default.type.translationsforms', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFormsType' => 'a2lix_translation_form.default.type.translationsforms', 'a2lix_translationsLocalesSelector' => 'a2lix_translation_form.default.type.translationslocalesselector', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsLocalesSelectorType' => 'a2lix_translation_form.default.type.translationslocalesselector', 'a2lix_translatedEntity' => 'a2lix_translation_form.default.type.translatedentity', 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslatedEntityType' => 'a2lix_translation_form.default.type.translatedentity', 'liip_imagine_image' => 'liip_imagine.form.type.image', 'Liip\\ImagineBundle\\Form\\Type\\ImageType' => 'liip_imagine.form.type.image', 'document' => 'form.type.mongodb_document', 'Doctrine\\Bundle\\MongoDBBundle\\Form\\Type\\DocumentType' => 'form.type.mongodb_document', 'sonata_type_immutable_array' => 'sonata.core.form.type.array', 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType' => 'sonata.core.form.type.array', 'sonata_type_boolean' => 'sonata.core.form.type.boolean', 'Sonata\\CoreBundle\\Form\\Type\\BooleanType' => 'sonata.core.form.type.boolean', 'sonata_type_collection' => 'sonata.core.form.type.collection', 'Sonata\\CoreBundle\\Form\\Type\\CollectionType' => 'sonata.core.form.type.collection', 'sonata_type_translatable_choice' => 'sonata.core.form.type.translatable_choice', 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType' => 'sonata.core.form.type.translatable_choice', 'sonata_type_date_range' => 'sonata.core.form.type.date_range', 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType' => 'sonata.core.form.type.date_range', 'sonata_type_datetime_range' => 'sonata.core.form.type.datetime_range', 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType' => 'sonata.core.form.type.datetime_range', 'sonata_type_date_picker' => 'sonata.core.form.type.date_picker', 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType' => 'sonata.core.form.type.date_picker', 'sonata_type_datetime_picker' => 'sonata.core.form.type.datetime_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType' => 'sonata.core.form.type.datetime_picker', 'sonata_type_date_range_picker' => 'sonata.core.form.type.date_range_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType' => 'sonata.core.form.type.date_range_picker', 'sonata_type_datetime_range_picker' => 'sonata.core.form.type.datetime_range_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType' => 'sonata.core.form.type.datetime_range_picker', 'sonata_type_equal' => 'sonata.core.form.type.equal', 'Sonata\\CoreBundle\\Form\\Type\\EqualType' => 'sonata.core.form.type.equal', 'sonata_type_color_selector' => 'sonata.core.form.type.color_selector', 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType' => 'sonata.core.form.type.color_selector', 'sonata_block_service_choice' => 'sonata.block.form.type.block', 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType' => 'sonata.block.form.type.block', 'sonata_type_container_template_choice' => 'sonata.block.form.type.container_template', 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType' => 'sonata.block.form.type.container_template', 'sonata_type_admin' => 'sonata.admin.form.type.admin', 'Sonata\\AdminBundle\\Form\\Type\\AdminType' => 'sonata.admin.form.type.admin', 'sonata_type_model' => 'sonata.admin.form.type.model_choice', 'Sonata\\AdminBundle\\Form\\Type\\ModelType' => 'sonata.admin.form.type.model_choice', 'sonata_type_model_list' => 'sonata.admin.form.type.model_list', 'Sonata\\AdminBundle\\Form\\Type\\ModelTypeList' => 'sonata.admin.form.type.model_list', 'sonata_type_model_reference' => 'sonata.admin.form.type.model_reference', 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType' => 'sonata.admin.form.type.model_reference', 'sonata_type_model_hidden' => 'sonata.admin.form.type.model_hidden', 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType' => 'sonata.admin.form.type.model_hidden', 'sonata_type_model_autocomplete' => 'sonata.admin.form.type.model_autocomplete', 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType' => 'sonata.admin.form.type.model_autocomplete', 'sonata_type_native_collection' => 'sonata.admin.form.type.collection', 'Sonata\\AdminBundle\\Form\\Type\\CollectionType' => 'sonata.admin.form.type.collection', 'sonata_type_filter_number' => 'sonata.admin.form.filter.type.number', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType' => 'sonata.admin.form.filter.type.number', 'sonata_type_filter_choice' => 'sonata.admin.form.filter.type.choice', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType' => 'sonata.admin.form.filter.type.choice', 'sonata_type_filter_default' => 'sonata.admin.form.filter.type.default', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType' => 'sonata.admin.form.filter.type.default', 'sonata_type_filter_date' => 'sonata.admin.form.filter.type.date', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType' => 'sonata.admin.form.filter.type.date', 'sonata_type_filter_date_range' => 'sonata.admin.form.filter.type.daterange', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType' => 'sonata.admin.form.filter.type.daterange', 'sonata_type_filter_datetime' => 'sonata.admin.form.filter.type.datetime', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType' => 'sonata.admin.form.filter.type.datetime', 'sonata_type_filter_datetime_range' => 'sonata.admin.form.filter.type.datetime_range', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType' => 'sonata.admin.form.filter.type.datetime_range', 'sonata_security_roles' => 'sonata.user.form.type.security_roles', 'Sonata\\UserBundle\\Form\\Type\\SecurityRolesType' => 'sonata.user.form.type.security_roles', 'sonata_user_profile' => 'sonata.user.profile.form.type', 'Sonata\\UserBundle\\Form\\Type\\ProfileType' => 'sonata.user.profile.form.type', 'sonata_user_gender' => 'sonata.user.form.gender_list', 'Sonata\\CoreBundle\\Form\\Type\\StatusType' => 'sonata.user.form.gender_list', 'recipients_selector' => 'fos_message.recipients_selector', 'FOS\\MessageBundle\\FormType\\RecipientsType' => 'fos_message.recipients_selector', 'ckeditor' => 'ivory_ck_editor.form.type', 'Ivory\\CKEditorBundle\\Form\\Type\\CKEditorType' => 'ivory_ck_editor.form.type', 'elfinder' => 'fm_elfinder.form.type', 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType' => 'fm_elfinder.form.type', 'geocoding_to_coordinate' => 'cocorico_geo.form.type.geocoding', 'Cocorico\\GeoBundle\\Form\\Type\\GeocodingToCoordinateType' => 'cocorico_geo.form.type.geocoding', 'user_profile_about_me' => 'cocorico_user.profile_about_me.form.type', 'Cocorico\\UserBundle\\Form\\Type\\ProfileAboutMeFormType' => 'cocorico_user.profile_about_me.form.type', 'user_login' => 'cocorico_user.login.form.type', 'Cocorico\\UserBundle\\Form\\Type\\LoginFormType' => 'cocorico_user.login.form.type', 'user_address' => 'cocorico_user.form.type.user_address', 'Cocorico\\UserBundle\\Form\\Type\\UserAddressFormType' => 'cocorico_user.form.type.user_address', 'cocorico_message_new_thread' => 'cocorico_message.new_thread.form.type', 'Cocorico\\MessageBundle\\Form\\Type\\Frontend\\NewThreadMessageFormType' => 'cocorico_message.new_thread.form.type', 'cocorico_message_reply' => 'cocorico_message.reply.form.type', 'Cocorico\\MessageBundle\\Form\\Type\\Frontend\\ReplyMessageFormType' => 'cocorico_message.reply.form.type', 'contact_new' => 'cocorico_contact.form.type.contact_new', 'Cocorico\\ContactBundle\\Form\\Type\\Frontend\\ContactNewType' => 'cocorico_contact.form.type.contact_new', 'star_rating' => 'cocorico.star_rating.form.type', 'Cocorico\\ReviewBundle\\Form\\Type\\StarRatingType' => 'cocorico.star_rating.form.type', 'review_new' => 'cocorico.form.type.review_new', 'Cocorico\\ReviewBundle\\Form\\Type\\Dashboard\\ReviewType' => 'cocorico.form.type.review_new', 'troopers_mangopay.form.card' => 'troopers_mangopay.form.card', 'Troopers\\MangopayBundle\\Form\\CardType' => 'troopers_mangopay.form.card'), array('file' => array(0 => 'cocorico.image_type_extension'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf', 4 => 'form.type_extension.form.data_collector'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator'), 'form' => array(0 => 'sonata.admin.form.extension.field', 1 => 'sonata.admin.form.extension.field.mopa')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine', 2 => 'form.type_guesser.doctrine.mongodb'), array('form' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 'birthday' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType', 'checkbox' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType', 'choice' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 'collection' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType', 'country' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType', 'date' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType', 'datetime' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType', 'email' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType', 'file' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 'hidden' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType', 'integer' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType', 'language' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType', 'locale' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType', 'money' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType', 'number' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType', 'password' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType', 'percent' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType', 'radio' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType', 'repeated' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType', 'search' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType', 'textarea' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType', 'text' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType', 'time' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType', 'timezone' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType', 'url' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType', 'button' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType', 'submit' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType', 'reset' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType', 'currency' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType', 'entity' => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 'sonata_type_immutable_array' => 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType', 'sonata_type_boolean' => 'Sonata\\CoreBundle\\Form\\Type\\BooleanType', 'sonata_type_collection' => 'Sonata\\CoreBundle\\Form\\Type\\CollectionType', 'sonata_type_translatable_choice' => 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType', 'sonata_type_date_range' => 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType', 'sonata_type_datetime_range' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType', 'sonata_type_date_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType', 'sonata_type_datetime_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType', 'sonata_type_date_range_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType', 'sonata_type_datetime_range_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType', 'sonata_type_equal' => 'Sonata\\CoreBundle\\Form\\Type\\EqualType', 'sonata_type_color_selector' => 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'form.type_extension.form.data_collector', 4 => 'sonata.admin.form.extension.field', 5 => 'nelmio_api_doc.form.extension.description_form_type_extension', 6 => 'mopa_bootstrap.form.type_extension.help', 7 => 'mopa_bootstrap.form.type_extension.legend', 8 => 'mopa_bootstrap.form.type_extension.error', 9 => 'mopa_bootstrap.form.type_extension.widget', 10 => 'mopa_bootstrap.form.type_extension.horizontal', 11 => 'mopa_bootstrap.form.type_extension.widget_collection', 12 => 'mopa_bootstrap.form.type_extension.tabbed'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array());
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => $this->get('form.extension')), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy A Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy instance
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.mongodb_document' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Form\Type\DocumentType A Doctrine\Bundle\MongoDBBundle\Form\Type\DocumentType instance
     */
    protected function getForm_Type_MongodbDocumentService()
    {
        return $this->services['form.type.mongodb_document'] = new \Doctrine\Bundle\MongoDBBundle\Form\Type\DocumentType($this->get('doctrine_mongodb'));
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType A Symfony\Component\Form\Extension\Core\Type\RangeType instance
     */
    protected function getForm_Type_RangeService()
    {
        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', $this->get('form.server_params'));
    }

    /**
     * Gets the 'form.type_extension.form.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension A Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension instance
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler($this->get('form.server_params')));
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.upload.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension instance
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator'), 'validators');
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.doctrine.mongodb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Form\DoctrineMongoDBTypeGuesser A Doctrine\Bundle\MongoDBBundle\Form\DoctrineMongoDBTypeGuesser instance
     */
    protected function getForm_TypeGuesser_Doctrine_MongodbService()
    {
        return $this->services['form.type_guesser.doctrine.mongodb'] = new \Doctrine\Bundle\MongoDBBundle\Form\DoctrineMongoDBTypeGuesser($this->get('doctrine_mongodb'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the 'fos_message.authorizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\Security\Authorizer A FOS\MessageBundle\Security\Authorizer instance
     */
    protected function getFosMessage_AuthorizerService()
    {
        return $this->services['fos_message.authorizer'] = new \FOS\MessageBundle\Security\Authorizer($this->get('fos_message.participant_provider'));
    }

    /**
     * Gets the 'fos_message.composer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\MessageBundle\Composer\Composer A Cocorico\MessageBundle\Composer\Composer instance
     */
    protected function getFosMessage_ComposerService()
    {
        return $this->services['fos_message.composer'] = new \Cocorico\MessageBundle\Composer\Composer($this->get('fos_message.message_manager'), $this->get('fos_message.thread_manager'));
    }

    /**
     * Gets the 'fos_message.deleter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\Deleter\Deleter A FOS\MessageBundle\Deleter\Deleter instance
     */
    protected function getFosMessage_DeleterService()
    {
        return $this->services['fos_message.deleter'] = new \FOS\MessageBundle\Deleter\Deleter($this->get('fos_message.authorizer'), $this->get('fos_message.participant_provider'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'fos_message.message_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\EntityManager\MessageManager A FOS\MessageBundle\EntityManager\MessageManager instance
     */
    protected function getFosMessage_MessageManagerService()
    {
        return $this->services['fos_message.message_manager'] = new \FOS\MessageBundle\EntityManager\MessageManager($this->get('doctrine.orm.default_entity_manager'), 'Cocorico\\MessageBundle\\Entity\\Message', 'Cocorico\\MessageBundle\\Entity\\MessageMetadata');
    }

    /**
     * Gets the 'fos_message.message_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\Reader\Reader A FOS\MessageBundle\Reader\Reader instance
     */
    protected function getFosMessage_MessageReaderService()
    {
        return $this->services['fos_message.message_reader'] = new \FOS\MessageBundle\Reader\Reader($this->get('fos_message.participant_provider'), $this->get('fos_message.message_manager'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'fos_message.new_thread_form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\FormFactory\NewThreadMessageFormFactory A FOS\MessageBundle\FormFactory\NewThreadMessageFormFactory instance
     */
    protected function getFosMessage_NewThreadForm_FactoryService()
    {
        return $this->services['fos_message.new_thread_form.factory'] = new \FOS\MessageBundle\FormFactory\NewThreadMessageFormFactory($this->get('form.factory'), $this->get('cocorico_message.new_thread.form.type'), 'message', 'Cocorico\\MessageBundle\\FormModel\\NewThreadMessage');
    }

    /**
     * Gets the 'fos_message.new_thread_form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\MessageBundle\FormHandler\NewThreadMessageFormHandler A Cocorico\MessageBundle\FormHandler\NewThreadMessageFormHandler instance
     *
     * @throws InactiveScopeException when the 'fos_message.new_thread_form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosMessage_NewThreadForm_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_message.new_thread_form.handler', 'request');
        }

        return $this->services['fos_message.new_thread_form.handler'] = $this->scopedServices['request']['fos_message.new_thread_form.handler'] = new \Cocorico\MessageBundle\FormHandler\NewThreadMessageFormHandler($this->get('request'), $this->get('fos_message.composer'), $this->get('fos_message.sender'), $this->get('fos_message.participant_provider'));
    }

    /**
     * Gets the 'fos_message.participant_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\Security\ParticipantProvider A FOS\MessageBundle\Security\ParticipantProvider instance
     */
    protected function getFosMessage_ParticipantProviderService()
    {
        return $this->services['fos_message.participant_provider'] = new \FOS\MessageBundle\Security\ParticipantProvider($this->get('security.context'));
    }

    /**
     * Gets the 'fos_message.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\Provider\Provider A FOS\MessageBundle\Provider\Provider instance
     */
    protected function getFosMessage_ProviderService()
    {
        return $this->services['fos_message.provider'] = new \FOS\MessageBundle\Provider\Provider($this->get('fos_message.thread_manager'), $this->get('fos_message.message_manager'), $this->get('fos_message.thread_reader'), $this->get('fos_message.authorizer'), $this->get('fos_message.participant_provider'));
    }

    /**
     * Gets the 'fos_message.recipients_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\FormType\RecipientsType A FOS\MessageBundle\FormType\RecipientsType instance
     */
    protected function getFosMessage_RecipientsSelectorService()
    {
        return $this->services['fos_message.recipients_selector'] = new \FOS\MessageBundle\FormType\RecipientsType(new \FOS\MessageBundle\DataTransformer\RecipientsDataTransformer($this->get('fos_user.user_to_username_transformer')));
    }

    /**
     * Gets the 'fos_message.reply_form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\FormFactory\ReplyMessageFormFactory A FOS\MessageBundle\FormFactory\ReplyMessageFormFactory instance
     */
    protected function getFosMessage_ReplyForm_FactoryService()
    {
        return $this->services['fos_message.reply_form.factory'] = new \FOS\MessageBundle\FormFactory\ReplyMessageFormFactory($this->get('form.factory'), $this->get('fos_message.reply_form.type'), 'message', 'FOS\\MessageBundle\\FormModel\\ReplyMessage');
    }

    /**
     * Gets the 'fos_message.reply_form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\FormHandler\ReplyMessageFormHandler A FOS\MessageBundle\FormHandler\ReplyMessageFormHandler instance
     *
     * @throws InactiveScopeException when the 'fos_message.reply_form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosMessage_ReplyForm_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_message.reply_form.handler', 'request');
        }

        return $this->services['fos_message.reply_form.handler'] = $this->scopedServices['request']['fos_message.reply_form.handler'] = new \FOS\MessageBundle\FormHandler\ReplyMessageFormHandler($this->get('request'), $this->get('fos_message.composer'), $this->get('fos_message.sender'), $this->get('fos_message.participant_provider'));
    }

    /**
     * Gets the 'fos_message.reply_form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\FormType\ReplyMessageFormType A FOS\MessageBundle\FormType\ReplyMessageFormType instance
     */
    protected function getFosMessage_ReplyForm_TypeService()
    {
        return $this->services['fos_message.reply_form.type'] = new \FOS\MessageBundle\FormType\ReplyMessageFormType();
    }

    /**
     * Gets the 'fos_message.search_finder.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\Search\Finder A FOS\MessageBundle\Search\Finder instance
     */
    protected function getFosMessage_SearchFinder_DefaultService()
    {
        return $this->services['fos_message.search_finder.default'] = new \FOS\MessageBundle\Search\Finder($this->get('fos_message.participant_provider'), $this->get('fos_message.thread_manager'));
    }

    /**
     * Gets the 'fos_message.search_query_factory.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\Search\QueryFactory A FOS\MessageBundle\Search\QueryFactory instance
     *
     * @throws InactiveScopeException when the 'fos_message.search_query_factory.default' service is requested while the 'request' scope is not active
     */
    protected function getFosMessage_SearchQueryFactory_DefaultService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_message.search_query_factory.default', 'request');
        }

        return $this->services['fos_message.search_query_factory.default'] = $this->scopedServices['request']['fos_message.search_query_factory.default'] = new \FOS\MessageBundle\Search\QueryFactory($this->get('request'), 'q');
    }

    /**
     * Gets the 'fos_message.sender' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\Sender\Sender A FOS\MessageBundle\Sender\Sender instance
     */
    protected function getFosMessage_SenderService()
    {
        return $this->services['fos_message.sender'] = new \FOS\MessageBundle\Sender\Sender($this->get('fos_message.message_manager'), $this->get('fos_message.thread_manager'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'fos_message.spam_detector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\SpamDetection\NoopSpamDetector A FOS\MessageBundle\SpamDetection\NoopSpamDetector instance
     */
    protected function getFosMessage_SpamDetectorService()
    {
        return $this->services['fos_message.spam_detector'] = new \FOS\MessageBundle\SpamDetection\NoopSpamDetector();
    }

    /**
     * Gets the 'fos_message.thread_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\EntityManager\ThreadManager A FOS\MessageBundle\EntityManager\ThreadManager instance
     */
    protected function getFosMessage_ThreadManagerService()
    {
        return $this->services['fos_message.thread_manager'] = new \FOS\MessageBundle\EntityManager\ThreadManager($this->get('doctrine.orm.default_entity_manager'), 'Cocorico\\MessageBundle\\Entity\\Thread', 'Cocorico\\MessageBundle\\Entity\\ThreadMetadata', $this->get('fos_message.message_manager'));
    }

    /**
     * Gets the 'fos_message.thread_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\Reader\Reader A FOS\MessageBundle\Reader\Reader instance
     */
    protected function getFosMessage_ThreadReaderService()
    {
        return $this->services['fos_message.thread_reader'] = new \FOS\MessageBundle\Reader\Reader($this->get('fos_message.participant_provider'), $this->get('fos_message.thread_manager'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'fos_message.twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\Twig\Extension\MessageExtension A FOS\MessageBundle\Twig\Extension\MessageExtension instance
     */
    protected function getFosMessage_TwigExtensionService()
    {
        return $this->services['fos_message.twig_extension'] = new \FOS\MessageBundle\Twig\Extension\MessageExtension($this->get('fos_message.participant_provider'), $this->get('fos_message.provider'), $this->get('fos_message.authorizer'));
    }

    /**
     * Gets the 'fos_message.validator.authorization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\Validator\AuthorizationValidator A FOS\MessageBundle\Validator\AuthorizationValidator instance
     */
    protected function getFosMessage_Validator_AuthorizationService()
    {
        return $this->services['fos_message.validator.authorization'] = new \FOS\MessageBundle\Validator\AuthorizationValidator($this->get('fos_message.authorizer'));
    }

    /**
     * Gets the 'fos_message.validator.reply_authorization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\Validator\ReplyAuthorizationValidator A FOS\MessageBundle\Validator\ReplyAuthorizationValidator instance
     */
    protected function getFosMessage_Validator_ReplyAuthorizationService()
    {
        return $this->services['fos_message.validator.reply_authorization'] = new \FOS\MessageBundle\Validator\ReplyAuthorizationValidator($this->get('fos_message.authorizer'), $this->get('fos_message.participant_provider'));
    }

    /**
     * Gets the 'fos_message.validator.self_recipient' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\Validator\SelfRecipientValidator A FOS\MessageBundle\Validator\SelfRecipientValidator instance
     */
    protected function getFosMessage_Validator_SelfRecipientService()
    {
        return $this->services['fos_message.validator.self_recipient'] = new \FOS\MessageBundle\Validator\SelfRecipientValidator($this->get('fos_message.participant_provider'));
    }

    /**
     * Gets the 'fos_message.validator.spam' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\MessageBundle\Validator\SpamValidator A FOS\MessageBundle\Validator\SpamValidator instance
     *
     * @throws InactiveScopeException when the 'fos_message.validator.spam' service is requested while the 'request' scope is not active
     */
    protected function getFosMessage_Validator_SpamService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_message.validator.spam', 'request');
        }

        return $this->services['fos_message.validator.spam'] = $this->scopedServices['request']['fos_message.validator.spam'] = new \FOS\MessageBundle\Validator\SpamValidator($this->get('fos_message.spam_detector'));
    }

    /**
     * Gets the 'fos_user.change_password.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Form A Symfony\Component\Form\Form instance
     */
    protected function getFosUser_ChangePassword_FormService()
    {
        return $this->services['fos_user.change_password.form'] = $this->get('form.factory')->createNamed('fos_user_change_password_form', 'fos_user_change_password', NULL, array('validation_groups' => array(0 => 'ChangePassword', 1 => 'Default')));
    }

    /**
     * Gets the 'fos_user.change_password.form.handler.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Handler\ChangePasswordFormHandler A FOS\UserBundle\Form\Handler\ChangePasswordFormHandler instance
     *
     * @throws InactiveScopeException when the 'fos_user.change_password.form.handler.default' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_ChangePassword_Form_Handler_DefaultService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.change_password.form.handler.default', 'request');
        }

        return $this->services['fos_user.change_password.form.handler.default'] = $this->scopedServices['request']['fos_user.change_password.form.handler.default'] = new \FOS\UserBundle\Form\Handler\ChangePasswordFormHandler($this->get('fos_user.change_password.form'), $this->get('request'), $this->get('cocorico_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.change_password.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType A FOS\UserBundle\Form\Type\ChangePasswordFormType instance
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType();
    }

    /**
     * Gets the 'fos_user.group.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Form A Symfony\Component\Form\Form instance
     */
    protected function getFosUser_Group_FormService()
    {
        return $this->services['fos_user.group.form'] = $this->get('form.factory')->createNamed('fos_user_group_form', 'fos_user_group', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }

    /**
     * Gets the 'fos_user.group.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Handler\GroupFormHandler A FOS\UserBundle\Form\Handler\GroupFormHandler instance
     *
     * @throws InactiveScopeException when the 'fos_user.group.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_Group_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.group.form.handler', 'request');
        }

        return $this->services['fos_user.group.form.handler'] = $this->scopedServices['request']['fos_user.group.form.handler'] = new \FOS\UserBundle\Form\Handler\GroupFormHandler($this->get('fos_user.group.form'), $this->get('request'), $this->get('fos_user.group_manager'));
    }

    /**
     * Gets the 'fos_user.group.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\GroupFormType A FOS\UserBundle\Form\Type\GroupFormType instance
     */
    protected function getFosUser_Group_Form_TypeService()
    {
        return $this->services['fos_user.group.form.type'] = new \FOS\UserBundle\Form\Type\GroupFormType('Cocorico\\UserBundle\\Entity\\Group');
    }

    /**
     * Gets the 'fos_user.group_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Doctrine\GroupManager A FOS\UserBundle\Doctrine\GroupManager instance
     */
    protected function getFosUser_GroupManagerService()
    {
        return $this->services['fos_user.group_manager'] = new \FOS\UserBundle\Doctrine\GroupManager($this->get('fos_user.entity_manager'), 'Cocorico\\UserBundle\\Entity\\Group');
    }

    /**
     * Gets the 'fos_user.profile.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Form A Symfony\Component\Form\Form instance
     */
    protected function getFosUser_Profile_FormService()
    {
        return $this->services['fos_user.profile.form'] = $this->get('form.factory')->createNamed('user_profile', 'user_profile', NULL, array('validation_groups' => array(0 => 'CocoricoProfile')));
    }

    /**
     * Gets the 'fos_user.profile.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Handler\ProfileFormHandler A FOS\UserBundle\Form\Handler\ProfileFormHandler instance
     *
     * @throws InactiveScopeException when the 'fos_user.profile.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.profile.form.handler', 'request');
        }

        return $this->services['fos_user.profile.form.handler'] = $this->scopedServices['request']['fos_user.profile.form.handler'] = new \FOS\UserBundle\Form\Handler\ProfileFormHandler($this->get('fos_user.profile.form'), $this->get('request'), $this->get('cocorico_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType A FOS\UserBundle\Form\Type\ProfileFormType instance
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('Cocorico\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.registration.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Form A Symfony\Component\Form\Form instance
     */
    protected function getFosUser_Registration_FormService()
    {
        return $this->services['fos_user.registration.form'] = $this->get('form.factory')->createNamed('user_registration', 'user_registration', NULL, array('validation_groups' => array(0 => 'CocoricoRegistration')));
    }

    /**
     * Gets the 'fos_user.registration.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Form\Handler\RegistrationFormHandler A Cocorico\UserBundle\Form\Handler\RegistrationFormHandler instance
     */
    protected function getFosUser_Registration_Form_HandlerService()
    {
        return $this->services['fos_user.registration.form.handler'] = new \Cocorico\UserBundle\Form\Handler\RegistrationFormHandler($this->get('fos_user.registration.form'), $this->get('request_stack'), $this->get('cocorico_user.user_manager'), $this->get('cocorico_user.mailer.twig_swift'), $this->get('fos_user.util.token_generator'), $this->get('cocorico_user.login_manager'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'fos_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Form\Type\RegistrationFormType A Cocorico\UserBundle\Form\Type\RegistrationFormType instance
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \Cocorico\UserBundle\Form\Type\RegistrationFormType('Cocorico\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.resetting.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Form A Symfony\Component\Form\Form instance
     */
    protected function getFosUser_Resetting_FormService()
    {
        return $this->services['fos_user.resetting.form'] = $this->get('form.factory')->createNamed('user_resetting', 'user_resetting', NULL, array('validation_groups' => array(0 => 'ResetPassword', 1 => 'Default')));
    }

    /**
     * Gets the 'fos_user.resetting.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Handler\ResettingFormHandler A FOS\UserBundle\Form\Handler\ResettingFormHandler instance
     *
     * @throws InactiveScopeException when the 'fos_user.resetting.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_Resetting_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.resetting.form.handler', 'request');
        }

        return $this->services['fos_user.resetting.form.handler'] = $this->scopedServices['request']['fos_user.resetting.form.handler'] = new \FOS\UserBundle\Form\Handler\ResettingFormHandler($this->get('fos_user.resetting.form'), $this->get('request'), $this->get('cocorico_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.resetting.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\UserBundle\Form\Type\ResettingFormType A Cocorico\UserBundle\Form\Type\ResettingFormType instance
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \Cocorico\UserBundle\Form\Type\ResettingFormType();
    }

    /**
     * Gets the 'fos_user.security.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Security\InteractiveLoginListener A FOS\UserBundle\Security\InteractiveLoginListener instance
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\Security\InteractiveLoginListener($this->get('cocorico_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.security.login_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Security\LoginManager A FOS\UserBundle\Security\LoginManager instance
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.context'), $this->get('security.user_checker.admin'), $this->get('security.authentication.session_strategy'), $this);
    }

    /**
     * Gets the 'fos_user.username_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType A FOS\UserBundle\Form\Type\UsernameFormType instance
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType($this->get('fos_user.user_to_username_transformer'));
    }

    /**
     * Gets the 'fos_user.util.email_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the 'fos_user.util.token_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\TokenGenerator A FOS\UserBundle\Util\TokenGenerator instance
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_user.util.user_manipulator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator A FOS\UserBundle\Util\UserManipulator instance
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('cocorico_user.user_manager'));
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), true);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'), $this->get('request_stack'), false);
    }

    /**
     * Gets the 'hwi_oauth.http_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Buzz\Client\Curl A Buzz\Client\Curl instance
     */
    protected function getHwiOauth_HttpClientService()
    {
        $this->services['hwi_oauth.http_client'] = $instance = new \Buzz\Client\Curl();

        $instance->setVerifyPeer(true);
        $instance->setTimeout(5);
        $instance->setMaxRedirects(5);
        $instance->setIgnoreErrors(true);

        return $instance;
    }

    /**
     * Gets the 'hwi_oauth.resource_owner.facebook' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\FacebookResourceOwner A HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\FacebookResourceOwner instance
     */
    protected function getHwiOauth_ResourceOwner_FacebookService()
    {
        return $this->services['hwi_oauth.resource_owner.facebook'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\FacebookResourceOwner($this->get('hwi_oauth.http_client'), $this->get('security.http_utils'), array('client_id' => 'none', 'client_secret' => 'none', 'options' => array('csrf' => true), 'scope' => 'public_profile', 'infos_url' => 'https://graph.facebook.com/me?fields=id,link,name,email,first_name,last_name,verified,gender,locale,timezone,picture.height(500).width(500)', 'paths' => array('profilepicture' => 'picture.data.url')), 'facebook', new \HWI\Bundle\OAuthBundle\OAuth\RequestDataStorage\SessionStorage($this->get('session')));
    }

    /**
     * Gets the 'hwi_oauth.resource_ownermap.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap A HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap instance
     */
    protected function getHwiOauth_ResourceOwnermap_MainService()
    {
        $this->services['hwi_oauth.resource_ownermap.main'] = $instance = new \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap($this->get('security.http_utils'), array('facebook' => 'facebook'), array('facebook' => '/en/oauth/fb-login'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'hwi_oauth.security.oauth_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \HWI\Bundle\OAuthBundle\Security\OAuthUtils A HWI\Bundle\OAuthBundle\Security\OAuthUtils instance
     */
    protected function getHwiOauth_Security_OauthUtilsService()
    {
        $this->services['hwi_oauth.security.oauth_utils'] = $instance = new \HWI\Bundle\OAuthBundle\Security\OAuthUtils($this->get('security.http_utils'), $this->get('security.authorization_checker'), true);

        $instance->addResourceOwnerMap($this->get('hwi_oauth.resource_ownermap.main'));

        return $instance;
    }

    /**
     * Gets the 'hwi_oauth.templating.helper.oauth' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper A HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper instance
     */
    protected function getHwiOauth_Templating_Helper_OauthService()
    {
        $this->services['hwi_oauth.templating.helper.oauth'] = $instance = new \HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper($this->get('hwi_oauth.security.oauth_utils'));

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'ivory_ck_editor.config_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\ConfigManager A Ivory\CKEditorBundle\Model\ConfigManager instance
     */
    protected function getIvoryCkEditor_ConfigManagerService()
    {
        $this->services['ivory_ck_editor.config_manager'] = $instance = new \Ivory\CKEditorBundle\Model\ConfigManager();

        $instance->setConfig('default', array('toolbar' => array(0 => array(0 => 'Source', 1 => '-', 2 => 'NewPage', 3 => 'Preview', 4 => 'Print', 5 => '-', 6 => 'Templates'), 1 => array(0 => 'Cut', 1 => 'Copy', 2 => 'Paste', 3 => 'PasteText', 4 => 'PasteFromWord', 5 => '-', 6 => 'Undo', 7 => 'Redo'), 2 => array(0 => 'Find', 1 => 'Replace', 2 => '-', 3 => 'SelectAll', 4 => '-', 5 => 'Scayt'), 3 => array(0 => 'Form', 1 => 'Checkbox', 2 => 'Radio', 3 => 'TextField', 4 => 'Textarea', 5 => 'SelectField', 6 => 'Button', 7 => 'ImageButton', 8 => 'HiddenField'), 4 => '/', 5 => array(0 => 'Bold', 1 => 'Italic', 2 => 'Underline', 3 => 'Strike', 4 => 'Subscript', 5 => 'Superscript', 6 => '-', 7 => 'RemoveFormat'), 6 => array(0 => 'NumberedList', 1 => 'BulletedList', 2 => '-', 3 => 'Outdent', 4 => 'Indent', 5 => '-', 6 => 'Blockquote', 7 => 'CreateDiv', 8 => '-', 9 => 'JustifyLeft', 10 => 'JustifyCenter', 11 => 'JustifyRight', 12 => 'JustifyBlock', 13 => '-', 14 => 'BidiLtr', 15 => 'BidiRtl'), 7 => array(0 => 'Link', 1 => 'Unlink', 2 => 'Anchor'), 8 => array(0 => 'Image', 1 => 'FLash', 2 => 'Table', 3 => 'HorizontalRule', 4 => 'SpecialChar', 5 => 'Smiley', 6 => 'PageBreak', 7 => 'Iframe'), 9 => '/', 10 => array(0 => 'Styles', 1 => 'Format', 2 => 'Font', 3 => 'FontSize', 4 => 'TextColor', 5 => 'BGColor'), 11 => array(0 => 'Maximize', 1 => 'ShowBlocks'), 12 => array(0 => 'About')), 'filebrowserBrowseRoute' => 'elfinder', 'filebrowserBrowseRouteParameters' => array('instance' => 'ckeditor')));
        $instance->setDefaultConfig('default');

        return $instance;
    }

    /**
     * Gets the 'ivory_ck_editor.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Form\Type\CKEditorType A Ivory\CKEditorBundle\Form\Type\CKEditorType instance
     */
    protected function getIvoryCkEditor_Form_TypeService()
    {
        return $this->services['ivory_ck_editor.form.type'] = new \Ivory\CKEditorBundle\Form\Type\CKEditorType($this->get('ivory_ck_editor.config_manager'), $this->get('ivory_ck_editor.plugin_manager'), $this->get('ivory_ck_editor.styles_set_manager'), $this->get('ivory_ck_editor.template_manager'));
    }

    /**
     * Gets the 'ivory_ck_editor.plugin_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\PluginManager A Ivory\CKEditorBundle\Model\PluginManager instance
     */
    protected function getIvoryCkEditor_PluginManagerService()
    {
        return $this->services['ivory_ck_editor.plugin_manager'] = new \Ivory\CKEditorBundle\Model\PluginManager();
    }

    /**
     * Gets the 'ivory_ck_editor.styles_set_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\StylesSetManager A Ivory\CKEditorBundle\Model\StylesSetManager instance
     */
    protected function getIvoryCkEditor_StylesSetManagerService()
    {
        return $this->services['ivory_ck_editor.styles_set_manager'] = new \Ivory\CKEditorBundle\Model\StylesSetManager();
    }

    /**
     * Gets the 'ivory_ck_editor.template_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\TemplateManager A Ivory\CKEditorBundle\Model\TemplateManager instance
     */
    protected function getIvoryCkEditor_TemplateManagerService()
    {
        return $this->services['ivory_ck_editor.template_manager'] = new \Ivory\CKEditorBundle\Model\TemplateManager();
    }

    /**
     * Gets the 'ivory_ck_editor.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Templating\CKEditorHelper A Ivory\CKEditorBundle\Templating\CKEditorHelper instance
     */
    protected function getIvoryCkEditor_Templating_HelperService()
    {
        return $this->services['ivory_ck_editor.templating.helper'] = new \Ivory\CKEditorBundle\Templating\CKEditorHelper($this);
    }

    /**
     * Gets the 'ivory_ck_editor.twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Twig\CKEditorExtension A Ivory\CKEditorBundle\Twig\CKEditorExtension instance
     */
    protected function getIvoryCkEditor_TwigExtensionService()
    {
        return $this->services['ivory_ck_editor.twig_extension'] = new \Ivory\CKEditorBundle\Twig\CKEditorExtension($this->get('ivory_ck_editor.templating.helper'));
    }

    /**
     * Gets the 'jms_aop.interceptor_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\AopBundle\Aop\InterceptorLoader A JMS\AopBundle\Aop\InterceptorLoader instance
     */
    protected function getJmsAop_InterceptorLoaderService()
    {
        return $this->services['jms_aop.interceptor_loader'] = new \JMS\AopBundle\Aop\InterceptorLoader($this, array());
    }

    /**
     * Gets the 'jms_aop.pointcut_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\AopBundle\Aop\PointcutContainer A JMS\AopBundle\Aop\PointcutContainer instance
     */
    protected function getJmsAop_PointcutContainerService()
    {
        return $this->services['jms_aop.pointcut_container'] = new \JMS\AopBundle\Aop\PointcutContainer(array());
    }

    /**
     * Gets the 'jms_di_extra.metadata.converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\DiExtraBundle\Metadata\MetadataConverter A JMS\DiExtraBundle\Metadata\MetadataConverter instance
     */
    protected function getJmsDiExtra_Metadata_ConverterService()
    {
        return $this->services['jms_di_extra.metadata.converter'] = new \JMS\DiExtraBundle\Metadata\MetadataConverter();
    }

    /**
     * Gets the 'jms_di_extra.metadata.metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Metadata\MetadataFactory A Metadata\MetadataFactory instance
     */
    protected function getJmsDiExtra_Metadata_MetadataFactoryService()
    {
        $this->services['jms_di_extra.metadata.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_di_extra.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache(new \Metadata\Cache\FileCache((__DIR__.'/jms_diextra/metadata')));

        return $instance;
    }

    /**
     * Gets the 'jms_di_extra.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver A JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver instance
     */
    protected function getJmsDiExtra_MetadataDriverService()
    {
        return $this->services['jms_di_extra.metadata_driver'] = new \JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader'), $this->get('jms_di_extra.service_naming_strategy'));
    }

    /**
     * Gets the 'jms_di_extra.service_naming_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\DiExtraBundle\Metadata\DefaultNamingStrategy A JMS\DiExtraBundle\Metadata\DefaultNamingStrategy instance
     */
    protected function getJmsDiExtra_ServiceNamingStrategyService()
    {
        return $this->services['jms_di_extra.service_naming_strategy'] = new \JMS\DiExtraBundle\Metadata\DefaultNamingStrategy();
    }

    /**
     * Gets the 'jms_i18n_routing.cookie_setting_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\I18nRoutingBundle\EventListener\CookieSettingListener A JMS\I18nRoutingBundle\EventListener\CookieSettingListener instance
     */
    protected function getJmsI18nRouting_CookieSettingListenerService()
    {
        return $this->services['jms_i18n_routing.cookie_setting_listener'] = new \JMS\I18nRoutingBundle\EventListener\CookieSettingListener('hl', 31536000, NULL, NULL, false, false);
    }

    /**
     * Gets the 'jms_i18n_routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\I18nRoutingBundle\Router\I18nLoader A JMS\I18nRoutingBundle\Router\I18nLoader instance
     */
    protected function getJmsI18nRouting_LoaderService()
    {
        return $this->services['jms_i18n_routing.loader'] = new \JMS\I18nRoutingBundle\Router\I18nLoader($this->get('jms_i18n_routing.route_exclusion_strategy'), new \JMS\I18nRoutingBundle\Router\DefaultPatternGenerationStrategy('prefix', $this->get('translator'), array(0 => 'en', 1 => 'ee'), __DIR__, 'routes', 'en'));
    }

    /**
     * Gets the 'jms_i18n_routing.locale_choosing_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\I18nRoutingBundle\EventListener\LocaleChoosingListener A JMS\I18nRoutingBundle\EventListener\LocaleChoosingListener instance
     */
    protected function getJmsI18nRouting_LocaleChoosingListenerService()
    {
        return $this->services['jms_i18n_routing.locale_choosing_listener'] = new \JMS\I18nRoutingBundle\EventListener\LocaleChoosingListener('en', array(0 => 'en', 1 => 'ee'), $this->get('jms_i18n_routing.locale_resolver.default'));
    }

    /**
     * Gets the 'jms_translation.config_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\TranslationBundle\Translation\ConfigFactory A JMS\TranslationBundle\Translation\ConfigFactory instance
     */
    protected function getJmsTranslation_ConfigFactoryService()
    {
        $a = new \JMS\TranslationBundle\Translation\ConfigBuilder();
        $a->setTranslationsDir(($this->targetDirs[2].'/Resources/translations'));
        $a->setScanDirs(array(0 => $this->targetDirs[2], 1 => ($this->targetDirs[2].'/../src')));
        $a->setIgnoredDomains(array());
        $a->setDomains(array());
        $a->setEnabledExtractors(array('jms_i18n_routing' => true, 'cocorico_breadcrumbs' => true, 'sonata_admin' => true));
        $a->setExcludedDirs(array(0 => 'cache', 1 => 'data', 2 => 'logs', 3 => 'Tests'));
        $a->setExcludedNames(array(0 => '*TestCase.php', 1 => '*Test.php'));
        $a->setKeepOldTranslations(false);
        $a->setLoadResources(array());

        return $this->services['jms_translation.config_factory'] = new \JMS\TranslationBundle\Translation\ConfigFactory(array('cocorico' => $a));
    }

    /**
     * Gets the 'jms_translation.loader_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\TranslationBundle\Translation\LoaderManager A JMS\TranslationBundle\Translation\LoaderManager instance
     */
    protected function getJmsTranslation_LoaderManagerService()
    {
        return $this->services['jms_translation.loader_manager'] = new \JMS\TranslationBundle\Translation\LoaderManager(array('php' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.php')), 'yml' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.yml')), 'xlf' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.xliff')), 'po' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.po')), 'mo' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.mo')), 'ts' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.qt')), 'csv' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.csv')), 'res' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.res')), 'dat' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.dat')), 'ini' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.ini')), 'json' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.json')), 'xliff' => new \JMS\TranslationBundle\Translation\Loader\XliffLoader()));
    }

    /**
     * Gets the 'jms_translation.twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\TranslationBundle\Twig\TranslationExtension A JMS\TranslationBundle\Twig\TranslationExtension instance
     */
    protected function getJmsTranslation_TwigExtensionService()
    {
        return $this->services['jms_translation.twig_extension'] = new \JMS\TranslationBundle\Twig\TranslationExtension($this->get('translator'), true);
    }

    /**
     * Gets the 'jms_translation.updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\TranslationBundle\Translation\Updater A JMS\TranslationBundle\Translation\Updater instance
     */
    protected function getJmsTranslation_UpdaterService()
    {
        $a = $this->get('logger');
        $b = $this->get('twig');

        $c = new \Doctrine\Common\Annotations\DocParser();
        $c->setImports(array('desc' => 'JMS\\TranslationBundle\\Annotation\\Desc', 'meaning' => 'JMS\\TranslationBundle\\Annotation\\Meaning', 'ignore' => 'JMS\\TranslationBundle\\Annotation\\Ignore'));
        $c->setIgnoreNotImportedAnnotations(true);

        $d = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
        $d->setSourceLanguage('en');

        $e = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
        $e->setSourceLanguage('en');

        return $this->services['jms_translation.updater'] = new \JMS\TranslationBundle\Translation\Updater($this->get('jms_translation.loader_manager'), new \JMS\TranslationBundle\Translation\ExtractorManager(new \JMS\TranslationBundle\Translation\Extractor\FileExtractor($b, $a, array(0 => $this->get('cocorico.translator.entity.extractor'), 1 => $this->get('cocorico.translator.admin.extractor'), 2 => new \JMS\TranslationBundle\Translation\Extractor\File\DefaultPhpFileExtractor($c), 3 => new \JMS\TranslationBundle\Translation\Extractor\File\FormExtractor($c), 4 => new \JMS\TranslationBundle\Translation\Extractor\File\TranslationContainerExtractor(), 5 => new \JMS\TranslationBundle\Translation\Extractor\File\TwigFileExtractor($b), 6 => new \JMS\TranslationBundle\Translation\Extractor\File\ValidationExtractor($this->get('validator')), 7 => new \JMS\TranslationBundle\Translation\Extractor\File\AuthenticationMessagesExtractor($c))), $a, array('jms_i18n_routing' => new \JMS\I18nRoutingBundle\Translation\RouteTranslationExtractor($this->get('router'), $this->get('jms_i18n_routing.route_exclusion_strategy')), 'sonata_admin' => $this->get('sonata.admin.translator.extractor.jms_translator_bundle'), 'cocorico_breadcrumbs' => $this->get('cocorico.translator.breadcrumbs_extractor'))), $a, new \JMS\TranslationBundle\Translation\FileWriter(array('php' => new \JMS\TranslationBundle\Translation\Dumper\PhpDumper(), 'xlf' => $d, 'po' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.po'), 'po'), 'mo' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.mo'), 'mo'), 'yml' => new \JMS\TranslationBundle\Translation\Dumper\YamlDumper(), 'ts' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.qt'), 'ts'), 'csv' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.csv'), 'csv'), 'ini' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.ini'), 'ini'), 'json' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.json'), 'json'), 'res' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.res'), 'res'), 'xliff' => $e)));
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer();
    }

    /**
     * Gets the 'knp_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuFactory A Knp\Menu\MenuFactory instance
     */
    protected function getKnpMenu_FactoryService()
    {
        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

        $instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension($this->get('router')), 0);

        return $instance;
    }

    /**
     * Gets the 'knp_menu.listener.voters' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener A Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener instance
     */
    protected function getKnpMenu_Listener_VotersService()
    {
        $this->services['knp_menu.listener.voters'] = $instance = new \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener();

        $instance->addVoter($this->get('knp_menu.voter.router'));

        return $instance;
    }

    /**
     * Gets the 'knp_menu.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Matcher\Matcher A Knp\Menu\Matcher\Matcher instance
     */
    protected function getKnpMenu_MatcherService()
    {
        $this->services['knp_menu.matcher'] = $instance = new \Knp\Menu\Matcher\Matcher();

        $instance->addVoter($this->get('knp_menu.voter.router'));

        return $instance;
    }

    /**
     * Gets the 'knp_menu.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Provider\ChainProvider A Knp\Menu\Provider\ChainProvider instance
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array()), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderServiceProvider($this, array()), 2 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }

    /**
     * Gets the 'knp_menu.renderer.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer A Knp\Menu\Renderer\ListRenderer instance
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer($this->get('knp_menu.matcher'), array(), 'UTF-8');
    }

    /**
     * Gets the 'knp_menu.renderer.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer A Knp\Menu\Renderer\TwigRenderer instance
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig', $this->get('knp_menu.matcher'), array());
    }

    /**
     * Gets the 'knp_menu.renderer_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider A Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider instance
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /**
     * Gets the 'knp_menu.voter.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Matcher\Voter\RouteVoter A Knp\Menu\Matcher\Voter\RouteVoter instance
     */
    protected function getKnpMenu_Voter_RouterService()
    {
        return $this->services['knp_menu.voter.router'] = new \Knp\Menu\Matcher\Voter\RouteVoter();
    }

    /**
     * Gets the 'lexik_currency.adapter_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lexik\Bundle\CurrencyBundle\Adapter\AdapterCollector A Lexik\Bundle\CurrencyBundle\Adapter\AdapterCollector instance
     */
    protected function getLexikCurrency_AdapterCollectorService()
    {
        $this->services['lexik_currency.adapter_collector'] = $instance = new \Lexik\Bundle\CurrencyBundle\Adapter\AdapterCollector();

        $instance->add($this->get('lexik_currency.doctrine_adapter'));
        $instance->add($this->get('lexik_currency.ecb_adapter'));
        $instance->add($this->get('lexik_currency.oer_adapter'));

        return $instance;
    }

    /**
     * Gets the 'lexik_currency.adapter_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lexik\Bundle\CurrencyBundle\Adapter\AdapterFactory A Lexik\Bundle\CurrencyBundle\Adapter\AdapterFactory instance
     */
    protected function getLexikCurrency_AdapterFactoryService()
    {
        return $this->services['lexik_currency.adapter_factory'] = new \Lexik\Bundle\CurrencyBundle\Adapter\AdapterFactory($this->get('doctrine'), 'EUR', array(0 => 'EUR'), 'Lexik\\Bundle\\CurrencyBundle\\Entity\\Currency');
    }

    /**
     * Gets the 'lexik_currency.converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lexik\Bundle\CurrencyBundle\Currency\Converter A Lexik\Bundle\CurrencyBundle\Currency\Converter instance
     */
    protected function getLexikCurrency_ConverterService()
    {
        return $this->services['lexik_currency.converter'] = new \Lexik\Bundle\CurrencyBundle\Currency\Converter($this->get('lexik_currency.doctrine_adapter'), 0, 'up');
    }

    /**
     * Gets the 'lexik_currency.currency_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lexik\Bundle\CurrencyBundle\Twig\Extension\CurrencyExtension A Lexik\Bundle\CurrencyBundle\Twig\Extension\CurrencyExtension instance
     */
    protected function getLexikCurrency_CurrencyExtensionService()
    {
        return $this->services['lexik_currency.currency_extension'] = new \Lexik\Bundle\CurrencyBundle\Twig\Extension\CurrencyExtension($this);
    }

    /**
     * Gets the 'lexik_currency.doctrine_adapter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocorico\CurrencyBundle\Adapter\DoctrineCurrencyAdapter A Cocorico\CurrencyBundle\Adapter\DoctrineCurrencyAdapter instance
     */
    protected function getLexikCurrency_DoctrineAdapterService()
    {
        return $this->services['lexik_currency.doctrine_adapter'] = $this->get('lexik_currency.adapter_factory')->createDoctrineAdapter('Cocorico\\CurrencyBundle\\Adapter\\DoctrineCurrencyAdapter', 'default');
    }

    /**
     * Gets the 'lexik_currency.ecb_adapter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lexik\Bundle\CurrencyBundle\Adapter\EcbCurrencyAdapter A Lexik\Bundle\CurrencyBundle\Adapter\EcbCurrencyAdapter instance
     */
    protected function getLexikCurrency_EcbAdapterService()
    {
        $this->services['lexik_currency.ecb_adapter'] = $instance = $this->get('lexik_currency.adapter_factory')->createEcbAdapter();

        $instance->setEcbUrl('http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml');

        return $instance;
    }

    /**
     * Gets the 'lexik_currency.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lexik\Bundle\CurrencyBundle\Currency\Formatter A Lexik\Bundle\CurrencyBundle\Currency\Formatter instance
     */
    protected function getLexikCurrency_FormatterService()
    {
        return $this->services['lexik_currency.formatter'] = new \Lexik\Bundle\CurrencyBundle\Currency\Formatter('en');
    }

    /**
     * Gets the 'lexik_currency.oer_adapter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lexik\Bundle\CurrencyBundle\Adapter\OerCurrencyAdapter A Lexik\Bundle\CurrencyBundle\Adapter\OerCurrencyAdapter instance
     */
    protected function getLexikCurrency_OerAdapterService()
    {
        $this->services['lexik_currency.oer_adapter'] = $instance = $this->get('lexik_currency.adapter_factory')->createOerAdapter();

        $instance->setOerUrl('http://openexchangerates.org/api/latest.json');
        $instance->setOerAppId(NULL);

        return $instance;
    }

    /**
     * Gets the 'lexik_currency.subscriber.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lexik\Bundle\CurrencyBundle\EventListener\LocaleListener A Lexik\Bundle\CurrencyBundle\EventListener\LocaleListener instance
     */
    protected function getLexikCurrency_Subscriber_LocaleService()
    {
        return $this->services['lexik_currency.subscriber.locale'] = new \Lexik\Bundle\CurrencyBundle\EventListener\LocaleListener($this->get('lexik_currency.formatter'));
    }

    /**
     * Gets the 'liip_imagine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Imagine\Imagick\Imagine A Imagine\Imagick\Imagine instance
     */
    protected function getLiipImagineService()
    {
        $this->services['liip_imagine'] = $instance = new \Imagine\Imagick\Imagine();

        $instance->setMetadataReader(new \Imagine\Image\Metadata\ExifMetadataReader());

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.binary.loader.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader A Liip\ImagineBundle\Binary\Loader\FileSystemLoader instance
     */
    protected function getLiipImagine_Binary_Loader_DefaultService()
    {
        return $this->services['liip_imagine.binary.loader.default'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader($this->get('liip_imagine.mime_type_guesser'), $this->get('liip_imagine.extension_guesser'), ($this->targetDirs[2].'/../web'));
    }

    /**
     * Gets the 'liip_imagine.binary.loader.prototype.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader A Liip\ImagineBundle\Binary\Loader\FileSystemLoader instance
     */
    protected function getLiipImagine_Binary_Loader_Prototype_FilesystemService()
    {
        return $this->services['liip_imagine.binary.loader.prototype.filesystem'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader($this->get('liip_imagine.mime_type_guesser'), $this->get('liip_imagine.extension_guesser'), '');
    }

    /**
     * Gets the 'liip_imagine.binary.loader.prototype.stream' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\StreamLoader A Liip\ImagineBundle\Binary\Loader\StreamLoader instance
     */
    protected function getLiipImagine_Binary_Loader_Prototype_StreamService()
    {
        return $this->services['liip_imagine.binary.loader.prototype.stream'] = new \Liip\ImagineBundle\Binary\Loader\StreamLoader('', '');
    }

    /**
     * Gets the 'liip_imagine.binary.mime_type_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser A Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser instance
     */
    protected function getLiipImagine_Binary_MimeTypeGuesserService()
    {
        return $this->services['liip_imagine.binary.mime_type_guesser'] = new \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser($this->get('liip_imagine.mime_type_guesser'));
    }

    /**
     * Gets the 'liip_imagine.cache.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\CacheManager A Liip\ImagineBundle\Imagine\Cache\CacheManager instance
     */
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager($this->get('liip_imagine.filter.configuration'), $this->get('router'), $this->get('liip_imagine.cache.signer'), $this->get('debug.event_dispatcher'), NULL);

        $instance->addResolver('default', $this->get('liip_imagine.cache.resolver.default'));
        $instance->addResolver('no_cache', $this->get('liip_imagine.cache.resolver.no_cache_web_path'));

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.cache.resolver.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver A Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver instance
     */
    protected function getLiipImagine_Cache_Resolver_DefaultService()
    {
        return $this->services['liip_imagine.cache.resolver.default'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver($this->get('filesystem'), $this->get('router.request_context'), ($this->targetDirs[2].'/../web'), 'media/cache');
    }

    /**
     * Gets the 'liip_imagine.cache.resolver.no_cache_web_path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver A Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver instance
     */
    protected function getLiipImagine_Cache_Resolver_NoCacheWebPathService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache_web_path'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver($this->get('router.request_context'));
    }

    /**
     * Gets the 'liip_imagine.cache.signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Signer A Liip\ImagineBundle\Imagine\Cache\Signer instance
     */
    protected function getLiipImagine_Cache_SignerService()
    {
        return $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'liip_imagine.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Controller\ImagineController A Liip\ImagineBundle\Controller\ImagineController instance
     */
    protected function getLiipImagine_ControllerService()
    {
        return $this->services['liip_imagine.controller'] = new \Liip\ImagineBundle\Controller\ImagineController($this->get('liip_imagine.data.manager'), $this->get('liip_imagine.filter.manager'), $this->get('liip_imagine.cache.manager'), $this->get('liip_imagine.cache.signer'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'liip_imagine.data.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Data\DataManager A Liip\ImagineBundle\Imagine\Data\DataManager instance
     */
    protected function getLiipImagine_Data_ManagerService()
    {
        $this->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager($this->get('liip_imagine.binary.mime_type_guesser'), $this->get('liip_imagine.extension_guesser'), $this->get('liip_imagine.filter.configuration'), 'default', NULL);

        $instance->addLoader('default', $this->get('liip_imagine.binary.loader.default'));

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.extension_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesserInterface A Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesserInterface instance
     */
    protected function getLiipImagine_ExtensionGuesserService()
    {
        return $this->services['liip_imagine.extension_guesser'] = \Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser::getInstance();
    }

    /**
     * Gets the 'liip_imagine.filter.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration A Liip\ImagineBundle\Imagine\Filter\FilterConfiguration instance
     */
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->services['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration(array('listing_xsmall' => array('quality' => 100, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 90, 1 => 67), 'mode' => 'inset', 'cache_type' => 'public', 'cache_expires' => '1 months')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'listing_small' => array('quality' => 100, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 100, 1 => 75), 'mode' => 'inset', 'cache_type' => 'public', 'cache_expires' => '1 months')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'listing_xxmedium' => array('quality' => 100, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 150, 1 => 112), 'mode' => 'outbound', 'cache_type' => 'public', 'cache_expires' => '1 months')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'listing_xmedium' => array('quality' => 100, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 200, 1 => 150), 'mode' => 'outbound', 'cache_type' => 'public', 'cache_expires' => '1 months')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'listing_medium' => array('quality' => 100, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 275, 1 => 206), 'mode' => 'outbound', 'cache_type' => 'public', 'cache_expires' => '1 months')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'listing_xxlarge' => array('quality' => 100, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 680, 1 => 510), 'mode' => 'inset', 'cache_type' => 'public', 'cache_expires' => '1 months')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'listing_xlarge' => array('quality' => 100, 'filters' => array('auto_rotate' => array(), 'upscale' => array('min' => array(0 => 527, 1 => 395)), 'thumbnail' => array('size' => array(0 => 527, 1 => 395), 'mode' => 'outbound', 'cache_type' => 'public', 'cache_expires' => '1 months', 'allow_upscale' => true)), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'listing_large' => array('quality' => 85, 'filters' => array('auto_rotate' => array(), 'upscale' => array('min' => array(0 => 384, 1 => 288)), 'thumbnail' => array('size' => array(0 => 384, 1 => 288), 'mode' => 'outbound', 'cache_type' => 'public', 'cache_expires' => '1 months', 'allow_upscale' => true)), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'user_xsmall' => array('quality' => 100, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 60, 1 => 45), 'mode' => 'inset', 'cache_type' => 'public', 'cache_expires' => '1 months')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'user_small' => array('quality' => 100, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 150, 1 => 112), 'mode' => 'inset', 'cache_type' => 'public', 'cache_expires' => '1 months')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'user_medium' => array('quality' => 100, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 200, 1 => 150), 'mode' => 'inset', 'cache_type' => 'public', 'cache_expires' => '1 months')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'user_contact' => array('quality' => 100, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 213, 1 => 160), 'mode' => 'inset', 'cache_type' => 'public', 'cache_expires' => '1 months')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'user_profile' => array('quality' => 100, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 308, 1 => 231), 'mode' => 'inset', 'cache_type' => 'public', 'cache_expires' => '1 months')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array())));
    }

    /**
     * Gets the 'liip_imagine.filter.loader.auto_rotate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_AutoRotateService()
    {
        return $this->services['liip_imagine.filter.loader.auto_rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.background' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_BackgroundService()
    {
        return $this->services['liip_imagine.filter.loader.background'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader($this->get('liip_imagine'));
    }

    /**
     * Gets the 'liip_imagine.filter.loader.crop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_CropService()
    {
        return $this->services['liip_imagine.filter.loader.crop'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.downscale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_DownscaleService()
    {
        return $this->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.interlace' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_InterlaceService()
    {
        return $this->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.paste' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_PasteService()
    {
        return $this->services['liip_imagine.filter.loader.paste'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($this->get('liip_imagine'), $this->targetDirs[2]);
    }

    /**
     * Gets the 'liip_imagine.filter.loader.relative_resize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_RelativeResizeService()
    {
        return $this->services['liip_imagine.filter.loader.relative_resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.resize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_ResizeService()
    {
        return $this->services['liip_imagine.filter.loader.resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.rotate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_RotateService()
    {
        return $this->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.strip' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_StripService()
    {
        return $this->services['liip_imagine.filter.loader.strip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.thumbnail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_ThumbnailService()
    {
        return $this->services['liip_imagine.filter.loader.thumbnail'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.upscale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_UpscaleService()
    {
        return $this->services['liip_imagine.filter.loader.upscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.watermark' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_WatermarkService()
    {
        return $this->services['liip_imagine.filter.loader.watermark'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($this->get('liip_imagine'), $this->targetDirs[2]);
    }

    /**
     * Gets the 'liip_imagine.filter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterManager A Liip\ImagineBundle\Imagine\Filter\FilterManager instance
     */
    protected function getLiipImagine_Filter_ManagerService()
    {
        $this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager($this->get('liip_imagine.filter.configuration'), $this->get('liip_imagine'), $this->get('liip_imagine.binary.mime_type_guesser'));

        $instance->addLoader('relative_resize', $this->get('liip_imagine.filter.loader.relative_resize'));
        $instance->addLoader('resize', $this->get('liip_imagine.filter.loader.resize'));
        $instance->addLoader('thumbnail', $this->get('liip_imagine.filter.loader.thumbnail'));
        $instance->addLoader('crop', $this->get('liip_imagine.filter.loader.crop'));
        $instance->addLoader('paste', $this->get('liip_imagine.filter.loader.paste'));
        $instance->addLoader('watermark', $this->get('liip_imagine.filter.loader.watermark'));
        $instance->addLoader('background', $this->get('liip_imagine.filter.loader.background'));
        $instance->addLoader('strip', $this->get('liip_imagine.filter.loader.strip'));
        $instance->addLoader('upscale', $this->get('liip_imagine.filter.loader.upscale'));
        $instance->addLoader('downscale', $this->get('liip_imagine.filter.loader.downscale'));
        $instance->addLoader('auto_rotate', $this->get('liip_imagine.filter.loader.auto_rotate'));
        $instance->addLoader('rotate', $this->get('liip_imagine.filter.loader.rotate'));
        $instance->addLoader('interlace', $this->get('liip_imagine.filter.loader.interlace'));
        $instance->addPostProcessor('jpegoptim', $this->get('liip_imagine.filter.post_processor.jpegoptim'));
        $instance->addPostProcessor('optipng', $this->get('liip_imagine.filter.post_processor.optipng'));

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.filter.post_processor.jpegoptim' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor A Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor instance
     */
    protected function getLiipImagine_Filter_PostProcessor_JpegoptimService()
    {
        return $this->services['liip_imagine.filter.post_processor.jpegoptim'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor('/usr/bin/jpegoptim');
    }

    /**
     * Gets the 'liip_imagine.filter.post_processor.optipng' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor A Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor instance
     */
    protected function getLiipImagine_Filter_PostProcessor_OptipngService()
    {
        return $this->services['liip_imagine.filter.post_processor.optipng'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor('/usr/bin/optipng');
    }

    /**
     * Gets the 'liip_imagine.form.type.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Form\Type\ImageType A Liip\ImagineBundle\Form\Type\ImageType instance
     */
    protected function getLiipImagine_Form_Type_ImageService()
    {
        return $this->services['liip_imagine.form.type.image'] = new \Liip\ImagineBundle\Form\Type\ImageType();
    }

    /**
     * Gets the 'liip_imagine.mime_type_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface A Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface instance
     */
    protected function getLiipImagine_MimeTypeGuesserService()
    {
        return $this->services['liip_imagine.mime_type_guesser'] = \Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesser::getInstance();
    }

    /**
     * Gets the 'liip_imagine.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Templating\Helper\ImagineHelper A Liip\ImagineBundle\Templating\Helper\ImagineHelper instance
     */
    protected function getLiipImagine_Templating_HelperService()
    {
        return $this->services['liip_imagine.templating.helper'] = new \Liip\ImagineBundle\Templating\Helper\ImagineHelper($this->get('liip_imagine.cache.manager'));
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'en', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\RotatingFileHandler A Monolog\Handler\RotatingFileHandler instance
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\RotatingFileHandler(($this->targetDirs[2].'/logs/dev.log'), 0, 100, true, NULL);

        $instance->setFilenameFormat('{filename}-{date}', 'Y-m-d');

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.assetic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.bazinga_geocoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_BazingaGeocoderService()
    {
        $this->services['monolog.logger.bazinga_geocoder'] = $instance = new \Symfony\Bridge\Monolog\Logger('bazinga_geocoder');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'oneup_uploader.chunk_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Chunk\ChunkManager A Oneup\UploaderBundle\Uploader\Chunk\ChunkManager instance
     */
    protected function getOneupUploader_ChunkManagerService()
    {
        return $this->services['oneup_uploader.chunk_manager'] = new \Oneup\UploaderBundle\Uploader\Chunk\ChunkManager(array('maxage' => 604800, 'storage' => array('type' => 'filesystem', 'filesystem' => NULL, 'directory' => (__DIR__.'/uploader/chunks'), 'stream_wrapper' => NULL, 'sync_buffer_size' => '100K', 'prefix' => 'chunks'), 'load_distribution' => true), $this->get('oneup_uploader.chunks_storage'));
    }

    /**
     * Gets the 'oneup_uploader.chunks_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Chunk\Storage\FilesystemStorage A Oneup\UploaderBundle\Uploader\Chunk\Storage\FilesystemStorage instance
     */
    protected function getOneupUploader_ChunksStorageService()
    {
        return $this->services['oneup_uploader.chunks_storage'] = new \Oneup\UploaderBundle\Uploader\Chunk\Storage\FilesystemStorage((__DIR__.'/uploader/chunks'));
    }

    /**
     * Gets the 'oneup_uploader.controller.listing_images' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Controller\BlueimpController A Oneup\UploaderBundle\Controller\BlueimpController instance
     */
    protected function getOneupUploader_Controller_ListingImagesService()
    {
        return $this->services['oneup_uploader.controller.listing_images'] = new \Oneup\UploaderBundle\Controller\BlueimpController($this, $this->get('oneup_uploader.storage.listing_images'), $this->get('oneup_uploader.error_handler.blueimp'), array('max_size' => 10000000, 'frontend' => 'blueimp', 'allowed_mimetypes' => array(0 => 'image/gif', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/png'), 'enable_progress' => true, 'namer' => 'cocorico.namer.image_namer', 'storage' => array('directory' => ($this->targetDirs[2].'/../web/uploads/listings/images'), 'service' => NULL, 'type' => 'filesystem', 'filesystem' => NULL, 'stream_wrapper' => NULL, 'sync_buffer_size' => '100K'), 'custom_frontend' => array('name' => NULL, 'class' => NULL), 'route_prefix' => '', 'disallowed_mimetypes' => array(), 'error_handler' => NULL, 'use_orphanage' => false, 'enable_cancelation' => false, 'root_folder' => false), 'listing_images');
    }

    /**
     * Gets the 'oneup_uploader.controller.user_images' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Controller\BlueimpController A Oneup\UploaderBundle\Controller\BlueimpController instance
     */
    protected function getOneupUploader_Controller_UserImagesService()
    {
        return $this->services['oneup_uploader.controller.user_images'] = new \Oneup\UploaderBundle\Controller\BlueimpController($this, $this->get('oneup_uploader.storage.user_images'), $this->get('oneup_uploader.error_handler.blueimp'), array('max_size' => 8000000, 'frontend' => 'blueimp', 'allowed_mimetypes' => array(0 => 'image/gif', 1 => 'image/jpeg', 2 => 'image/png'), 'enable_progress' => true, 'namer' => 'cocorico.namer.image_namer', 'storage' => array('directory' => ($this->targetDirs[2].'/../web/uploads/users/images'), 'service' => NULL, 'type' => 'filesystem', 'filesystem' => NULL, 'stream_wrapper' => NULL, 'sync_buffer_size' => '100K'), 'custom_frontend' => array('name' => NULL, 'class' => NULL), 'route_prefix' => '', 'disallowed_mimetypes' => array(), 'error_handler' => NULL, 'use_orphanage' => false, 'enable_cancelation' => false, 'root_folder' => false), 'user_images');
    }

    /**
     * Gets the 'oneup_uploader.namer.uniqid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Naming\UniqidNamer A Oneup\UploaderBundle\Uploader\Naming\UniqidNamer instance
     */
    protected function getOneupUploader_Namer_UniqidService()
    {
        return $this->services['oneup_uploader.namer.uniqid'] = new \Oneup\UploaderBundle\Uploader\Naming\UniqidNamer();
    }

    /**
     * Gets the 'oneup_uploader.namer.urlsafe' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Naming\UrlSafeNamer A Oneup\UploaderBundle\Uploader\Naming\UrlSafeNamer instance
     */
    protected function getOneupUploader_Namer_UrlsafeService()
    {
        return $this->services['oneup_uploader.namer.urlsafe'] = new \Oneup\UploaderBundle\Uploader\Naming\UrlSafeNamer();
    }

    /**
     * Gets the 'oneup_uploader.orphanage_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Orphanage\OrphanageManager A Oneup\UploaderBundle\Uploader\Orphanage\OrphanageManager instance
     */
    protected function getOneupUploader_OrphanageManagerService()
    {
        return $this->services['oneup_uploader.orphanage_manager'] = new \Oneup\UploaderBundle\Uploader\Orphanage\OrphanageManager($this, array('maxage' => 604800, 'directory' => (__DIR__.'/uploader/orphanage')));
    }

    /**
     * Gets the 'oneup_uploader.routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Routing\RouteLoader A Oneup\UploaderBundle\Routing\RouteLoader instance
     */
    protected function getOneupUploader_Routing_LoaderService()
    {
        return $this->services['oneup_uploader.routing.loader'] = new \Oneup\UploaderBundle\Routing\RouteLoader(array('listing_images' => array(0 => 'oneup_uploader.controller.listing_images', 1 => array('enable_progress' => true, 'enable_cancelation' => false, 'route_prefix' => '')), 'user_images' => array(0 => 'oneup_uploader.controller.user_images', 1 => array('enable_progress' => true, 'enable_cancelation' => false, 'route_prefix' => ''))));
    }

    /**
     * Gets the 'oneup_uploader.storage.listing_images' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage A Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage instance
     */
    protected function getOneupUploader_Storage_ListingImagesService()
    {
        return $this->services['oneup_uploader.storage.listing_images'] = new \Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage(($this->targetDirs[2].'/../web/uploads/listings/images'));
    }

    /**
     * Gets the 'oneup_uploader.storage.user_images' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage A Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage instance
     */
    protected function getOneupUploader_Storage_UserImagesService()
    {
        return $this->services['oneup_uploader.storage.user_images'] = new \Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage(($this->targetDirs[2].'/../web/uploads/users/images'));
    }

    /**
     * Gets the 'oneup_uploader.templating.uploader_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Templating\Helper\UploaderHelper A Oneup\UploaderBundle\Templating\Helper\UploaderHelper instance
     */
    protected function getOneupUploader_Templating_UploaderHelperService()
    {
        return $this->services['oneup_uploader.templating.uploader_helper'] = new \Oneup\UploaderBundle\Templating\Helper\UploaderHelper($this->get('router'), array('listing_images' => '10000000', 'user_images' => '8000000'));
    }

    /**
     * Gets the 'oneup_uploader.twig.extension.uploader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Twig\Extension\UploaderExtension A Oneup\UploaderBundle\Twig\Extension\UploaderExtension instance
     */
    protected function getOneupUploader_Twig_Extension_UploaderService()
    {
        return $this->services['oneup_uploader.twig.extension.uploader'] = new \Oneup\UploaderBundle\Twig\Extension\UploaderExtension($this->get('oneup_uploader.templating.uploader_helper'));
    }

    /**
     * Gets the 'oneup_uploader.validation_listener.allowed_mimetype' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\EventListener\AllowedMimetypeValidationListener A Oneup\UploaderBundle\EventListener\AllowedMimetypeValidationListener instance
     */
    protected function getOneupUploader_ValidationListener_AllowedMimetypeService()
    {
        return $this->services['oneup_uploader.validation_listener.allowed_mimetype'] = new \Oneup\UploaderBundle\EventListener\AllowedMimetypeValidationListener();
    }

    /**
     * Gets the 'oneup_uploader.validation_listener.disallowed_mimetype' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\EventListener\DisallowedMimetypeValidationListener A Oneup\UploaderBundle\EventListener\DisallowedMimetypeValidationListener instance
     */
    protected function getOneupUploader_ValidationListener_DisallowedMimetypeService()
    {
        return $this->services['oneup_uploader.validation_listener.disallowed_mimetype'] = new \Oneup\UploaderBundle\EventListener\DisallowedMimetypeValidationListener();
    }

    /**
     * Gets the 'oneup_uploader.validation_listener.max_size' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\EventListener\MaxSizeValidationListener A Oneup\UploaderBundle\EventListener\MaxSizeValidationListener instance
     */
    protected function getOneupUploader_ValidationListener_MaxSizeService()
    {
        return $this->services['oneup_uploader.validation_listener.max_size'] = new \Oneup\UploaderBundle\EventListener\MaxSizeValidationListener();
    }

    /**
     * Gets the 'payment.form.choose_payment_method_transformer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Payment\CoreBundle\Form\Transformer\ChoosePaymentMethodTransformer A JMS\Payment\CoreBundle\Form\Transformer\ChoosePaymentMethodTransformer instance
     */
    protected function getPayment_Form_ChoosePaymentMethodTransformerService()
    {
        return $this->services['payment.form.choose_payment_method_transformer'] = new \JMS\Payment\CoreBundle\Form\Transformer\ChoosePaymentMethodTransformer();
    }

    /**
     * Gets the 'payment.form.choose_payment_method_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Payment\CoreBundle\Form\ChoosePaymentMethodType A JMS\Payment\CoreBundle\Form\ChoosePaymentMethodType instance
     */
    protected function getPayment_Form_ChoosePaymentMethodTypeService()
    {
        $this->services['payment.form.choose_payment_method_type'] = $instance = new \JMS\Payment\CoreBundle\Form\ChoosePaymentMethodType($this->get('payment.plugin_controller'), array('paypal_express_checkout' => 'paypal_express_checkout'));

        $instance->setDataTransformer($this->get('payment.form.choose_payment_method_transformer'));

        return $instance;
    }

    /**
     * Gets the 'payment.form.paypal_express_checkout_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Payment\PaypalBundle\Form\ExpressCheckoutType A JMS\Payment\PaypalBundle\Form\ExpressCheckoutType instance
     */
    protected function getPayment_Form_PaypalExpressCheckoutTypeService()
    {
        return $this->services['payment.form.paypal_express_checkout_type'] = new \JMS\Payment\PaypalBundle\Form\ExpressCheckoutType();
    }

    /**
     * Gets the 'payment.paypal.authentication_strategy.token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Payment\PaypalBundle\Client\Authentication\TokenAuthenticationStrategy A JMS\Payment\PaypalBundle\Client\Authentication\TokenAuthenticationStrategy instance
     */
    protected function getPayment_Paypal_AuthenticationStrategy_TokenService()
    {
        return $this->services['payment.paypal.authentication_strategy.token'] = new \JMS\Payment\PaypalBundle\Client\Authentication\TokenAuthenticationStrategy('admin@koduteenus.online', 'cocorico', 'access_token$sandbox$f2w97x7m8z2f87w8$437facced3d661be48193da7568d83a9');
    }

    /**
     * Gets the 'payment.paypal.client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Payment\PaypalBundle\Client\Client A JMS\Payment\PaypalBundle\Client\Client instance
     */
    protected function getPayment_Paypal_ClientService()
    {
        return $this->services['payment.paypal.client'] = new \JMS\Payment\PaypalBundle\Client\Client($this->get('payment.paypal.authentication_strategy.token'), true);
    }

    /**
     * Gets the 'payment.plugin.paypal_express_checkout' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Payment\PaypalBundle\Plugin\ExpressCheckoutPlugin A JMS\Payment\PaypalBundle\Plugin\ExpressCheckoutPlugin instance
     */
    protected function getPayment_Plugin_PaypalExpressCheckoutService()
    {
        return $this->services['payment.plugin.paypal_express_checkout'] = new \JMS\Payment\PaypalBundle\Plugin\ExpressCheckoutPlugin(NULL, NULL, $this->get('payment.paypal.client'), NULL, NULL);
    }

    /**
     * Gets the 'payment.plugin_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Payment\CoreBundle\PluginController\EntityPluginController A JMS\Payment\CoreBundle\PluginController\EntityPluginController instance
     */
    protected function getPayment_PluginControllerService()
    {
        $this->services['payment.plugin_controller'] = $instance = new \JMS\Payment\CoreBundle\PluginController\EntityPluginController($this->get('doctrine.orm.default_entity_manager'), array('result_class' => 'JMS\\Payment\\CoreBundle\\PluginController\\Result', 'payment_instruction_class' => 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction', 'payment_class' => 'JMS\\Payment\\CoreBundle\\Entity\\Payment', 'financial_transaction_class' => 'JMS\\Payment\\CoreBundle\\Entity\\FinancialTransaction', 'credit_class' => 'JMS\\Payment\\CoreBundle\\Entity\\Credit'), $this->get('debug.event_dispatcher'));

        $instance->addPlugin($this->get('payment.plugin.paypal_express_checkout'));

        return $instance;
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $c->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $d = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $d->setKernel($b);
        }

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler'), '', '', 86400), $a);

        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add($this->get('data_collector.form'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.translation'));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy'), $this->get('security.logout_url_generator')));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector($this->get('twig.profile')));
        $instance->add($c);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(new \Bazinga\Bundle\GeocoderBundle\DataCollector\GeocoderDataCollector($this->get('bazinga_geocoder.logger')));
        $instance->add($this->get('doctrine_mongodb.odm.data_collector.pretty'));
        $instance->add(new \Sonata\BlockBundle\Profiler\DataCollector\BlockDataCollector($this->get('sonata.block.templating.helper'), array(0 => 'sonata.block.service.container', 1 => 'sonata.page.block.container', 2 => 'cmf.block.container', 3 => 'cmf.block.slideshow')));
        $instance->add($d);

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), $this->get('request_stack'), NULL, false, false);
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     * @deprecated The "request" service is deprecated since Symfony 2.7 and will be removed in 3.0. Use the "request_stack" service instead.
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\I18nRoutingBundle\Router\I18nRouter A JMS\I18nRoutingBundle\Router\I18nRouter instance
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \JMS\I18nRoutingBundle\Router\I18nRouter($this, ($this->targetDirs[2].'/config/routing_dev.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setLocaleResolver($this->get('jms_i18n_routing.locale_resolver.default'));
        $instance->setI18nLoaderId('jms_i18n_routing.loader');
        $instance->setDefaultLocale('en');
        $instance->setRedirectToHost(true);

        return $instance;
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('request_stack'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader($this->get('cocorico.extra_bundle.routing_loader'));
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader($this->get('oneup_uploader.routing.loader'));
        $d->addLoader($this->get('sonata.admin.route_loader'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $d);
    }

    /**
     * Gets the 'security.authentication.guard_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler A Symfony\Component\Security\Guard\GuardAuthenticatorHandler instance
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance
     *
     * @deprecated The "security.context" service is deprecated since Symfony 2.6 and will be removed in 3.0.
     */
    protected function getSecurity_ContextService()
    {
        @trigger_error('The "security.context" service is deprecated since Symfony 2.6 and will be removed in 3.0.', E_USER_DEPRECATED);

        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.admin' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(en|ee)'), 'security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|bundles|css|images|js)/'))), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_AdminService()
    {
        $a = $this->get('security.token_storage');
        $b = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $c = $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('security.http_utils');
        $e = $this->get('http_kernel');
        $f = $this->get('security.authentication.manager');

        $g = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $d, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($d, '/admin/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/admin/logout'));
        $g->addHandler($this->get('security.logout.handler.session'));

        $h = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($d, array());
        $h->setOptions(array('login_path' => '/admin/login', 'default_target_path' => '/admin/', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $h->setProviderKey('admin');

        $i = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $d, array(), $b);
        $i->setOptions(array('login_path' => '/admin/login', 'failure_path' => '/admin/login', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('cocorico_user.user_manager')), 'admin', $b, $c), 2 => $g, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $f, $this->get('security.authentication.session_strategy'), $d, 'admin', $h, $i, array('use_forward' => false, 'check_path' => '/admin/login_check', 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $b, $c, NULL), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '5ba1b840292636.81391813', $b, $f), 5 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $d, 'admin', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $d, '/admin/login', false), NULL, NULL, $b, false));
    }

    /**
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.token_storage');
        $b = $this->get('cocorico_user.user_manager');
        $c = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('security.http_utils');
        $f = $this->get('http_kernel');
        $g = $this->get('security.authentication.manager');
        $h = $this->get('security.authentication.session_strategy');

        $i = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $e, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($e, 'cocorico_home'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'cocorico_user_logout'));
        $i->addHandler($this->get('security.logout.handler.session'));

        $j = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($f, $e, array(), $c);
        $j->setOptions(array('login_path' => 'cocorico_user_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        $k = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($e, array());
        $k->setOptions(array('login_path' => 'cocorico_user_login', 'use_referer' => true, 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path'));
        $k->setProviderKey('main');

        $l = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($f, $e, array(), $c);
        $l->setOptions(array('login_path' => 'cocorico_user_login', 'failure_path' => 'cocorico_user_login', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        $m = new \HWI\Bundle\OAuthBundle\Security\Http\Firewall\OAuthListener($a, $g, $h, $e, 'main', $k, $l, array('check_path' => 'cocorico_user_login_check', 'use_forward' => false, 'require_previous_session' => true), $c, $d);
        $m->setResourceOwnerMap($this->get('hwi_oauth.resource_ownermap.main'));
        $m->setCheckPaths(array(0 => '/en/oauth/fb-login'));

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $b), 'frontend', $c, $d), 2 => $i, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $g, $h, $e, 'main', new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler($this->get('cocorico.authentication_success_listener'), array('login_path' => 'cocorico_user_login', 'use_referer' => true, 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => 'redirect_to'), 'main'), $j, array('csrf_parameter' => '_token', 'csrf_token_id' => 'authentication', 'check_path' => 'cocorico_user_login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'post_only' => true), $c, $d, $this->get('security.csrf.token_manager')), 4 => $m, 5 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '5ba1b840292636.81391813', $c, $g), 6 => new \Symfony\Component\Security\Http\Firewall\SwitchUserListener($a, $b, $this->get('security.user_checker.admin'), 'main', $this->get('security.access.decision_manager'), $c, '_become_who_you_are', 'ROLE_SUPER_ADMIN', $d), 7 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $e, 'main', new \HWI\Bundle\OAuthBundle\Security\Http\EntryPoint\OAuthEntryPoint($f, $e, 'cocorico_user_login', false), NULL, NULL, $c, false));
    }

    /**
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance
     *
     * @deprecated The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.
     */
    protected function getSecurity_SecureRandomService()
    {
        @trigger_error('The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.', E_USER_DEPRECATED);

        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom();
    }

    /**
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the 'security.user_checker.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance
     */
    protected function getSecurity_UserChecker_AdminService()
    {
        return $this->services['security.user_checker.admin'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio_distribution.security_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\SecurityChecker A SensioLabs\Security\SecurityChecker instance
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the 'sensio_distribution.security_checker.command' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand A SensioLabs\Security\Command\SecurityCheckerCommand instance
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand($this->get('sensio_distribution.security_checker'));
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('cocorico.listing_param_converter'), 0, 'listing');
        $instance->add($this->get('cocorico.listing_availability_param_converter'), -1, 'listing_availability');
        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('name' => '_csess', 'cookie_httponly' => true, 'gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'simplethings_entityaudit.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SimpleThings\EntityAudit\AuditConfiguration A SimpleThings\EntityAudit\AuditConfiguration instance
     */
    protected function getSimplethingsEntityaudit_ConfigService()
    {
        $this->services['simplethings_entityaudit.config'] = $instance = new \SimpleThings\EntityAudit\AuditConfiguration();

        $instance->setAuditedEntityClasses(array(0 => 'CocoricoConfigBundle\\Entity\\Parameter', 1 => 'Cocorico\\ConfigBundle\\Entity\\Parameter'));
        $instance->setGlobalIgnoreColumns(array());
        $instance->setTablePrefix('');
        $instance->setTableSuffix('_audit');
        $instance->setRevisionTableName('revisions');
        $instance->setRevisionIdFieldType('integer');
        $instance->setRevisionFieldName('rev');
        $instance->setRevisionTypeFieldName('revtype');
        $instance->setUsernameCallable($this->get('simplethings_entityaudit.username_callable.token_storage'));

        return $instance;
    }

    /**
     * Gets the 'simplethings_entityaudit.create_schema_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SimpleThings\EntityAudit\EventListener\CreateSchemaListener A SimpleThings\EntityAudit\EventListener\CreateSchemaListener instance
     */
    protected function getSimplethingsEntityaudit_CreateSchemaListenerService()
    {
        return $this->services['simplethings_entityaudit.create_schema_listener'] = new \SimpleThings\EntityAudit\EventListener\CreateSchemaListener($this->get('simplethings_entityaudit.manager'));
    }

    /**
     * Gets the 'simplethings_entityaudit.log_revisions_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SimpleThings\EntityAudit\EventListener\LogRevisionsListener A SimpleThings\EntityAudit\EventListener\LogRevisionsListener instance
     */
    protected function getSimplethingsEntityaudit_LogRevisionsListenerService()
    {
        return $this->services['simplethings_entityaudit.log_revisions_listener'] = new \SimpleThings\EntityAudit\EventListener\LogRevisionsListener($this->get('simplethings_entityaudit.manager'));
    }

    /**
     * Gets the 'simplethings_entityaudit.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SimpleThings\EntityAudit\AuditManager A SimpleThings\EntityAudit\AuditManager instance
     */
    protected function getSimplethingsEntityaudit_ManagerService()
    {
        return $this->services['simplethings_entityaudit.manager'] = new \SimpleThings\EntityAudit\AuditManager($this->get('simplethings_entityaudit.config'));
    }

    /**
     * Gets the 'simplethings_entityaudit.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SimpleThings\EntityAudit\AuditReader A SimpleThings\EntityAudit\AuditReader instance
     */
    protected function getSimplethingsEntityaudit_ReaderService()
    {
        return $this->services['simplethings_entityaudit.reader'] = $this->get('simplethings_entityaudit.manager')->createAuditReader($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'simplethings_entityaudit.username_callable.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SimpleThings\EntityAudit\User\TokenStorageUsernameCallable A SimpleThings\EntityAudit\User\TokenStorageUsernameCallable instance
     */
    protected function getSimplethingsEntityaudit_UsernameCallable_TokenStorageService()
    {
        return $this->services['simplethings_entityaudit.username_callable.token_storage'] = new \SimpleThings\EntityAudit\User\TokenStorageUsernameCallable($this);
    }

    /**
     * Gets the 'sonata.admin.audit.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Model\AuditManager A Sonata\AdminBundle\Model\AuditManager instance
     */
    protected function getSonata_Admin_Audit_ManagerService()
    {
        $this->services['sonata.admin.audit.manager'] = $instance = new \Sonata\AdminBundle\Model\AuditManager($this);

        $instance->setReader('sonata.admin.audit.orm.reader', array(0 => 'CocoricoConfigBundle\\Entity\\Parameter', 1 => 'Cocorico\\ConfigBundle\\Entity\\Parameter'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.audit.orm.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Model\AuditReader A Sonata\DoctrineORMAdminBundle\Model\AuditReader instance
     */
    protected function getSonata_Admin_Audit_Orm_ReaderService()
    {
        return $this->services['sonata.admin.audit.orm.reader'] = new \Sonata\DoctrineORMAdminBundle\Model\AuditReader($this->get('simplethings_entityaudit.reader', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.admin.block.admin_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Block\AdminListBlockService A Sonata\AdminBundle\Block\AdminListBlockService instance
     */
    protected function getSonata_Admin_Block_AdminListService()
    {
        return $this->services['sonata.admin.block.admin_list'] = new \Sonata\AdminBundle\Block\AdminListBlockService('sonata.admin.block.admin_list', $this->get('templating'), $this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.block.search_result' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Block\AdminSearchBlockService A Sonata\AdminBundle\Block\AdminSearchBlockService instance
     */
    protected function getSonata_Admin_Block_SearchResultService()
    {
        return $this->services['sonata.admin.block.search_result'] = new \Sonata\AdminBundle\Block\AdminSearchBlockService('sonata.admin.block.search_result', $this->get('templating'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.search.handler'));
    }

    /**
     * Gets the 'sonata.admin.booking' service.
     *
     * @return \Cocorico\CoreBundle\Admin\BookingAdmin A Cocorico\CoreBundle\Admin\BookingAdmin instance
     */
    protected function getSonata_Admin_BookingService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\BookingAdmin('sonata.admin.booking', 'Cocorico\\CoreBundle\\Entity\\Booking', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales(array(0 => 'en', 1 => 'ee'));
        $instance->setTimeUnit(60);
        $instance->setBookingExpirationDelay(2880);
        $instance->setBookingAcceptationDelay(240);
        $instance->setIncludeVat(false);
        $instance->setBundlesEnabled(array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle', 'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle', 'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle', 'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle', 'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\JMSPaymentCoreBundle', 'JMSPaymentPaypalBundle' => 'JMS\\Payment\\PaypalBundle\\JMSPaymentPaypalBundle', 'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\LexikCurrencyBundle', 'BazingaGeocoderBundle' => 'Bazinga\\Bundle\\GeocoderBundle\\BazingaGeocoderBundle', 'DoctrineMongoDBBundle' => 'Doctrine\\Bundle\\MongoDBBundle\\DoctrineMongoDBBundle', 'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle', 'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle', 'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle', 'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle', 'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle', 'FOSMessageBundle' => 'FOS\\MessageBundle\\FOSMessageBundle', 'WhiteOctoberBreadcrumbsBundle' => 'WhiteOctober\\BreadcrumbsBundle\\WhiteOctoberBreadcrumbsBundle', 'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle', 'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle', 'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'SimpleThingsEntityAuditBundle' => 'SimpleThings\\EntityAudit\\SimpleThingsEntityAuditBundle', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\CocoricoCoreBundle', 'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\CocoricoGeoBundle', 'CocoricoUserBundle' => 'Cocorico\\UserBundle\\CocoricoUserBundle', 'CocoricoPageBundle' => 'Cocorico\\PageBundle\\CocoricoPageBundle', 'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\CocoricoCMSBundle', 'CocoricoBreadcrumbBundle' => 'Cocorico\\BreadcrumbBundle\\CocoricoBreadcrumbBundle', 'CocoricoSonataAdminBundle' => 'Cocorico\\SonataAdminBundle\\CocoricoSonataAdminBundle', 'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\CocoricoMessageBundle', 'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\CocoricoContactBundle', 'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\CocoricoReviewBundle', 'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\CocoricoConfigBundle', 'TroopersMangopayBundle' => 'Troopers\\MangopayBundle\\TroopersMangopayBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'DeployBundle' => 'Hpatoio\\DeployBundle\\DeployBundle'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Bookings');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.booking_bank_wire' service.
     *
     * @return \Cocorico\CoreBundle\Admin\BookingBankWireAdmin A Cocorico\CoreBundle\Admin\BookingBankWireAdmin instance
     */
    protected function getSonata_Admin_BookingBankWireService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\BookingBankWireAdmin('sonata.admin.booking_bank_wire', 'Cocorico\\CoreBundle\\Entity\\BookingBankWire', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales(array(0 => 'en', 1 => 'ee'));
        $instance->setTimeUnit(60);
        $instance->setCurrency('EUR');
        $instance->setBookingBankWireManager($this->get('cocorico.booking_bank_wire.manager'));
        $instance->setBundlesEnabled(array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle', 'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle', 'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle', 'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle', 'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\JMSPaymentCoreBundle', 'JMSPaymentPaypalBundle' => 'JMS\\Payment\\PaypalBundle\\JMSPaymentPaypalBundle', 'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\LexikCurrencyBundle', 'BazingaGeocoderBundle' => 'Bazinga\\Bundle\\GeocoderBundle\\BazingaGeocoderBundle', 'DoctrineMongoDBBundle' => 'Doctrine\\Bundle\\MongoDBBundle\\DoctrineMongoDBBundle', 'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle', 'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle', 'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle', 'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle', 'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle', 'FOSMessageBundle' => 'FOS\\MessageBundle\\FOSMessageBundle', 'WhiteOctoberBreadcrumbsBundle' => 'WhiteOctober\\BreadcrumbsBundle\\WhiteOctoberBreadcrumbsBundle', 'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle', 'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle', 'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'SimpleThingsEntityAuditBundle' => 'SimpleThings\\EntityAudit\\SimpleThingsEntityAuditBundle', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\CocoricoCoreBundle', 'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\CocoricoGeoBundle', 'CocoricoUserBundle' => 'Cocorico\\UserBundle\\CocoricoUserBundle', 'CocoricoPageBundle' => 'Cocorico\\PageBundle\\CocoricoPageBundle', 'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\CocoricoCMSBundle', 'CocoricoBreadcrumbBundle' => 'Cocorico\\BreadcrumbBundle\\CocoricoBreadcrumbBundle', 'CocoricoSonataAdminBundle' => 'Cocorico\\SonataAdminBundle\\CocoricoSonataAdminBundle', 'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\CocoricoMessageBundle', 'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\CocoricoContactBundle', 'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\CocoricoReviewBundle', 'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\CocoricoConfigBundle', 'TroopersMangopayBundle' => 'Troopers\\MangopayBundle\\TroopersMangopayBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'DeployBundle' => 'Hpatoio\\DeployBundle\\DeployBundle'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Bank Wires');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.booking_payin_refund' service.
     *
     * @return \Cocorico\CoreBundle\Admin\BookingPayinRefundAdmin A Cocorico\CoreBundle\Admin\BookingPayinRefundAdmin instance
     */
    protected function getSonata_Admin_BookingPayinRefundService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\BookingPayinRefundAdmin('sonata.admin.booking_payin_refund', 'Cocorico\\CoreBundle\\Entity\\BookingPayinRefund', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales(array(0 => 'en', 1 => 'ee'));
        $instance->setTimeUnit(60);
        $instance->setBundlesEnabled(array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle', 'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle', 'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle', 'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle', 'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\JMSPaymentCoreBundle', 'JMSPaymentPaypalBundle' => 'JMS\\Payment\\PaypalBundle\\JMSPaymentPaypalBundle', 'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\LexikCurrencyBundle', 'BazingaGeocoderBundle' => 'Bazinga\\Bundle\\GeocoderBundle\\BazingaGeocoderBundle', 'DoctrineMongoDBBundle' => 'Doctrine\\Bundle\\MongoDBBundle\\DoctrineMongoDBBundle', 'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle', 'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle', 'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle', 'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle', 'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle', 'FOSMessageBundle' => 'FOS\\MessageBundle\\FOSMessageBundle', 'WhiteOctoberBreadcrumbsBundle' => 'WhiteOctober\\BreadcrumbsBundle\\WhiteOctoberBreadcrumbsBundle', 'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle', 'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle', 'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'SimpleThingsEntityAuditBundle' => 'SimpleThings\\EntityAudit\\SimpleThingsEntityAuditBundle', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\CocoricoCoreBundle', 'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\CocoricoGeoBundle', 'CocoricoUserBundle' => 'Cocorico\\UserBundle\\CocoricoUserBundle', 'CocoricoPageBundle' => 'Cocorico\\PageBundle\\CocoricoPageBundle', 'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\CocoricoCMSBundle', 'CocoricoBreadcrumbBundle' => 'Cocorico\\BreadcrumbBundle\\CocoricoBreadcrumbBundle', 'CocoricoSonataAdminBundle' => 'Cocorico\\SonataAdminBundle\\CocoricoSonataAdminBundle', 'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\CocoricoMessageBundle', 'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\CocoricoContactBundle', 'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\CocoricoReviewBundle', 'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\CocoricoConfigBundle', 'TroopersMangopayBundle' => 'Troopers\\MangopayBundle\\TroopersMangopayBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'DeployBundle' => 'Hpatoio\\DeployBundle\\DeployBundle'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Payin Refunds');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.builder.filter.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Filter\FilterFactory A Sonata\AdminBundle\Filter\FilterFactory instance
     */
    protected function getSonata_Admin_Builder_Filter_FactoryService()
    {
        return $this->services['sonata.admin.builder.filter.factory'] = new \Sonata\AdminBundle\Filter\FilterFactory($this, array('doctrine_orm_boolean' => 'sonata.admin.orm.filter.type.boolean', 'doctrine_orm_callback' => 'sonata.admin.orm.filter.type.callback', 'doctrine_orm_choice' => 'sonata.admin.orm.filter.type.choice', 'doctrine_orm_model' => 'sonata.admin.orm.filter.type.model', 'doctrine_orm_string' => 'sonata.admin.orm.filter.type.string', 'doctrine_orm_number' => 'sonata.admin.orm.filter.type.number', 'doctrine_orm_date' => 'sonata.admin.orm.filter.type.date', 'doctrine_orm_date_range' => 'sonata.admin.orm.filter.type.date_range', 'doctrine_orm_datetime' => 'sonata.admin.orm.filter.type.datetime', 'doctrine_orm_time' => 'sonata.admin.orm.filter.type.time', 'doctrine_orm_datetime_range' => 'sonata.admin.orm.filter.type.datetime_range', 'doctrine_orm_class' => 'sonata.admin.orm.filter.type.class'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_datagrid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder A Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder instance
     */
    protected function getSonata_Admin_Builder_OrmDatagridService()
    {
        return $this->services['sonata.admin.builder.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder($this->get('form.factory'), $this->get('sonata.admin.builder.filter.factory'), $this->get('sonata.admin.guesser.orm_datagrid_chain'), true);
    }

    /**
     * Gets the 'sonata.admin.builder.orm_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\FormContractor A Sonata\DoctrineORMAdminBundle\Builder\FormContractor instance
     */
    protected function getSonata_Admin_Builder_OrmFormService()
    {
        return $this->services['sonata.admin.builder.orm_form'] = new \Sonata\DoctrineORMAdminBundle\Builder\FormContractor($this->get('form.factory'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder A Sonata\DoctrineORMAdminBundle\Builder\ListBuilder instance
     */
    protected function getSonata_Admin_Builder_OrmListService()
    {
        return $this->services['sonata.admin.builder.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder($this->get('sonata.admin.guesser.orm_list_chain'), array('array' => 'SonataAdminBundle:CRUD:list_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:list_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:list_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'email' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'integer' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:list_url.html.twig', 'html' => 'SonataAdminBundle:CRUD:list_html.html.twig'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_show' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder A Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder instance
     */
    protected function getSonata_Admin_Builder_OrmShowService()
    {
        return $this->services['sonata.admin.builder.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder($this->get('sonata.admin.guesser.orm_show_chain'), array('array' => 'SonataAdminBundle:CRUD:show_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:show_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:show_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'currency' => 'SonataAdminBundle:CRUD:show_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:show_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:show_url.html.twig', 'html' => 'SonataAdminBundle:CRUD:show_html.html.twig'));
    }

    /**
     * Gets the 'sonata.admin.contact' service.
     *
     * @return \Cocorico\ContactBundle\Admin\ContactAdmin A Cocorico\ContactBundle\Admin\ContactAdmin instance
     */
    protected function getSonata_Admin_ContactService()
    {
        $instance = new \Cocorico\ContactBundle\Admin\ContactAdmin('sonata.admin.contact', 'Cocorico\\ContactBundle\\Entity\\Contact', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Contact');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.controller.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Controller\HelperController A Sonata\AdminBundle\Controller\HelperController instance
     */
    protected function getSonata_Admin_Controller_AdminService()
    {
        return $this->services['sonata.admin.controller.admin'] = new \Sonata\AdminBundle\Controller\HelperController($this->get('twig'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.helper'), $this->get('validator'));
    }

    /**
     * Gets the 'sonata.admin.event.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Event\AdminEventExtension A Sonata\AdminBundle\Event\AdminEventExtension instance
     */
    protected function getSonata_Admin_Event_ExtensionService()
    {
        return $this->services['sonata.admin.event.extension'] = new \Sonata\AdminBundle\Event\AdminEventExtension($this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'sonata.admin.exporter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Export\Exporter A Sonata\AdminBundle\Export\Exporter instance
     */
    protected function getSonata_Admin_ExporterService()
    {
        return $this->services['sonata.admin.exporter'] = new \Sonata\AdminBundle\Export\Exporter();
    }

    /**
     * Gets the 'sonata.admin.footer' service.
     *
     * @return \Cocorico\CMSBundle\Admin\FooterAdmin A Cocorico\CMSBundle\Admin\FooterAdmin instance
     */
    protected function getSonata_Admin_FooterService()
    {
        $instance = new \Cocorico\CMSBundle\Admin\FooterAdmin('sonata.admin.footer', 'Cocorico\\CMSBundle\\Entity\\Footer', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales(array(0 => 'en', 1 => 'ee'));
        $instance->setFooterManager($this->get('cocorico_cms.footer.manager'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Footers');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.form.extension.field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension A Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension instance
     */
    protected function getSonata_Admin_Form_Extension_FieldService()
    {
        return $this->services['sonata.admin.form.extension.field'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension(array('email' => '', 'textarea' => '', 'text' => '', 'choice' => '', 'integer' => '', 'datetime' => 'sonata-medium-date', 'date' => 'sonata-medium-date'));
    }

    /**
     * Gets the 'sonata.admin.form.extension.field.mopa' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension A Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension instance
     */
    protected function getSonata_Admin_Form_Extension_Field_MopaService()
    {
        return $this->services['sonata.admin.form.extension.field.mopa'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension();
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\ChoiceType A Sonata\AdminBundle\Form\Type\Filter\ChoiceType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_ChoiceService()
    {
        return $this->services['sonata.admin.form.filter.type.choice'] = new \Sonata\AdminBundle\Form\Type\Filter\ChoiceType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateType A Sonata\AdminBundle\Form\Type\Filter\DateType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DateService()
    {
        return $this->services['sonata.admin.form.filter.type.date'] = new \Sonata\AdminBundle\Form\Type\Filter\DateType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.daterange' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateRangeType A Sonata\AdminBundle\Form\Type\Filter\DateRangeType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DaterangeService()
    {
        return $this->services['sonata.admin.form.filter.type.daterange'] = new \Sonata\AdminBundle\Form\Type\Filter\DateRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeType A Sonata\AdminBundle\Form\Type\Filter\DateTimeType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.datetime_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType A Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeRangeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DefaultType A Sonata\AdminBundle\Form\Type\Filter\DefaultType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DefaultService()
    {
        return $this->services['sonata.admin.form.filter.type.default'] = new \Sonata\AdminBundle\Form\Type\Filter\DefaultType();
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\NumberType A Sonata\AdminBundle\Form\Type\Filter\NumberType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_NumberService()
    {
        return $this->services['sonata.admin.form.filter.type.number'] = new \Sonata\AdminBundle\Form\Type\Filter\NumberType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.type.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\AdminType A Sonata\AdminBundle\Form\Type\AdminType instance
     */
    protected function getSonata_Admin_Form_Type_AdminService()
    {
        return $this->services['sonata.admin.form.type.admin'] = new \Sonata\AdminBundle\Form\Type\AdminType();
    }

    /**
     * Gets the 'sonata.admin.form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\CollectionType A Sonata\AdminBundle\Form\Type\CollectionType instance
     */
    protected function getSonata_Admin_Form_Type_CollectionService()
    {
        return $this->services['sonata.admin.form.type.collection'] = new \Sonata\AdminBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelAutocompleteType A Sonata\AdminBundle\Form\Type\ModelAutocompleteType instance
     */
    protected function getSonata_Admin_Form_Type_ModelAutocompleteService()
    {
        return $this->services['sonata.admin.form.type.model_autocomplete'] = new \Sonata\AdminBundle\Form\Type\ModelAutocompleteType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelType A Sonata\AdminBundle\Form\Type\ModelType instance
     */
    protected function getSonata_Admin_Form_Type_ModelChoiceService()
    {
        return $this->services['sonata.admin.form.type.model_choice'] = new \Sonata\AdminBundle\Form\Type\ModelType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelHiddenType A Sonata\AdminBundle\Form\Type\ModelHiddenType instance
     */
    protected function getSonata_Admin_Form_Type_ModelHiddenService()
    {
        return $this->services['sonata.admin.form.type.model_hidden'] = new \Sonata\AdminBundle\Form\Type\ModelHiddenType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelTypeList A Sonata\AdminBundle\Form\Type\ModelTypeList instance
     */
    protected function getSonata_Admin_Form_Type_ModelListService()
    {
        return $this->services['sonata.admin.form.type.model_list'] = new \Sonata\AdminBundle\Form\Type\ModelTypeList();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_reference' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelReferenceType A Sonata\AdminBundle\Form\Type\ModelReferenceType instance
     */
    protected function getSonata_Admin_Form_Type_ModelReferenceService()
    {
        return $this->services['sonata.admin.form.type.model_reference'] = new \Sonata\AdminBundle\Form\Type\ModelReferenceType();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_datagrid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser instance
     */
    protected function getSonata_Admin_Guesser_OrmDatagridService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_datagrid_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance
     */
    protected function getSonata_Admin_Guesser_OrmDatagridChainService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_datagrid')));
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser instance
     */
    protected function getSonata_Admin_Guesser_OrmListService()
    {
        return $this->services['sonata.admin.guesser.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_list_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance
     */
    protected function getSonata_Admin_Guesser_OrmListChainService()
    {
        return $this->services['sonata.admin.guesser.orm_list_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_list')));
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_show' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser instance
     */
    protected function getSonata_Admin_Guesser_OrmShowService()
    {
        return $this->services['sonata.admin.guesser.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_show_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance
     */
    protected function getSonata_Admin_Guesser_OrmShowChainService()
    {
        return $this->services['sonata.admin.guesser.orm_show_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_show')));
    }

    /**
     * Gets the 'sonata.admin.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Admin\AdminHelper A Sonata\AdminBundle\Admin\AdminHelper instance
     */
    protected function getSonata_Admin_HelperService()
    {
        return $this->services['sonata.admin.helper'] = new \Sonata\AdminBundle\Admin\AdminHelper($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.label.strategy.bc' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy A Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_BcService()
    {
        return $this->services['sonata.admin.label.strategy.bc'] = new \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.form_component' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy A Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_FormComponentService()
    {
        return $this->services['sonata.admin.label.strategy.form_component'] = new \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy A Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_NativeService()
    {
        return $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy A Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_NoopService()
    {
        return $this->services['sonata.admin.label.strategy.noop'] = new \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.underscore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy A Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_UnderscoreService()
    {
        return $this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.listing' service.
     *
     * @return \Cocorico\CoreBundle\Admin\ListingAdmin A Cocorico\CoreBundle\Admin\ListingAdmin instance
     */
    protected function getSonata_Admin_ListingService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\ListingAdmin('sonata.admin.listing', 'Cocorico\\CoreBundle\\Entity\\Listing', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales(array(0 => 'en', 1 => 'ee'));
        $instance->setIncludeVat(false);
        $instance->setBundlesEnabled(array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle', 'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle', 'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle', 'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle', 'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\JMSPaymentCoreBundle', 'JMSPaymentPaypalBundle' => 'JMS\\Payment\\PaypalBundle\\JMSPaymentPaypalBundle', 'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\LexikCurrencyBundle', 'BazingaGeocoderBundle' => 'Bazinga\\Bundle\\GeocoderBundle\\BazingaGeocoderBundle', 'DoctrineMongoDBBundle' => 'Doctrine\\Bundle\\MongoDBBundle\\DoctrineMongoDBBundle', 'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle', 'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle', 'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle', 'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle', 'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle', 'FOSMessageBundle' => 'FOS\\MessageBundle\\FOSMessageBundle', 'WhiteOctoberBreadcrumbsBundle' => 'WhiteOctober\\BreadcrumbsBundle\\WhiteOctoberBreadcrumbsBundle', 'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle', 'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle', 'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'SimpleThingsEntityAuditBundle' => 'SimpleThings\\EntityAudit\\SimpleThingsEntityAuditBundle', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\CocoricoCoreBundle', 'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\CocoricoGeoBundle', 'CocoricoUserBundle' => 'Cocorico\\UserBundle\\CocoricoUserBundle', 'CocoricoPageBundle' => 'Cocorico\\PageBundle\\CocoricoPageBundle', 'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\CocoricoCMSBundle', 'CocoricoBreadcrumbBundle' => 'Cocorico\\BreadcrumbBundle\\CocoricoBreadcrumbBundle', 'CocoricoSonataAdminBundle' => 'Cocorico\\SonataAdminBundle\\CocoricoSonataAdminBundle', 'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\CocoricoMessageBundle', 'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\CocoricoContactBundle', 'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\CocoricoReviewBundle', 'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\CocoricoConfigBundle', 'TroopersMangopayBundle' => 'Troopers\\MangopayBundle\\TroopersMangopayBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'DeployBundle' => 'Hpatoio\\DeployBundle\\DeployBundle'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Listings');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.listing_category' service.
     *
     * @return \Cocorico\CoreBundle\Admin\ListingCategoryAdmin A Cocorico\CoreBundle\Admin\ListingCategoryAdmin instance
     */
    protected function getSonata_Admin_ListingCategoryService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\ListingCategoryAdmin('sonata.admin.listing_category', 'Cocorico\\CoreBundle\\Entity\\ListingCategory', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales(array(0 => 'en', 1 => 'ee'));
        $instance->setBundlesEnabled(array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle', 'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle', 'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle', 'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle', 'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\JMSPaymentCoreBundle', 'JMSPaymentPaypalBundle' => 'JMS\\Payment\\PaypalBundle\\JMSPaymentPaypalBundle', 'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\LexikCurrencyBundle', 'BazingaGeocoderBundle' => 'Bazinga\\Bundle\\GeocoderBundle\\BazingaGeocoderBundle', 'DoctrineMongoDBBundle' => 'Doctrine\\Bundle\\MongoDBBundle\\DoctrineMongoDBBundle', 'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle', 'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle', 'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle', 'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle', 'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle', 'FOSMessageBundle' => 'FOS\\MessageBundle\\FOSMessageBundle', 'WhiteOctoberBreadcrumbsBundle' => 'WhiteOctober\\BreadcrumbsBundle\\WhiteOctoberBreadcrumbsBundle', 'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle', 'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle', 'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'SimpleThingsEntityAuditBundle' => 'SimpleThings\\EntityAudit\\SimpleThingsEntityAuditBundle', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\CocoricoCoreBundle', 'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\CocoricoGeoBundle', 'CocoricoUserBundle' => 'Cocorico\\UserBundle\\CocoricoUserBundle', 'CocoricoPageBundle' => 'Cocorico\\PageBundle\\CocoricoPageBundle', 'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\CocoricoCMSBundle', 'CocoricoBreadcrumbBundle' => 'Cocorico\\BreadcrumbBundle\\CocoricoBreadcrumbBundle', 'CocoricoSonataAdminBundle' => 'Cocorico\\SonataAdminBundle\\CocoricoSonataAdminBundle', 'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\CocoricoMessageBundle', 'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\CocoricoContactBundle', 'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\CocoricoReviewBundle', 'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\CocoricoConfigBundle', 'TroopersMangopayBundle' => 'Troopers\\MangopayBundle\\TroopersMangopayBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'DeployBundle' => 'Hpatoio\\DeployBundle\\DeployBundle'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Category');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.listing_characteristic' service.
     *
     * @return \Cocorico\CoreBundle\Admin\ListingCharacteristicAdmin A Cocorico\CoreBundle\Admin\ListingCharacteristicAdmin instance
     */
    protected function getSonata_Admin_ListingCharacteristicService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\ListingCharacteristicAdmin('sonata.admin.listing_characteristic', 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristic', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales(array(0 => 'en', 1 => 'ee'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Characteristic');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.listing_characteristic_group' service.
     *
     * @return \Cocorico\CoreBundle\Admin\ListingCharacteristicGroupAdmin A Cocorico\CoreBundle\Admin\ListingCharacteristicGroupAdmin instance
     */
    protected function getSonata_Admin_ListingCharacteristicGroupService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\ListingCharacteristicGroupAdmin('sonata.admin.listing_characteristic_group', 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristicGroup', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales(array(0 => 'en', 1 => 'ee'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Characteristic Group');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.listing_characteristic_type' service.
     *
     * @return \Cocorico\CoreBundle\Admin\ListingCharacteristicTypeAdmin A Cocorico\CoreBundle\Admin\ListingCharacteristicTypeAdmin instance
     */
    protected function getSonata_Admin_ListingCharacteristicTypeService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\ListingCharacteristicTypeAdmin('sonata.admin.listing_characteristic_type', 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristicType', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales(array(0 => 'en', 1 => 'ee'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Characteristic Type');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.listing_characteristic_value' service.
     *
     * @return \Cocorico\CoreBundle\Admin\ListingCharacteristicValueAdmin A Cocorico\CoreBundle\Admin\ListingCharacteristicValueAdmin instance
     */
    protected function getSonata_Admin_ListingCharacteristicValueService()
    {
        $instance = new \Cocorico\CoreBundle\Admin\ListingCharacteristicValueAdmin('sonata.admin.listing_characteristic_value', 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristicValue', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales(array(0 => 'en', 1 => 'ee'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('-');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.manager.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Model\ModelManager A Sonata\DoctrineORMAdminBundle\Model\ModelManager instance
     */
    protected function getSonata_Admin_Manager_OrmService()
    {
        return $this->services['sonata.admin.manager.orm'] = new \Sonata\DoctrineORMAdminBundle\Model\ModelManager($this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.admin.manipulator.acl.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Util\AdminAclManipulator A Sonata\AdminBundle\Util\AdminAclManipulator instance
     */
    protected function getSonata_Admin_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminAclManipulator('Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the 'sonata.admin.manipulator.acl.object.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator A Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator instance
     */
    protected function getSonata_Admin_Manipulator_Acl_Object_OrmService()
    {
        return $this->services['sonata.admin.manipulator.acl.object.orm'] = new \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator();
    }

    /**
     * Gets the 'sonata.admin.message' service.
     *
     * @return \Cocorico\MessageBundle\Admin\MessageAdmin A Cocorico\MessageBundle\Admin\MessageAdmin instance
     */
    protected function getSonata_Admin_MessageService()
    {
        $instance = new \Cocorico\MessageBundle\Admin\MessageAdmin('sonata.admin.message', 'Cocorico\\MessageBundle\\Entity\\Message', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales(array(0 => 'en', 1 => 'ee'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('-');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.object.manipulator.acl.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Util\AdminObjectAclManipulator A Sonata\AdminBundle\Util\AdminObjectAclManipulator instance
     */
    protected function getSonata_Admin_Object_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.object.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminObjectAclManipulator($this->get('form.factory'), 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.boolean' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter A Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_BooleanService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.callback' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter A Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_CallbackService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.choice' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter A Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_ChoiceService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.class' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter A Sonata\DoctrineORMAdminBundle\Filter\ClassFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_ClassService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.date' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateFilter A Sonata\DoctrineORMAdminBundle\Filter\DateFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.date_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.datetime' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.datetime_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.model' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter A Sonata\DoctrineORMAdminBundle\Filter\ModelFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.number' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter A Sonata\DoctrineORMAdminBundle\Filter\NumberFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_NumberService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.string' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\StringFilter A Sonata\DoctrineORMAdminBundle\Filter\StringFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_StringService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\StringFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.time' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter A Sonata\DoctrineORMAdminBundle\Filter\TimeFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_TimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter();
    }

    /**
     * Gets the 'sonata.admin.page' service.
     *
     * @return \Cocorico\PageBundle\Admin\PageAdmin A Cocorico\PageBundle\Admin\PageAdmin instance
     */
    protected function getSonata_Admin_PageService()
    {
        $instance = new \Cocorico\PageBundle\Admin\PageAdmin('sonata.admin.page', 'Cocorico\\PageBundle\\Entity\\Page', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales(array(0 => 'en', 1 => 'ee'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Pages');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.parameter' service.
     *
     * @return \Cocorico\ConfigBundle\Admin\ParameterAdmin A Cocorico\ConfigBundle\Admin\ParameterAdmin instance
     */
    protected function getSonata_Admin_ParameterService()
    {
        $instance = new \Cocorico\ConfigBundle\Admin\ParameterAdmin('sonata.admin.parameter', 'Cocorico\\ConfigBundle\\Entity\\Parameter', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Configuration');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.pool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Admin\Pool A Sonata\AdminBundle\Admin\Pool instance
     */
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'KoduTeenus administration', '/images/logo2.gif', array('html5_validate' => true, 'confirm_exit' => true, 'use_select2' => true, 'use_icheck' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'javascripts' => array(0 => 'bundles/sonataadmin/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 3 => 'bundles/sonataadmin/vendor/bootstrap/dist/js/bootstrap.min.js', 4 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 5 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 6 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 7 => 'bundles/sonataadmin/jquery/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonataadmin/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/App.js', 12 => 'bundles/sonataadmin/Admin.js'), 'stylesheets' => array(0 => 'bundles/sonataadmin/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonataadmin/vendor/AdminLTE/css/font-awesome.min.css', 2 => 'bundles/sonataadmin/vendor/AdminLTE/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/AdminLTE/css/AdminLTE.css', 4 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 5 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 6 => 'bundles/sonataadmin/vendor/select2/select2.css', 7 => 'bundles/sonataadmin/vendor/select2/select2-bootstrap.css', 8 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 9 => 'bundles/sonataadmin/css/styles.css', 10 => 'bundles/sonataadmin/css/layout.css')), array());

        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig'));
        $instance->setAdminServiceIds(array(0 => 'sonata.admin.listing', 1 => 'sonata.admin.booking', 2 => 'sonata.admin.listing_characteristic', 3 => 'sonata.admin.listing_characteristic_group', 4 => 'sonata.admin.listing_characteristic_type', 5 => 'sonata.admin.listing_characteristic_value', 6 => 'sonata.admin.listing_category', 7 => 'sonata.admin.booking_bank_wire', 8 => 'sonata.admin.booking_payin_refund', 9 => 'sonata.user.admin.user', 10 => 'sonata.admin.page', 11 => 'sonata.admin.footer', 12 => 'sonata.admin.thread', 13 => 'sonata.admin.message', 14 => 'sonata.admin.contact', 15 => 'sonata.admin.review', 16 => 'sonata.admin.parameter'));
        $instance->setAdminGroups(array('Listings' => array('label' => 'Listings', 'label_catalogue' => 'cocorico_admin_menu', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'items' => array(0 => 'sonata.admin.listing', 1 => 'sonata.admin.listing_characteristic', 2 => 'sonata.admin.listing_characteristic_group', 3 => 'sonata.admin.listing_characteristic_type', 4 => 'sonata.admin.listing_category')), 'Bookings' => array('label' => 'Bookings', 'label_catalogue' => 'cocorico_admin_menu', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'items' => array(0 => 'sonata.admin.booking', 1 => 'sonata.admin.booking_bank_wire', 2 => 'sonata.admin.booking_payin_refund')), 'Users' => array('label' => 'Users', 'label_catalogue' => 'cocorico_admin_menu', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'items' => array(0 => 'sonata.user.admin.user', 1 => 'sonata.admin.thread', 2 => 'sonata.admin.review')), 'Site' => array('label' => 'Site', 'label_catalogue' => 'cocorico_admin_menu', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'items' => array(0 => 'sonata.admin.page', 1 => 'sonata.admin.footer', 2 => 'sonata.admin.contact', 3 => 'sonata.admin.parameter'))));
        $instance->setAdminClasses(array('Cocorico\\CoreBundle\\Entity\\Listing' => array(0 => 'sonata.admin.listing'), 'Cocorico\\CoreBundle\\Entity\\Booking' => array(0 => 'sonata.admin.booking'), 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristic' => array(0 => 'sonata.admin.listing_characteristic'), 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristicGroup' => array(0 => 'sonata.admin.listing_characteristic_group'), 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristicType' => array(0 => 'sonata.admin.listing_characteristic_type'), 'Cocorico\\CoreBundle\\Entity\\ListingCharacteristicValue' => array(0 => 'sonata.admin.listing_characteristic_value'), 'Cocorico\\CoreBundle\\Entity\\ListingCategory' => array(0 => 'sonata.admin.listing_category'), 'Cocorico\\CoreBundle\\Entity\\BookingBankWire' => array(0 => 'sonata.admin.booking_bank_wire'), 'Cocorico\\CoreBundle\\Entity\\BookingPayinRefund' => array(0 => 'sonata.admin.booking_payin_refund'), 'Cocorico\\UserBundle\\Entity\\User' => array(0 => 'sonata.user.admin.user'), 'Cocorico\\PageBundle\\Entity\\Page' => array(0 => 'sonata.admin.page'), 'Cocorico\\CMSBundle\\Entity\\Footer' => array(0 => 'sonata.admin.footer'), 'Cocorico\\MessageBundle\\Entity\\Thread' => array(0 => 'sonata.admin.thread'), 'Cocorico\\MessageBundle\\Entity\\Message' => array(0 => 'sonata.admin.message'), 'Cocorico\\ContactBundle\\Entity\\Contact' => array(0 => 'sonata.admin.contact'), 'Cocorico\\ReviewBundle\\Entity\\Review' => array(0 => 'sonata.admin.review'), 'Cocorico\\ConfigBundle\\Entity\\Parameter' => array(0 => 'sonata.admin.parameter')));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.review' service.
     *
     * @return \Cocorico\ReviewBundle\Admin\ReviewAdmin A Cocorico\ReviewBundle\Admin\ReviewAdmin instance
     */
    protected function getSonata_Admin_ReviewService()
    {
        $instance = new \Cocorico\ReviewBundle\Admin\ReviewAdmin('sonata.admin.review', 'Cocorico\\ReviewBundle\\Entity\\Review', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Reviews');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.route.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCache A Sonata\AdminBundle\Route\RoutesCache instance
     */
    protected function getSonata_Admin_Route_CacheService()
    {
        return $this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache((__DIR__.'/sonata/admin'), true);
    }

    /**
     * Gets the 'sonata.admin.route.cache_warmup' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCacheWarmUp A Sonata\AdminBundle\Route\RoutesCacheWarmUp instance
     */
    protected function getSonata_Admin_Route_CacheWarmupService()
    {
        return $this->services['sonata.admin.route.cache_warmup'] = new \Sonata\AdminBundle\Route\RoutesCacheWarmUp($this->get('sonata.admin.route.cache'), $this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.route.default_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\DefaultRouteGenerator A Sonata\AdminBundle\Route\DefaultRouteGenerator instance
     */
    protected function getSonata_Admin_Route_DefaultGeneratorService()
    {
        return $this->services['sonata.admin.route.default_generator'] = new \Sonata\AdminBundle\Route\DefaultRouteGenerator($this->get('router'), $this->get('sonata.admin.route.cache'));
    }

    /**
     * Gets the 'sonata.admin.route.path_info' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\PathInfoBuilder A Sonata\AdminBundle\Route\PathInfoBuilder instance
     */
    protected function getSonata_Admin_Route_PathInfoService()
    {
        return $this->services['sonata.admin.route.path_info'] = new \Sonata\AdminBundle\Route\PathInfoBuilder($this->get('sonata.admin.audit.manager'));
    }

    /**
     * Gets the 'sonata.admin.route.query_string' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\QueryStringBuilder A Sonata\AdminBundle\Route\QueryStringBuilder instance
     */
    protected function getSonata_Admin_Route_QueryStringService()
    {
        return $this->services['sonata.admin.route.query_string'] = new \Sonata\AdminBundle\Route\QueryStringBuilder($this->get('sonata.admin.audit.manager'));
    }

    /**
     * Gets the 'sonata.admin.route_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\AdminPoolLoader A Sonata\AdminBundle\Route\AdminPoolLoader instance
     */
    protected function getSonata_Admin_RouteLoaderService()
    {
        return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader($this->get('sonata.admin.pool'), array(0 => 'sonata.admin.listing', 1 => 'sonata.admin.booking', 2 => 'sonata.admin.listing_characteristic', 3 => 'sonata.admin.listing_characteristic_group', 4 => 'sonata.admin.listing_characteristic_type', 5 => 'sonata.admin.listing_characteristic_value', 6 => 'sonata.admin.listing_category', 7 => 'sonata.admin.booking_bank_wire', 8 => 'sonata.admin.booking_payin_refund', 9 => 'sonata.user.admin.user', 10 => 'sonata.admin.page', 11 => 'sonata.admin.footer', 12 => 'sonata.admin.thread', 13 => 'sonata.admin.message', 14 => 'sonata.admin.contact', 15 => 'sonata.admin.review', 16 => 'sonata.admin.parameter'), $this);
    }

    /**
     * Gets the 'sonata.admin.search.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Search\SearchHandler A Sonata\AdminBundle\Search\SearchHandler instance
     */
    protected function getSonata_Admin_Search_HandlerService()
    {
        return $this->services['sonata.admin.search.handler'] = new \Sonata\AdminBundle\Search\SearchHandler($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.security.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler A Sonata\AdminBundle\Security\Handler\NoopSecurityHandler instance
     */
    protected function getSonata_Admin_Security_HandlerService()
    {
        return $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler();
    }

    /**
     * Gets the 'sonata.admin.thread' service.
     *
     * @return \Cocorico\MessageBundle\Admin\ThreadAdmin A Cocorico\MessageBundle\Admin\ThreadAdmin instance
     */
    protected function getSonata_Admin_ThreadService()
    {
        $instance = new \Cocorico\MessageBundle\Admin\ThreadAdmin('sonata.admin.thread', 'Cocorico\\MessageBundle\\Entity\\Thread', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataAdminBundle');
        $instance->setLocales(array(0 => 'en', 1 => 'ee'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Messages');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.translator.extractor.jms_translator_bundle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\Extractor\JMSTranslatorBundle\AdminExtractor A Sonata\AdminBundle\Translator\Extractor\JMSTranslatorBundle\AdminExtractor instance
     */
    protected function getSonata_Admin_Translator_Extractor_JmsTranslatorBundleService()
    {
        return $this->services['sonata.admin.translator.extractor.jms_translator_bundle'] = new \Sonata\AdminBundle\Translator\Extractor\JMSTranslatorBundle\AdminExtractor($this->get('sonata.admin.pool'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.admin.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension A Sonata\AdminBundle\Twig\Extension\SonataAdminExtension instance
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        return $this->services['sonata.admin.twig.extension'] = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension($this->get('sonata.admin.pool'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.admin.validator.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Validator\InlineValidator A Sonata\AdminBundle\Validator\InlineValidator instance
     */
    protected function getSonata_Admin_Validator_InlineService()
    {
        return $this->services['sonata.admin.validator.inline'] = new \Sonata\AdminBundle\Validator\InlineValidator($this, $this->get('validator.validator_factory'));
    }

    /**
     * Gets the 'sonata.admin_doctrine_orm.block.audit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Block\AuditBlockService A Sonata\DoctrineORMAdminBundle\Block\AuditBlockService instance
     */
    protected function getSonata_AdminDoctrineOrm_Block_AuditService()
    {
        return $this->services['sonata.admin_doctrine_orm.block.audit'] = new \Sonata\DoctrineORMAdminBundle\Block\AuditBlockService('sonata.admin_doctrine_orm.block.audit', $this->get('templating'), $this->get('simplethings_entityaudit.reader', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.block.cache.handler.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Cache\HttpCacheHandler A Sonata\BlockBundle\Cache\HttpCacheHandler instance
     */
    protected function getSonata_Block_Cache_Handler_DefaultService()
    {
        return $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }

    /**
     * Gets the 'sonata.block.cache.handler.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Cache\NoopHttpCacheHandler A Sonata\BlockBundle\Cache\NoopHttpCacheHandler instance
     */
    protected function getSonata_Block_Cache_Handler_NoopService()
    {
        return $this->services['sonata.block.cache.handler.noop'] = new \Sonata\BlockBundle\Cache\NoopHttpCacheHandler();
    }

    /**
     * Gets the 'sonata.block.context_manager.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockContextManager A Sonata\BlockBundle\Block\BlockContextManager instance
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager($this->get('sonata.block.loader.chain'), $this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop', 'sonata.admin.block.search_result' => 'sonata.cache.noop', 'sonata.user.block.menu' => 'sonata.cache.noop', 'sonata.user.block.account' => 'sonata.cache.noop', 'sonata.block.service.text' => 'sonata.cache.noop')), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.block.exception.filter.debug_only' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter A Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter instance
     */
    protected function getSonata_Block_Exception_Filter_DebugOnlyService()
    {
        return $this->services['sonata.block.exception.filter.debug_only'] = new \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter(true);
    }

    /**
     * Gets the 'sonata.block.exception.filter.ignore_block_exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter A Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter instance
     */
    protected function getSonata_Block_Exception_Filter_IgnoreBlockExceptionService()
    {
        return $this->services['sonata.block.exception.filter.ignore_block_exception'] = new \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter('Sonata\\BlockBundle\\Exception\\BlockExceptionInterface');
    }

    /**
     * Gets the 'sonata.block.exception.filter.keep_all' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepAllFilter A Sonata\BlockBundle\Exception\Filter\KeepAllFilter instance
     */
    protected function getSonata_Block_Exception_Filter_KeepAllService()
    {
        return $this->services['sonata.block.exception.filter.keep_all'] = new \Sonata\BlockBundle\Exception\Filter\KeepAllFilter();
    }

    /**
     * Gets the 'sonata.block.exception.filter.keep_none' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter A Sonata\BlockBundle\Exception\Filter\KeepNoneFilter instance
     */
    protected function getSonata_Block_Exception_Filter_KeepNoneService()
    {
        return $this->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
    }

    /**
     * Gets the 'sonata.block.exception.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineRenderer A Sonata\BlockBundle\Exception\Renderer\InlineRenderer instance
     */
    protected function getSonata_Block_Exception_Renderer_InlineService()
    {
        return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception.html.twig');
    }

    /**
     * Gets the 'sonata.block.exception.renderer.inline_debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer A Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer instance
     */
    protected function getSonata_Block_Exception_Renderer_InlineDebugService()
    {
        return $this->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception_debug.html.twig', true, true);
    }

    /**
     * Gets the 'sonata.block.exception.renderer.throw' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer A Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer instance
     */
    protected function getSonata_Block_Exception_Renderer_ThrowService()
    {
        return $this->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();
    }

    /**
     * Gets the 'sonata.block.exception.strategy.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Strategy\StrategyManager A Sonata\BlockBundle\Exception\Strategy\StrategyManager instance
     */
    protected function getSonata_Block_Exception_Strategy_ManagerService()
    {
        $this->services['sonata.block.exception.strategy.manager'] = $instance = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, array('debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'), array('inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'), array(), array());

        $instance->setDefaultFilter('debug_only');
        $instance->setDefaultRenderer('throw');

        return $instance;
    }

    /**
     * Gets the 'sonata.block.form.type.block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ServiceListType A Sonata\BlockBundle\Form\Type\ServiceListType instance
     */
    protected function getSonata_Block_Form_Type_BlockService()
    {
        return $this->services['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType($this->get('sonata.block.manager'));
    }

    /**
     * Gets the 'sonata.block.form.type.container_template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ContainerTemplateType A Sonata\BlockBundle\Form\Type\ContainerTemplateType instance
     */
    protected function getSonata_Block_Form_Type_ContainerTemplateService()
    {
        return $this->services['sonata.block.form.type.container_template'] = new \Sonata\BlockBundle\Form\Type\ContainerTemplateType(array('SonataBlockBundle:Block:block_container.html.twig' => 'SonataBlockBundle default template'));
    }

    /**
     * Gets the 'sonata.block.loader.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockLoaderChain A Sonata\BlockBundle\Block\BlockLoaderChain instance
     */
    protected function getSonata_Block_Loader_ChainService()
    {
        return $this->services['sonata.block.loader.chain'] = new \Sonata\BlockBundle\Block\BlockLoaderChain(array(0 => $this->get('sonata.block.loader.service')));
    }

    /**
     * Gets the 'sonata.block.loader.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Loader\ServiceLoader A Sonata\BlockBundle\Block\Loader\ServiceLoader instance
     */
    protected function getSonata_Block_Loader_ServiceService()
    {
        return $this->services['sonata.block.loader.service'] = new \Sonata\BlockBundle\Block\Loader\ServiceLoader(array(0 => 'sonata.admin.block.admin_list', 1 => 'sonata.admin.block.search_result', 2 => 'sonata.user.block.menu', 3 => 'sonata.user.block.account', 4 => 'sonata.block.service.text'));
    }

    /**
     * Gets the 'sonata.block.renderer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockRenderer A Sonata\BlockBundle\Block\BlockRenderer instance
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer($this->get('sonata.block.manager'), $this->get('sonata.block.exception.strategy.manager'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE), true);
    }

    /**
     * Gets the 'sonata.block.service.container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\ContainerBlockService A Sonata\BlockBundle\Block\Service\ContainerBlockService instance
     */
    protected function getSonata_Block_Service_ContainerService()
    {
        return $this->services['sonata.block.service.container'] = new \Sonata\BlockBundle\Block\Service\ContainerBlockService('sonata.block.container', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.empty' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\EmptyBlockService A Sonata\BlockBundle\Block\Service\EmptyBlockService instance
     */
    protected function getSonata_Block_Service_EmptyService()
    {
        return $this->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService('sonata.block.empty', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\MenuBlockService A Sonata\BlockBundle\Block\Service\MenuBlockService instance
     */
    protected function getSonata_Block_Service_MenuService()
    {
        return $this->services['sonata.block.service.menu'] = new \Sonata\BlockBundle\Block\Service\MenuBlockService('sonata.block.menu', $this->get('templating'), $this->get('knp_menu.menu_provider'), array());
    }

    /**
     * Gets the 'sonata.block.service.rss' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\RssBlockService A Sonata\BlockBundle\Block\Service\RssBlockService instance
     */
    protected function getSonata_Block_Service_RssService()
    {
        return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TemplateBlockService A Sonata\BlockBundle\Block\Service\TemplateBlockService instance
     */
    protected function getSonata_Block_Service_TemplateService()
    {
        return $this->services['sonata.block.service.template'] = new \Sonata\BlockBundle\Block\Service\TemplateBlockService('sonata.block.template', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TextBlockService A Sonata\BlockBundle\Block\Service\TextBlockService instance
     */
    protected function getSonata_Block_Service_TextService()
    {
        return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService('sonata.block.text', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Templating\Helper\BlockHelper A Sonata\BlockBundle\Templating\Helper\BlockHelper instance
     */
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper($this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop', 'sonata.admin.block.search_result' => 'sonata.cache.noop', 'sonata.user.block.menu' => 'sonata.cache.noop', 'sonata.user.block.account' => 'sonata.cache.noop', 'sonata.block.service.text' => 'sonata.cache.noop')), $this->get('sonata.block.renderer.default'), $this->get('sonata.block.context_manager.default'), $this->get('debug.event_dispatcher'), NULL, $this->get('sonata.block.cache.handler.default', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.block.twig.global' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Twig\GlobalVariables A Sonata\BlockBundle\Twig\GlobalVariables instance
     */
    protected function getSonata_Block_Twig_GlobalService()
    {
        return $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables(array('block_base' => 'SonataBlockBundle:Block:block_base.html.twig', 'block_container' => 'SonataBlockBundle:Block:block_container.html.twig'));
    }

    /**
     * Gets the 'sonata.core.date.moment_format_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Date\MomentFormatConverter A Sonata\CoreBundle\Date\MomentFormatConverter instance
     */
    protected function getSonata_Core_Date_MomentFormatConverterService()
    {
        return $this->services['sonata.core.date.moment_format_converter'] = new \Sonata\CoreBundle\Date\MomentFormatConverter();
    }

    /**
     * Gets the 'sonata.core.flashmessage.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\FlashMessage\FlashManager A Sonata\CoreBundle\FlashMessage\FlashManager instance
     */
    protected function getSonata_Core_Flashmessage_ManagerService()
    {
        return $this->services['sonata.core.flashmessage.manager'] = new \Sonata\CoreBundle\FlashMessage\FlashManager($this->get('session'), $this->get('translator'), array('success' => array('success' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_success' => array('domain' => 'SonataAdminBundle'), 'sonata_user_success' => array('domain' => 'SonataUserBundle'), 'fos_user_success' => array('domain' => 'FOSUserBundle')), 'warning' => array('warning' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_info' => array('domain' => 'SonataAdminBundle')), 'danger' => array('error' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_error' => array('domain' => 'SonataAdminBundle'), 'sonata_user_error' => array('domain' => 'SonataUserBundle'))), array('success' => 'success', 'warning' => 'warning', 'danger' => 'danger'));
    }

    /**
     * Gets the 'sonata.core.flashmessage.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension A Sonata\CoreBundle\Twig\Extension\FlashMessageExtension instance
     */
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension($this->get('sonata.core.flashmessage.manager'));
    }

    /**
     * Gets the 'sonata.core.form.type.array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ImmutableArrayType A Sonata\CoreBundle\Form\Type\ImmutableArrayType instance
     */
    protected function getSonata_Core_Form_Type_ArrayService()
    {
        return $this->services['sonata.core.form.type.array'] = new \Sonata\CoreBundle\Form\Type\ImmutableArrayType();
    }

    /**
     * Gets the 'sonata.core.form.type.boolean' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\BooleanType A Sonata\CoreBundle\Form\Type\BooleanType instance
     */
    protected function getSonata_Core_Form_Type_BooleanService()
    {
        return $this->services['sonata.core.form.type.boolean'] = new \Sonata\CoreBundle\Form\Type\BooleanType();
    }

    /**
     * Gets the 'sonata.core.form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\CollectionType A Sonata\CoreBundle\Form\Type\CollectionType instance
     */
    protected function getSonata_Core_Form_Type_CollectionService()
    {
        return $this->services['sonata.core.form.type.collection'] = new \Sonata\CoreBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the 'sonata.core.form.type.color_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ColorSelectorType A Sonata\CoreBundle\Form\Type\ColorSelectorType instance
     */
    protected function getSonata_Core_Form_Type_ColorSelectorService()
    {
        return $this->services['sonata.core.form.type.color_selector'] = new \Sonata\CoreBundle\Form\Type\ColorSelectorType();
    }

    /**
     * Gets the 'sonata.core.form.type.date_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DatePickerType A Sonata\CoreBundle\Form\Type\DatePickerType instance
     */
    protected function getSonata_Core_Form_Type_DatePickerService()
    {
        return $this->services['sonata.core.form.type.date_picker'] = new \Sonata\CoreBundle\Form\Type\DatePickerType($this->get('sonata.core.date.moment_format_converter'));
    }

    /**
     * Gets the 'sonata.core.form.type.date_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangeType A Sonata\CoreBundle\Form\Type\DateRangeType instance
     */
    protected function getSonata_Core_Form_Type_DateRangeService()
    {
        return $this->services['sonata.core.form.type.date_range'] = new \Sonata\CoreBundle\Form\Type\DateRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.date_range_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangePickerType A Sonata\CoreBundle\Form\Type\DateRangePickerType instance
     */
    protected function getSonata_Core_Form_Type_DateRangePickerService()
    {
        return $this->services['sonata.core.form.type.date_range_picker'] = new \Sonata\CoreBundle\Form\Type\DateRangePickerType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimePickerType A Sonata\CoreBundle\Form\Type\DateTimePickerType instance
     */
    protected function getSonata_Core_Form_Type_DatetimePickerService()
    {
        return $this->services['sonata.core.form.type.datetime_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimePickerType($this->get('sonata.core.date.moment_format_converter'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangeType A Sonata\CoreBundle\Form\Type\DateTimeRangeType instance
     */
    protected function getSonata_Core_Form_Type_DatetimeRangeService()
    {
        return $this->services['sonata.core.form.type.datetime_range'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_range_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType A Sonata\CoreBundle\Form\Type\DateTimeRangePickerType instance
     */
    protected function getSonata_Core_Form_Type_DatetimeRangePickerService()
    {
        return $this->services['sonata.core.form.type.datetime_range_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.equal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\EqualType A Sonata\CoreBundle\Form\Type\EqualType instance
     */
    protected function getSonata_Core_Form_Type_EqualService()
    {
        return $this->services['sonata.core.form.type.equal'] = new \Sonata\CoreBundle\Form\Type\EqualType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.translatable_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\TranslatableChoiceType A Sonata\CoreBundle\Form\Type\TranslatableChoiceType instance
     */
    protected function getSonata_Core_Form_Type_TranslatableChoiceService()
    {
        return $this->services['sonata.core.form.type.translatable_choice'] = new \Sonata\CoreBundle\Form\Type\TranslatableChoiceType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.model.adapter.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Model\Adapter\AdapterChain A Sonata\CoreBundle\Model\Adapter\AdapterChain instance
     */
    protected function getSonata_Core_Model_Adapter_ChainService()
    {
        $this->services['sonata.core.model.adapter.chain'] = $instance = new \Sonata\CoreBundle\Model\Adapter\AdapterChain();

        $instance->addAdapter(new \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)));

        return $instance;
    }

    /**
     * Gets the 'sonata.core.slugify.cocur' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocur\Slugify\Slugify A Cocur\Slugify\Slugify instance
     */
    protected function getSonata_Core_Slugify_CocurService()
    {
        return $this->services['sonata.core.slugify.cocur'] = new \Cocur\Slugify\Slugify();
    }

    /**
     * Gets the 'sonata.core.slugify.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Component\NativeSlugify A Sonata\CoreBundle\Component\NativeSlugify instance
     */
    protected function getSonata_Core_Slugify_NativeService()
    {
        return $this->services['sonata.core.slugify.native'] = new \Sonata\CoreBundle\Component\NativeSlugify();
    }

    /**
     * Gets the 'sonata.core.twig.extension.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extensions_Extension_Text A Twig_Extensions_Extension_Text instance
     */
    protected function getSonata_Core_Twig_Extension_TextService()
    {
        return $this->services['sonata.core.twig.extension.text'] = new \Twig_Extensions_Extension_Text();
    }

    /**
     * Gets the 'sonata.core.twig.extension.wrapping' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FormTypeExtension A Sonata\CoreBundle\Twig\Extension\FormTypeExtension instance
     */
    protected function getSonata_Core_Twig_Extension_WrappingService()
    {
        return $this->services['sonata.core.twig.extension.wrapping'] = new \Sonata\CoreBundle\Twig\Extension\FormTypeExtension('standard');
    }

    /**
     * Gets the 'sonata.core.twig.status_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\StatusExtension A Sonata\CoreBundle\Twig\Extension\StatusExtension instance
     */
    protected function getSonata_Core_Twig_StatusExtensionService()
    {
        $this->services['sonata.core.twig.status_extension'] = $instance = new \Sonata\CoreBundle\Twig\Extension\StatusExtension();

        $instance->addStatusService($this->get('sonata.core.flashmessage.manager'));

        return $instance;
    }

    /**
     * Gets the 'sonata.core.twig.template_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\TemplateExtension A Sonata\CoreBundle\Twig\Extension\TemplateExtension instance
     */
    protected function getSonata_Core_Twig_TemplateExtensionService()
    {
        return $this->services['sonata.core.twig.template_extension'] = new \Sonata\CoreBundle\Twig\Extension\TemplateExtension(true, $this->get('translator'), $this->get('sonata.core.model.adapter.chain'));
    }

    /**
     * Gets the 'sonata.core.validator.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Validator\InlineValidator A Sonata\CoreBundle\Validator\InlineValidator instance
     */
    protected function getSonata_Core_Validator_InlineService()
    {
        return $this->services['sonata.core.validator.inline'] = new \Sonata\CoreBundle\Validator\InlineValidator($this, $this->get('validator.validator_factory'));
    }

    /**
     * Gets the 'sonata.easy_extends.doctrine.mapper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper A Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper instance
     */
    protected function getSonata_EasyExtends_Doctrine_MapperService()
    {
        $this->services['sonata.easy_extends.doctrine.mapper'] = $instance = new \Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper($this->get('doctrine'), array());

        $instance->addAssociation('Cocorico\\UserBundle\\Entity\\User', 'mapManyToMany', array(0 => array('fieldName' => 'groups', 'targetEntity' => 'Cocorico\\UserBundle\\Entity\\Group', 'cascade' => array(), 'joinTable' => array('name' => 'user_group', 'joinColumns' => array(0 => array('name' => 'user_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE')), 'inverseJoinColumns' => array(0 => array('name' => 'group_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE'))))));

        return $instance;
    }

    /**
     * Gets the 'sonata.easy_extends.generator.bundle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\BundleGenerator A Sonata\EasyExtendsBundle\Generator\BundleGenerator instance
     */
    protected function getSonata_EasyExtends_Generator_BundleService()
    {
        return $this->services['sonata.easy_extends.generator.bundle'] = new \Sonata\EasyExtendsBundle\Generator\BundleGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.odm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\OdmGenerator A Sonata\EasyExtendsBundle\Generator\OdmGenerator instance
     */
    protected function getSonata_EasyExtends_Generator_OdmService()
    {
        return $this->services['sonata.easy_extends.generator.odm'] = new \Sonata\EasyExtendsBundle\Generator\OdmGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\OrmGenerator A Sonata\EasyExtendsBundle\Generator\OrmGenerator instance
     */
    protected function getSonata_EasyExtends_Generator_OrmService()
    {
        return $this->services['sonata.easy_extends.generator.orm'] = new \Sonata\EasyExtendsBundle\Generator\OrmGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.phpcr' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\PHPCRGenerator A Sonata\EasyExtendsBundle\Generator\PHPCRGenerator instance
     */
    protected function getSonata_EasyExtends_Generator_PhpcrService()
    {
        return $this->services['sonata.easy_extends.generator.phpcr'] = new \Sonata\EasyExtendsBundle\Generator\PHPCRGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\SerializerGenerator A Sonata\EasyExtendsBundle\Generator\SerializerGenerator instance
     */
    protected function getSonata_EasyExtends_Generator_SerializerService()
    {
        return $this->services['sonata.easy_extends.generator.serializer'] = new \Sonata\EasyExtendsBundle\Generator\SerializerGenerator();
    }

    /**
     * Gets the 'sonata.user.admin.user' service.
     *
     * @return \Cocorico\UserBundle\Admin\UserAdmin A Cocorico\UserBundle\Admin\UserAdmin instance
     */
    protected function getSonata_User_Admin_UserService()
    {
        $instance = new \Cocorico\UserBundle\Admin\UserAdmin('sonata.user.admin.user', 'Cocorico\\UserBundle\\Entity\\User', 'CocoricoUserBundle:Admin\\UserAdmin');

        $instance->setUserManager($this->get('cocorico_user.user_manager'));
        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setBundlesEnabled(array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle', 'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle', 'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle', 'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle', 'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\JMSPaymentCoreBundle', 'JMSPaymentPaypalBundle' => 'JMS\\Payment\\PaypalBundle\\JMSPaymentPaypalBundle', 'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\LexikCurrencyBundle', 'BazingaGeocoderBundle' => 'Bazinga\\Bundle\\GeocoderBundle\\BazingaGeocoderBundle', 'DoctrineMongoDBBundle' => 'Doctrine\\Bundle\\MongoDBBundle\\DoctrineMongoDBBundle', 'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle', 'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle', 'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle', 'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle', 'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle', 'FOSMessageBundle' => 'FOS\\MessageBundle\\FOSMessageBundle', 'WhiteOctoberBreadcrumbsBundle' => 'WhiteOctober\\BreadcrumbsBundle\\WhiteOctoberBreadcrumbsBundle', 'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle', 'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle', 'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'SimpleThingsEntityAuditBundle' => 'SimpleThings\\EntityAudit\\SimpleThingsEntityAuditBundle', 'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\CocoricoCoreBundle', 'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\CocoricoGeoBundle', 'CocoricoUserBundle' => 'Cocorico\\UserBundle\\CocoricoUserBundle', 'CocoricoPageBundle' => 'Cocorico\\PageBundle\\CocoricoPageBundle', 'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\CocoricoCMSBundle', 'CocoricoBreadcrumbBundle' => 'Cocorico\\BreadcrumbBundle\\CocoricoBreadcrumbBundle', 'CocoricoSonataAdminBundle' => 'Cocorico\\SonataAdminBundle\\CocoricoSonataAdminBundle', 'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\CocoricoMessageBundle', 'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\CocoricoContactBundle', 'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\CocoricoReviewBundle', 'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\CocoricoConfigBundle', 'TroopersMangopayBundle' => 'Troopers\\MangopayBundle\\TroopersMangopayBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'DeployBundle' => 'Hpatoio\\DeployBundle\\DeployBundle'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('Users');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.user.block.account' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Block\AccountBlockService A Sonata\UserBundle\Block\AccountBlockService instance
     */
    protected function getSonata_User_Block_AccountService()
    {
        return $this->services['sonata.user.block.account'] = new \Sonata\UserBundle\Block\AccountBlockService('sonata.user.block.account', $this->get('templating'), $this->get('security.context'));
    }

    /**
     * Gets the 'sonata.user.block.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Block\ProfileMenuBlockService A Sonata\UserBundle\Block\ProfileMenuBlockService instance
     */
    protected function getSonata_User_Block_MenuService()
    {
        return $this->services['sonata.user.block.menu'] = new \Sonata\UserBundle\Block\ProfileMenuBlockService('sonata.user.block.menu', $this->get('templating'), $this->get('knp_menu.menu_provider'), $this->get('sonata.user.profile.menu_builder'));
    }

    /**
     * Gets the 'sonata.user.editable_role_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Security\EditableRolesBuilder A Sonata\UserBundle\Security\EditableRolesBuilder instance
     */
    protected function getSonata_User_EditableRoleBuilderService()
    {
        return $this->services['sonata.user.editable_role_builder'] = new \Sonata\UserBundle\Security\EditableRolesBuilder($this->get('security.context'), $this->get('sonata.admin.pool'), array('ROLE_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_SONATA_ADMIN'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ALLOWED_TO_SWITCH')));
    }

    /**
     * Gets the 'sonata.user.form.gender_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\StatusType A Sonata\CoreBundle\Form\Type\StatusType instance
     */
    protected function getSonata_User_Form_GenderListService()
    {
        return $this->services['sonata.user.form.gender_list'] = new \Sonata\CoreBundle\Form\Type\StatusType('Cocorico\\UserBundle\\Entity\\User', 'getGenderList', 'sonata_user_gender');
    }

    /**
     * Gets the 'sonata.user.form.type.security_roles' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Form\Type\SecurityRolesType A Sonata\UserBundle\Form\Type\SecurityRolesType instance
     */
    protected function getSonata_User_Form_Type_SecurityRolesService()
    {
        return $this->services['sonata.user.form.type.security_roles'] = new \Sonata\UserBundle\Form\Type\SecurityRolesType($this->get('sonata.user.editable_role_builder'));
    }

    /**
     * Gets the 'sonata.user.profile.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Form A Symfony\Component\Form\Form instance
     */
    protected function getSonata_User_Profile_FormService()
    {
        return $this->services['sonata.user.profile.form'] = $this->get('form.factory')->createNamed('user_profile', 'user_profile', NULL, array('validation_groups' => array(0 => 'CocoricoProfile'), 'translation_domain' => 'SonataUserBundle'));
    }

    /**
     * Gets the 'sonata.user.profile.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Form\Handler\ProfileFormHandler A Sonata\UserBundle\Form\Handler\ProfileFormHandler instance
     *
     * @throws InactiveScopeException when the 'sonata.user.profile.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getSonata_User_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sonata.user.profile.form.handler', 'request');
        }

        return $this->services['sonata.user.profile.form.handler'] = $this->scopedServices['request']['sonata.user.profile.form.handler'] = new \Sonata\UserBundle\Form\Handler\ProfileFormHandler($this->get('sonata.user.profile.form'), $this->get('request'), $this->get('cocorico_user.user_manager'));
    }

    /**
     * Gets the 'sonata.user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Form\Type\ProfileType A Sonata\UserBundle\Form\Type\ProfileType instance
     */
    protected function getSonata_User_Profile_Form_TypeService()
    {
        return $this->services['sonata.user.profile.form.type'] = new \Sonata\UserBundle\Form\Type\ProfileType('Cocorico\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'sonata.user.profile.menu_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Menu\ProfileMenuBuilder A Sonata\UserBundle\Menu\ProfileMenuBuilder instance
     */
    protected function getSonata_User_Profile_MenuBuilderService()
    {
        return $this->services['sonata.user.profile.menu_builder'] = new \Sonata\UserBundle\Menu\ProfileMenuBuilder($this->get('knp_menu.factory'), $this->get('translator'), array(0 => array('route' => 'sonata_user_profile_edit', 'label' => 'link_edit_profile', 'domain' => 'SonataUserBundle', 'route_parameters' => array()), 1 => array('route' => 'sonata_user_profile_edit_authentication', 'label' => 'link_edit_authentication', 'domain' => 'SonataUserBundle', 'route_parameters' => array())), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'sonata.user.twig.global' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Twig\GlobalVariables A Sonata\UserBundle\Twig\GlobalVariables instance
     */
    protected function getSonata_User_Twig_GlobalService()
    {
        return $this->services['sonata.user.twig.global'] = new \Sonata\UserBundle\Twig\GlobalVariables($this);
    }

    /**
     * Gets the 'stof_doctrine_extensions.uploadable.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager A Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager instance
     */
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader($this->get('annotation_reader'));
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');

        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_FileSpool A Swift_FileSpool instance
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_FileSpool(($this->targetDirs[2].'/spool/default'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper instance
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('assets.packages'), array());
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\TranslationBundle\Translation\Loader\Symfony\XliffLoader A JMS\TranslationBundle\Translation\Loader\Symfony\XliffLoader instance
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \JMS\TranslationBundle\Translation\Loader\Symfony\XliffLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator A Symfony\Component\Translation\DataCollectorTranslator instance
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator($this->get('translator.default'), $this->get('monolog.logger.translation')));
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true, 'resource_files' => array('id' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf'), 'fr' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fr.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fr.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fr.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.fr.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.fr.xliff', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.fr.yml', 9 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.fr.yml', 10 => '/cocorico/vendor/troopers/mangopay-bundle/Troopers/MangopayBundle/Resources/translations/messages.fr.xliff', 11 => ($this->targetDirs[2].'/Resources/translations/cocorico_mail.fr.xliff'), 12 => ($this->targetDirs[2].'/Resources/translations/cocorico_admin_menu.fr.xliff'), 13 => ($this->targetDirs[2].'/Resources/translations/cocorico_listing.fr.xliff'), 14 => ($this->targetDirs[2].'/Resources/translations/cocorico_meta.fr.xliff'), 15 => ($this->targetDirs[2].'/Resources/translations/cocorico_message.fr.xliff'), 16 => ($this->targetDirs[2].'/Resources/translations/cocorico_review.fr.xliff'), 17 => ($this->targetDirs[2].'/Resources/translations/cocorico_home.fr.xliff'), 18 => ($this->targetDirs[2].'/Resources/translations/cocorico_geo.fr.xliff'), 19 => ($this->targetDirs[2].'/Resources/translations/cocorico.fr.xliff'), 20 => ($this->targetDirs[2].'/Resources/translations/messages.fr.xliff'), 21 => ($this->targetDirs[2].'/Resources/translations/cocorico_user.fr.xliff'), 22 => ($this->targetDirs[2].'/Resources/translations/cocorico_contact.fr.xliff'), 23 => ($this->targetDirs[2].'/Resources/translations/validators.fr.xliff'), 24 => ($this->targetDirs[2].'/Resources/translations/cocorico_booking.fr.xliff'), 25 => ($this->targetDirs[2].'/Resources/translations/SonataAdminBundle.fr.xliff'), 26 => ($this->targetDirs[2].'/Resources/translations/routes.fr.xliff'), 27 => ($this->targetDirs[2].'/Resources/translations/cocorico_breadcrumbs.fr.xliff'), 28 => ($this->targetDirs[2].'/Resources/translations/SonataUserBundle.fr.xliff')), 'gl' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf'), 'hy' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf'), 'ar' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf', 3 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ar.xliff', 4 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ar.xliff'), 'vi' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf'), 'bg' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.bg.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.bg.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.bg.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.bg.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.bg.xliff'), 'lt' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.lt.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lt.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.lt.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.lt.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.lt.xliff'), 'es' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.es.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.es.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.es.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.es.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.es.xliff', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.es.yml', 9 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.es.yml'), 'sk' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sk.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sk.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.sk.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sk.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.sk.xliff'), 'sq' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf'), 'mn' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf'), 'el' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf'), 'cs' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.cs.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.cs.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.cs.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.cs.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.cs.xliff'), 'ca' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ca.yml', 4 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ca.xliff', 5 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ca.xliff', 6 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.ca.xliff'), 'hr' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.hr.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.hr.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.hr.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.hr.xliff'), 'sr_Latn' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sr_Latn.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sr_Latn.yml'), 'ja' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ja.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ja.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ja.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ja.xliff'), 'az' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf'), 'et' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf', 2 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.et.yml'), 'zh_CN' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.zh_CN.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.zh_CN.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.zh_CN.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.zh_CN.xliff'), 'zh_TW' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf', 1 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.zh_TW.xliff'), 'it' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.it.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.it.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.it.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.it.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.it.xliff', 8 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.it.yml'), 'hu' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.hu.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.hu.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.hu.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.hu.xliff', 7 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.hu.yml'), 'no' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf'), 'he' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf'), 'pt' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf', 2 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pt.yml', 3 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pt.xliff', 4 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pt.xliff', 5 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.pt.xliff'), 'ru' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ru.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ru.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ru.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ru.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.ru.xliff', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.ru.yml', 9 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.ru.yml'), 'fi' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf', 2 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fi.yml', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fi.yml', 4 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fi.xliff'), 'nl' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.nl.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.nl.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.nl.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.nl.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.nl.xliff', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.nl.yml', 9 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.nl.yml'), 'sv' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sv.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sv.yml', 5 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.sv.yml'), 'ro' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ro.yml', 4 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ro.xliff', 5 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ro.xliff'), 'da' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.da.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.da.yml'), 'cy' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf'), 'sr_Cyrl' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf'), 'pl' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pl.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pl.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pl.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pl.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.pl.xliff', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.pl.yml', 9 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.pl.yml'), 'lv' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lv.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.lv.yml'), 'de' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.de.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.de.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.de.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.de.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.de.xliff', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.de.yml', 9 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.de.yml'), 'nn' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf'), 'fa' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fa.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fa.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fa.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.fa.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.fa.xliff', 8 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.fa.yml'), 'tr' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf', 2 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.tr.yml', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.tr.yml', 4 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.tr.yml'), 'sl' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sl.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sl.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.sl.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sl.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.sl.xliff', 8 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.sl.yml'), 'pt_BR' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_BR.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pt_BR.yml', 5 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pt_BR.xliff', 6 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pt_BR.xliff', 7 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.pt_BR.xliff'), 'af' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf'), 'uk' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf', 2 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.uk.yml', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.uk.yml', 4 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.uk.xliff', 5 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.uk.xliff', 6 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.uk.yml'), 'eu' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf', 2 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.eu.yml', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.eu.yml', 4 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.eu.xliff', 5 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.eu.xliff'), 'en' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.en.yml', 4 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.en.yml', 5 => '/cocorico/vendor/oneup/uploader-bundle/Oneup/UploaderBundle/Resources/translations/OneupUploaderBundle.en.yml', 6 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.en.xliff', 7 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.en.xliff', 8 => '/cocorico/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.en.xliff', 9 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/translations/FOSMessageBundle.en.yml', 10 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.en.yml', 11 => ($this->targetDirs[2].'/Resources/translations/cocorico_admin_menu.en.xliff'), 12 => ($this->targetDirs[2].'/Resources/translations/cocorico.en.xliff'), 13 => ($this->targetDirs[2].'/Resources/translations/cocorico_breadcrumbs.en.xliff'), 14 => ($this->targetDirs[2].'/Resources/translations/cocorico_mail.en.xliff'), 15 => ($this->targetDirs[2].'/Resources/translations/cocorico_review.en.xliff'), 16 => ($this->targetDirs[2].'/Resources/translations/cocorico_home.en.xliff'), 17 => ($this->targetDirs[2].'/Resources/translations/cocorico_meta.en.xliff'), 18 => ($this->targetDirs[2].'/Resources/translations/cocorico_booking.en.xliff'), 19 => ($this->targetDirs[2].'/Resources/translations/SonataAdminBundle.en.xliff'), 20 => ($this->targetDirs[2].'/Resources/translations/cocorico_contact.en.xliff'), 21 => ($this->targetDirs[2].'/Resources/translations/SonataUserBundle.en.xliff'), 22 => ($this->targetDirs[2].'/Resources/translations/cocorico_user.en.xliff'), 23 => ($this->targetDirs[2].'/Resources/translations/validators.en.xliff'), 24 => ($this->targetDirs[2].'/Resources/translations/messages.en.xliff'), 25 => ($this->targetDirs[2].'/Resources/translations/routes.en.xliff'), 26 => ($this->targetDirs[2].'/Resources/translations/cocorico_message.en.xliff'), 27 => ($this->targetDirs[2].'/Resources/translations/cocorico_listing.en.xliff'), 28 => ($this->targetDirs[2].'/Resources/translations/cocorico_geo.en.xliff')), 'th' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf'), 'lb' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf', 1 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf', 2 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf', 3 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lb.yml', 4 => '/cocorico/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.lb.xliff', 5 => '/cocorico/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.lb.xliff'), 'pt_PT' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf', 1 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_PT.yml'), 'ua' => array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf'), 'zh' => array(0 => '/cocorico/vendor/hwi/oauth-bundle/Resources/translations/HWIOAuthBundle.zh.yml'))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /**
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the 'troopers_mangopay.bank_information_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\MangopayBundle\Helper\BankInformationHelper A Troopers\MangopayBundle\Helper\BankInformationHelper instance
     */
    protected function getTroopersMangopay_BankInformationHelperService()
    {
        return $this->services['troopers_mangopay.bank_information_helper'] = new \Troopers\MangopayBundle\Helper\BankInformationHelper($this->get('troopers_mangopay.mango_api'), $this->get('doctrine.orm.default_entity_manager'), $this->get('troopers_mangopay.user_helper'));
    }

    /**
     * Gets the 'troopers_mangopay.bankwire_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\MangopayBundle\Helper\BankwireHelper A Troopers\MangopayBundle\Helper\BankwireHelper instance
     */
    protected function getTroopersMangopay_BankwireHelperService()
    {
        return $this->services['troopers_mangopay.bankwire_helper'] = new \Troopers\MangopayBundle\Helper\BankwireHelper($this->get('troopers_mangopay.mango_api'));
    }

    /**
     * Gets the 'troopers_mangopay.card_registration_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\MangopayBundle\Helper\CardRegistrationHelper A Troopers\MangopayBundle\Helper\CardRegistrationHelper instance
     */
    protected function getTroopersMangopay_CardRegistrationHelperService()
    {
        return $this->services['troopers_mangopay.card_registration_helper'] = new \Troopers\MangopayBundle\Helper\CardRegistrationHelper($this->get('troopers_mangopay.mango_api'), $this->get('doctrine.orm.default_entity_manager'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'troopers_mangopay.form.card' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\MangopayBundle\Form\CardType A Troopers\MangopayBundle\Form\CardType instance
     */
    protected function getTroopersMangopay_Form_CardService()
    {
        return $this->services['troopers_mangopay.form.card'] = new \Troopers\MangopayBundle\Form\CardType();
    }

    /**
     * Gets the 'troopers_mangopay.mango_api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\MangopayBundle\Helper\MangopayHelper A Troopers\MangopayBundle\Helper\MangopayHelper instance
     */
    protected function getTroopersMangopay_MangoApiService()
    {
        return $this->services['troopers_mangopay.mango_api'] = new \Troopers\MangopayBundle\Helper\MangopayHelper('koduteenus_mangopay1', 'Tanusree_1', 'https://api.sandbox.mangopay.com', $this->get('debug.event_dispatcher'), $this->get('doctrine.orm.default_entity_manager'), false);
    }

    /**
     * Gets the 'troopers_mangopay.payment_direct_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\MangopayBundle\Helper\PaymentDirectHelper A Troopers\MangopayBundle\Helper\PaymentDirectHelper instance
     */
    protected function getTroopersMangopay_PaymentDirectHelperService()
    {
        return $this->services['troopers_mangopay.payment_direct_helper'] = new \Troopers\MangopayBundle\Helper\PaymentDirectHelper($this->get('troopers_mangopay.mango_api'), $this->get('router'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'troopers_mangopay.payment_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\MangopayBundle\Helper\PaymentHelper A Troopers\MangopayBundle\Helper\PaymentHelper instance
     */
    protected function getTroopersMangopay_PaymentHelperService()
    {
        return $this->services['troopers_mangopay.payment_helper'] = new \Troopers\MangopayBundle\Helper\PaymentHelper($this->get('troopers_mangopay.mango_api'), $this->get('router'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'troopers_mangopay.payment_out_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\MangopayBundle\Helper\PaymentOutHelper A Troopers\MangopayBundle\Helper\PaymentOutHelper instance
     */
    protected function getTroopersMangopay_PaymentOutHelperService()
    {
        return $this->services['troopers_mangopay.payment_out_helper'] = new \Troopers\MangopayBundle\Helper\PaymentOutHelper($this->get('troopers_mangopay.mango_api'));
    }

    /**
     * Gets the 'troopers_mangopay.user_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\MangopayBundle\Helper\UserHelper A Troopers\MangopayBundle\Helper\UserHelper instance
     */
    protected function getTroopersMangopay_UserHelperService()
    {
        return $this->services['troopers_mangopay.user_helper'] = new \Troopers\MangopayBundle\Helper\UserHelper($this->get('troopers_mangopay.mango_api'), $this->get('doctrine.orm.default_entity_manager'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'troopers_mangopay.wallet_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Troopers\MangopayBundle\Helper\WalletHelper A Troopers\MangopayBundle\Helper\WalletHelper instance
     */
    protected function getTroopersMangopay_WalletHelperService()
    {
        return $this->services['troopers_mangopay.wallet_helper'] = new \Troopers\MangopayBundle\Helper\WalletHelper($this->get('troopers_mangopay.mango_api'), $this->get('troopers_mangopay.user_helper'), $this->get('doctrine.orm.default_entity_manager'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance
     */
    protected function getTwigService()
    {
        $a = $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('request_stack');
        $c = $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('fragment.handler');

        $e = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b, $c);

        $f = new \Knp\Menu\Util\MenuManipulator();

        $g = new \Symfony\Bridge\Twig\AppVariable();
        $g->setEnvironment('dev');
        $g->setDebug(true);
        if ($this->has('security.token_storage')) {
            $g->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $g->setRequestStack($b);
        }
        $g->setContainer($this);

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'cache' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'CocoricoCoreBundle:Form:fields.html.twig', 2 => 'SonataCoreBundle:Form:datepicker.html.twig'), 'autoescape' => 'name', 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension($this->get('twig.text_extension'));
        $instance->addExtension($this->get('twig.extension.intl'));
        $instance->addExtension($this->get('cocorico.twig.core_extension'));
        $instance->addExtension($this->get('lexik_currency.currency_extension'));
        $instance->addExtension($this->get('cocorico.twig.language_extension'));
        $instance->addExtension($this->get('cocorico.twig.country_extension'));
        $instance->addExtension($this->get('cocorico.twig.extra_bundle_extension'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->get('twig.profile'), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages'), $e));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($d));
        $instance->addExtension($e);
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'FMElfinderBundle:Form:elfinder_widget.html.twig', 1 => 'IvoryCKEditorBundle:Form:ckeditor_widget.html.twig', 2 => 'form_div_layout.html.twig', 3 => 'CocoricoCoreBundle:Form:fields.html.twig', 4 => 'SonataCoreBundle:Form:datepicker.html.twig', 5 => 'LiipImagineBundle:Form:form_div_layout.html.twig', 6 => 'SonataUserBundle:Form:form_admin_fields.html.twig', 7 => 'CocoricoCoreBundle:Form:translations.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(0 => 'CocoricoCoreBundle', 1 => 'CocoricoUserBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('jms_translation.twig_extension'));
        $instance->addExtension($this->get('oneup_uploader.twig.extension.uploader'));
        $instance->addExtension(new \Liip\ImagineBundle\Templating\ImagineExtension($this->get('liip_imagine.cache.manager')));
        $instance->addExtension($this->get('sonata.core.flashmessage.twig.extension'));
        $instance->addExtension($this->get('sonata.core.twig.extension.wrapping'));
        $instance->addExtension($this->get('sonata.core.twig.extension.text'));
        $instance->addExtension($this->get('sonata.core.twig.status_extension'));
        $instance->addExtension($this->get('sonata.core.twig.template_extension'));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension($this->get('sonata.block.templating.helper')));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'), $f), $this->get('knp_menu.matcher'), $f));
        $instance->addExtension($this->get('sonata.admin.twig.extension'));
        $instance->addExtension($this->get('fos_message.twig_extension'));
        $instance->addExtension($this->get('white_october_breadcrumbs.twig'));
        $instance->addExtension(new \HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension($this->get('hwi_oauth.templating.helper.oauth')));
        $instance->addExtension($this->get('ivory_ck_editor.twig_extension'));
        $instance->addExtension($this->get('twig.extension.fm_elfinder_init'));
        $instance->addExtension($this->get('cocorico_geo.twig.cocorico_geo_extension'));
        $instance->addExtension($this->get('cocorico.star_rating.twig.extension'));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension());
        $instance->addGlobal('app', $g);
        $instance->addGlobal('cocorico_site_name', 'KoduTeenus');
        $instance->addGlobal('cocorico_phone', '+91(0) 78 93 27 30 22');
        $instance->addGlobal('cocorico_address', 'Harju maakond (county/state), Kuusalu vald (municipality/city), Pudisoo küla (village/street), Männimäe (Place/house), 74626 (zip)');
        $instance->addGlobal('cocorico_short_description', 'KoduTeenus, is a two-sided home services marketplace application that connects \'TaskTakers,\' people who need help, and \'TaskProviders,\' a network of pre-approved, background checked individuals, who have the time and skills to serve \'TaskTakers\'.');
        $instance->addGlobal('cocorico_contact_mail', 'contact@koduteenus.online');
        $instance->addGlobal('cocorico_contact_mail_obfuscated', '&#099;&#111;&#110;&#116;&#097;&#099;&#116;&#064;&#107;&#111;&#100;&#117;&#116;&#101;&#101;&#110;&#117;&#115;&#046;&#111;&#110;&#108;&#105;&#110;&#101;');
        $instance->addGlobal('cocorico_from_email', 'no-reply@koduteenus.online');
        $instance->addGlobal('cocorico_vat_number', 'ES 12 123 456 789');
        $instance->addGlobal('cocorico_facebook_id', 'none');
        $instance->addGlobal('cocorico_google_analytics', 'UA-64445856-1');
        $instance->addGlobal('cocorico_google_tag_manager', false);
        $instance->addGlobal('cocorico_admin_translation', false);
        $instance->addGlobal('listing_img_max', 24);
        $instance->addGlobal('listing_img_max_upload_size', 12);
        $instance->addGlobal('listing_img_xsmall_w', 90);
        $instance->addGlobal('listing_img_xsmall_h', 67);
        $instance->addGlobal('listing_img_small_w', 100);
        $instance->addGlobal('listing_img_small_h', 75);
        $instance->addGlobal('listing_img_xxmedium_w', 150);
        $instance->addGlobal('listing_img_xxmedium_h', 112);
        $instance->addGlobal('listing_img_xmedium_w', 200);
        $instance->addGlobal('listing_img_xmedium_h', 150);
        $instance->addGlobal('listing_img_medium_w', 275);
        $instance->addGlobal('listing_img_medium_h', 206);
        $instance->addGlobal('listing_img_large_w', 384);
        $instance->addGlobal('listing_img_large_h', 288);
        $instance->addGlobal('listing_new_map_w', 100);
        $instance->addGlobal('listing_new_map_h', 300);
        $instance->addGlobal('listing_edit_map_w', 100);
        $instance->addGlobal('listing_edit_map_h', 418);
        $instance->addGlobal('listing_show_map_w', 100);
        $instance->addGlobal('listing_show_map_h', 480);
        $instance->addGlobal('listing_search_map_w', 390);
        $instance->addGlobal('listing_search_map_h', 1110);
        $instance->addGlobal('upload_image_w', 120);
        $instance->addGlobal('upload_image_h', 90);
        $instance->addGlobal('user_img_max', 6);
        $instance->addGlobal('user_img_max_upload_size', 12);
        $instance->addGlobal('sonata_block', $this->get('sonata.block.twig.global'));
        $instance->addGlobal('sonata_user', $this->get('sonata.user.twig.global'));
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.extension.fm_elfinder_init' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FM\ElfinderBundle\Twig\Extension\FMElfinderExtension A FM\ElfinderBundle\Twig\Extension\FMElfinderExtension instance
     */
    protected function getTwig_Extension_FmElfinderInitService()
    {
        return $this->services['twig.extension.fm_elfinder_init'] = new \FM\ElfinderBundle\Twig\Extension\FMElfinderExtension($this->get('twig'));
    }

    /**
     * Gets the 'twig.extension.intl' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extensions_Extension_Intl A Twig_Extensions_Extension_Intl instance
     */
    protected function getTwig_Extension_IntlService()
    {
        return $this->services['twig.extension.intl'] = new \Twig_Extensions_Extension_Intl();
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', 'Framework');
        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', 'Security');
        $instance->addPath(($this->targetDirs[2].'/Resources/TwigBundle/views'), 'Twig');
        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', 'Twig');
        $instance->addPath('/cocorico/vendor/symfony/swiftmailer-bundle/Resources/views', 'Swiftmailer');
        $instance->addPath('/cocorico/vendor/doctrine/doctrine-bundle/Resources/views', 'Doctrine');
        $instance->addPath('/cocorico/src/Cocorico/UserBundle/Resources/views', 'FOSUser');
        $instance->addPath('/cocorico/vendor/sonata-project/user-bundle/Resources/views', 'FOSUser');
        $instance->addPath('/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views', 'FOSUser');
        $instance->addPath('/cocorico/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views', 'JMSTranslation');
        $instance->addPath('/cocorico/vendor/a2lix/translation-form-bundle/A2lix/TranslationFormBundle/Resources/views', 'A2lixTranslationForm');
        $instance->addPath('/cocorico/vendor/liip/imagine-bundle/Resources/views', 'LiipImagine');
        $instance->addPath('/cocorico/vendor/willdurand/geocoder-bundle/Bazinga/Bundle/GeocoderBundle/Resources/views', 'BazingaGeocoder');
        $instance->addPath('/cocorico/vendor/doctrine/mongodb-odm-bundle/Resources/views', 'DoctrineMongoDB');
        $instance->addPath('/cocorico/vendor/sonata-project/core-bundle/Resources/views', 'SonataCore');
        $instance->addPath('/cocorico/vendor/sonata-project/block-bundle/Resources/views', 'SonataBlock');
        $instance->addPath('/cocorico/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views', 'SonataDoctrineORMAdmin');
        $instance->addPath('/cocorico/src/Cocorico/SonataAdminBundle/Resources/views', 'SonataAdmin');
        $instance->addPath('/cocorico/vendor/sonata-project/admin-bundle/Resources/views', 'SonataAdmin');
        $instance->addPath('/cocorico/src/Cocorico/UserBundle/Resources/views', 'SonataUser');
        $instance->addPath('/cocorico/vendor/sonata-project/user-bundle/Resources/views', 'SonataUser');
        $instance->addPath('/cocorico/src/Cocorico/MessageBundle/Resources/views', 'FOSMessage');
        $instance->addPath('/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views', 'FOSMessage');
        $instance->addPath('/cocorico/vendor/whiteoctober/breadcrumbs-bundle/WhiteOctober/BreadcrumbsBundle/Resources/views', 'WhiteOctoberBreadcrumbs');
        $instance->addPath('/cocorico/vendor/hwi/oauth-bundle/Resources/views', 'HWIOAuth');
        $instance->addPath('/cocorico/vendor/egeloen/ckeditor-bundle/Resources/views', 'IvoryCKEditor');
        $instance->addPath('/cocorico/vendor/helios-ag/fm-elfinder-bundle/Resources/views', 'FMElfinder');
        $instance->addPath('/cocorico/vendor/simplethings/entity-audit-bundle/src/SimpleThings/EntityAudit/Resources/views', 'SimpleThingsEntityAudit');
        $instance->addPath('/cocorico/src/Cocorico/CoreBundle/Resources/views', 'CocoricoCore');
        $instance->addPath('/cocorico/src/Cocorico/GeoBundle/Resources/views', 'CocoricoGeo');
        $instance->addPath('/cocorico/src/Cocorico/UserBundle/Resources/views', 'CocoricoUser');
        $instance->addPath('/cocorico/src/Cocorico/PageBundle/Resources/views', 'CocoricoPage');
        $instance->addPath('/cocorico/src/Cocorico/CMSBundle/Resources/views', 'CocoricoCMS');
        $instance->addPath('/cocorico/src/Cocorico/BreadcrumbBundle/Resources/views', 'CocoricoBreadcrumb');
        $instance->addPath('/cocorico/src/Cocorico/SonataAdminBundle/Resources/views', 'CocoricoSonataAdmin');
        $instance->addPath('/cocorico/src/Cocorico/MessageBundle/Resources/views', 'CocoricoMessage');
        $instance->addPath('/cocorico/src/Cocorico/ContactBundle/Resources/views', 'CocoricoContact');
        $instance->addPath('/cocorico/src/Cocorico/ReviewBundle/Resources/views', 'CocoricoReview');
        $instance->addPath('/cocorico/src/Cocorico/ConfigBundle/Resources/views', 'CocoricoConfig');
        $instance->addPath('/cocorico/vendor/troopers/mangopay-bundle/Troopers/MangopayBundle/Resources/views', 'TroopersMangopay');
        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views', 'WebProfiler');
        $instance->addPath(($this->targetDirs[2].'/Resources/views'));
        $instance->addPath('/cocorico/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form');
        $instance->addPath('/cocorico/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views');

        return $instance;
    }

    /**
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /**
     * Gets the 'twig.text_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extensions_Extension_Text A Twig_Extensions_Extension_Text instance
     */
    protected function getTwig_TextExtensionService()
    {
        return $this->services['twig.text_extension'] = new \Twig_Extensions_Extension_Text();
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'validate_request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener A Symfony\Component\HttpKernel\EventListener\ValidateRequestListener instance
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory($this->get('validator.validator_factory'));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => '/cocorico/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml', 1 => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation.xml', 2 => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/config/validation.xml'));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('cocorico_user.user_manager')), 2 => $this->get('doctrine_odm.mongodb.validator_initializer')));
        $instance->addXmlMapping('/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml');

        return $instance;
    }

    /**
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.translation' => array(0 => 'translation', 1 => '@WebProfiler/Collector/translation.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'bazinga_geocoder.data_collector' => array(0 => 'geocoder', 1 => 'BazingaGeocoderBundle:Collector:geocoder'), 'doctrine_mongodb.odm.data_collector.pretty' => array(0 => 'mongodb', 1 => 'DoctrineMongoDBBundle:Collector:mongodb'), 'sonata.block.data_collector' => array(0 => 'block', 1 => 'SonataBlockBundle:Profiler:block.html.twig'), 'data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig')), 'bottom');
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), '^/(app(_[\\w]+)?\\.php/)?_wdt');
    }

    /**
     * Gets the 'white_october_breadcrumbs' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs A WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs instance
     */
    protected function getWhiteOctoberBreadcrumbsService()
    {
        $this->services['white_october_breadcrumbs'] = $instance = new \WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs();

        $instance->setRouter($this->get('router'));

        return $instance;
    }

    /**
     * Gets the 'white_october_breadcrumbs.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \WhiteOctober\BreadcrumbsBundle\Templating\Helper\BreadcrumbsHelper A WhiteOctober\BreadcrumbsBundle\Templating\Helper\BreadcrumbsHelper instance
     */
    protected function getWhiteOctoberBreadcrumbs_HelperService()
    {
        return $this->services['white_october_breadcrumbs.helper'] = new \WhiteOctober\BreadcrumbsBundle\Templating\Helper\BreadcrumbsHelper($this->get('templating'), $this->get('white_october_breadcrumbs'), array('separator' => '', 'separatorClass' => 'separator', 'listId' => 'breadcrumbs', 'listClass' => 'breadcrumb', 'itemClass' => '', 'linkRel' => '', 'translation_domain' => 'cocorico_breadcrumbs', 'viewTemplate' => 'WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig', 'locale' => NULL));
    }

    /**
     * Gets the 'white_october_breadcrumbs.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension A WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension instance
     */
    protected function getWhiteOctoberBreadcrumbs_TwigService()
    {
        return $this->services['white_october_breadcrumbs.twig'] = new \WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension($this);
    }

    /**
     * Updates the 'request' service.
     */
    protected function synchronizeRequestService()
    {
        if ($this->initialized('a2lix_translation_form.default.type.translatedentity')) {
            $this->get('a2lix_translation_form.default.type.translatedentity')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('hwi_oauth.templating.helper.oauth')) {
            $this->get('hwi_oauth.templating.helper.oauth')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance
     */
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[2].'/../web'), true);
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'doctrine_mongodb.odm.data_collector.pretty' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\DataCollector\PrettyDataCollector A Doctrine\Bundle\MongoDBBundle\DataCollector\PrettyDataCollector instance
     */
    protected function getDoctrineMongodb_Odm_DataCollector_PrettyService()
    {
        $this->services['doctrine_mongodb.odm.data_collector.pretty'] = $instance = new \Doctrine\Bundle\MongoDBBundle\DataCollector\PrettyDataCollector();

        $instance->setBatchInsertThreshold(4);

        return $instance;
    }

    /**
     * Gets the 'form.server_params' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Util\ServerParams A Symfony\Component\Form\Util\ServerParams instance
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /**
     * Gets the 'fos_user.entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    protected function getFosUser_EntityManagerService()
    {
        return $this->services['fos_user.entity_manager'] = $this->get('doctrine')->getManager(NULL);
    }

    /**
     * Gets the 'fos_user.user_to_username_transformer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer A FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer instance
     */
    protected function getFosUser_UserToUsernameTransformerService()
    {
        return $this->services['fos_user.user_to_username_transformer'] = new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('cocorico_user.user_manager'));
    }

    /**
     * Gets the 'jms_di_extra.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \JMS\DiExtraBundle\HttpKernel\ControllerResolver A JMS\DiExtraBundle\HttpKernel\ControllerResolver instance
     */
    protected function getJmsDiExtra_ControllerResolverService()
    {
        return $this->services['jms_di_extra.controller_resolver'] = new \JMS\DiExtraBundle\HttpKernel\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'jms_i18n_routing.locale_resolver.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \JMS\I18nRoutingBundle\Router\DefaultLocaleResolver A JMS\I18nRoutingBundle\Router\DefaultLocaleResolver instance
     */
    protected function getJmsI18nRouting_LocaleResolver_DefaultService()
    {
        return $this->services['jms_i18n_routing.locale_resolver.default'] = new \JMS\I18nRoutingBundle\Router\DefaultLocaleResolver('hl');
    }

    /**
     * Gets the 'jms_i18n_routing.route_exclusion_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \JMS\I18nRoutingBundle\Router\DefaultRouteExclusionStrategy A JMS\I18nRoutingBundle\Router\DefaultRouteExclusionStrategy instance
     */
    protected function getJmsI18nRouting_RouteExclusionStrategyService()
    {
        return $this->services['jms_i18n_routing.route_exclusion_strategy'] = new \JMS\I18nRoutingBundle\Router\DefaultRouteExclusionStrategy();
    }

    /**
     * Gets the 'oneup_uploader.error_handler.blueimp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Oneup\UploaderBundle\Uploader\ErrorHandler\BlueimpErrorHandler A Oneup\UploaderBundle\Uploader\ErrorHandler\BlueimpErrorHandler instance
     */
    protected function getOneupUploader_ErrorHandler_BlueimpService()
    {
        return $this->services['oneup_uploader.error_handler.blueimp'] = new \Oneup\UploaderBundle\Uploader\ErrorHandler\BlueimpErrorHandler($this->get('translator'));
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.authentication.trust_resolver');
        $b = $this->get('security.role_hierarchy');

        $this->services['security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'unanimous', false, true);

        $instance->setVoters(array(0 => new \Cocorico\ReviewBundle\Security\Voter\ReviewVoter(), 1 => new \Cocorico\UserBundle\Security\Voter\UserImageVoter(), 2 => new \Cocorico\CoreBundle\Security\Voter\ListingImageVoter(), 3 => new \Cocorico\CoreBundle\Security\Voter\ListingVoter(), 4 => new \Cocorico\CoreBundle\Security\Voter\BookingVoter(), 5 => new \Cocorico\UserBundle\Security\Voter\UserImageVoter(), 6 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $a, $b), 7 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($b), 8 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($a)));

        return $instance;
    }

    /**
     * Gets the 'security.access_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener A Symfony\Component\Security\Http\Firewall\AccessListener instance
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.token_storage'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'));
    }

    /**
     * Gets the 'security.access_map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\AccessMap A Symfony\Component\Security\Http\AccessMap instance
     */
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/logout$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login-check$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), array(0 => 'ROLE_ADMIN', 1 => 'ROLE_SONATA_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/efconnect'), array(0 => 'ROLE_ADMIN', 1 => 'ROLE_SONATA_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/elfinder'), array(0 => 'ROLE_ADMIN', 1 => 'ROLE_SONATA_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/(en|ee)/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/(en|ee)/register'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/(en|ee)/resetting'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/(en|ee)/oauth/fb-login'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/(en|ee)/(dashboard|tableau-de-bord)/'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/.*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);

        return $instance;
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('cocorico_user.user_manager');
        $b = $this->get('security.user_checker.admin');
        $c = $this->get('security.encoder_factory');

        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'admin', $c, true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5ba1b840292636.81391813'), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'main', $c, true), 3 => new \HWI\Bundle\OAuthBundle\Security\Core\Authentication\Provider\OAuthProvider($this->get('cocorico_user.oauth.user.provider.entity'), $this->get('hwi_oauth.resource_ownermap.main'), $b), 4 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5ba1b840292636.81391813')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.session_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy A Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy instance
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.channel_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener A Symfony\Component\Security\Http\Firewall\ChannelListener instance
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.http_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils A Symfony\Component\Security\Http\HttpUtils instance
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }

    /**
     * Gets the 'security.logout.handler.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\SessionLogoutHandler A Symfony\Component\Security\Http\Logout\SessionLogoutHandler instance
     */
    protected function getSecurity_Logout_Handler_SessionService()
    {
        return $this->services['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler();
    }

    /**
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->registerListener('admin', '/admin/logout', 'logout', '_csrf_token', NULL);
        $instance->registerListener('main', 'cocorico_user_logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_SONATA_ADMIN'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ALLOWED_TO_SWITCH')));
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'sonata.block.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sonata\BlockBundle\Block\BlockServiceManager A Sonata\BlockBundle\Block\BlockServiceManager instance
     */
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, true, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->add('sonata.block.service.container', 'sonata.block.service.container', array());
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', array());
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', array(0 => 'cms'));
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', array());
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', array());
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', array());
        $instance->add('sonata.admin_doctrine_orm.block.audit', 'sonata.admin_doctrine_orm.block.audit', array());
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', array(0 => 'admin'));
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', array(0 => 'admin'));
        $instance->add('sonata.user.block.menu', 'sonata.user.block.menu', array(0 => 'cms'));
        $instance->add('sonata.user.block.account', 'sonata.user.block.account', array(0 => 'cms'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * Gets the 'validator.validator_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory A Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory instance
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->services['validator.validator_factory'] = new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('listing' => 'cocorico.listing_validator', 'Cocorico\\CoreBundle\\Validator\\Constraints\\ListingValidator' => 'cocorico.listing_validator', 'time_ranges_overlap' => 'cocorico.times_range_overlap_validator', 'Cocorico\\CoreBundle\\Validator\\Constraints\\TimeRangesOverlapValidator' => 'cocorico.times_range_overlap_validator', 'listing_availability' => 'cocorico.listing_availability_validator', 'Cocorico\\CoreBundle\\Validator\\Constraints\\ListingAvailabilityValidator' => 'cocorico.listing_availability_validator', 'listing_availabilities_price' => 'cocorico.listing_availabilities_price_validator', 'Cocorico\\CoreBundle\\Validator\\Constraints\\ListingAvailabilitiesPriceValidator' => 'cocorico.listing_availabilities_price_validator', 'booking' => 'cocorico.booking_validator', 'Cocorico\\CoreBundle\\Validator\\Constraints\\BookingValidator' => 'cocorico.booking_validator', 'listing_discount' => 'cocorico.listing_discount_validator', 'Cocorico\\CoreBundle\\Validator\\Constraints\\ListingDiscountValidator' => 'cocorico.listing_discount_validator', 'validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine_odm.mongodb.validator.unique', 'doctrine_odm.mongodb.unique' => 'doctrine_odm.mongodb.validator.unique', 'sonata.core.validator.inline' => 'sonata.core.validator.inline', 'Sonata\\CoreBundle\\Validator\\InlineValidator' => 'sonata.core.validator.inline', 'sonata.admin.validator.inline' => 'sonata.admin.validator.inline', 'Sonata\\AdminBundle\\Validator\\InlineValidator' => 'sonata.admin.validator.inline', 'fos_message.validator.authorization' => 'fos_message.validator.authorization', 'FOS\\MessageBundle\\Validator\\AuthorizationValidator' => 'fos_message.validator.authorization', 'fos_message.validator.reply_authorization' => 'fos_message.validator.reply_authorization', 'FOS\\MessageBundle\\Validator\\ReplyAuthorizationValidator' => 'fos_message.validator.reply_authorization', 'fos_message.validator.spam' => 'fos_message.validator.spam', 'FOS\\MessageBundle\\Validator\\SpamValidator' => 'fos_message.validator.spam', 'fos_message.validator.self_recipient' => 'fos_message.validator.self_recipient', 'FOS\\MessageBundle\\Validator\\SelfRecipientValidator' => 'fos_message.validator.self_recipient', 'user' => 'cocorico_user.user.validator', 'Cocorico\\UserBundle\\Validator\\Constraints\\UserValidator' => 'cocorico_user.user.validator'));
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'/logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle',
                'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle',
                'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle',
                'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle',
                'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\JMSPaymentCoreBundle',
                'JMSPaymentPaypalBundle' => 'JMS\\Payment\\PaypalBundle\\JMSPaymentPaypalBundle',
                'A2lixTranslationFormBundle' => 'A2lix\\TranslationFormBundle\\A2lixTranslationFormBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'LexikCurrencyBundle' => 'Lexik\\Bundle\\CurrencyBundle\\LexikCurrencyBundle',
                'BazingaGeocoderBundle' => 'Bazinga\\Bundle\\GeocoderBundle\\BazingaGeocoderBundle',
                'DoctrineMongoDBBundle' => 'Doctrine\\Bundle\\MongoDBBundle\\DoctrineMongoDBBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle',
                'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle',
                'FOSMessageBundle' => 'FOS\\MessageBundle\\FOSMessageBundle',
                'WhiteOctoberBreadcrumbsBundle' => 'WhiteOctober\\BreadcrumbsBundle\\WhiteOctoberBreadcrumbsBundle',
                'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle',
                'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle',
                'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'SimpleThingsEntityAuditBundle' => 'SimpleThings\\EntityAudit\\SimpleThingsEntityAuditBundle',
                'CocoricoCoreBundle' => 'Cocorico\\CoreBundle\\CocoricoCoreBundle',
                'CocoricoGeoBundle' => 'Cocorico\\GeoBundle\\CocoricoGeoBundle',
                'CocoricoUserBundle' => 'Cocorico\\UserBundle\\CocoricoUserBundle',
                'CocoricoPageBundle' => 'Cocorico\\PageBundle\\CocoricoPageBundle',
                'CocoricoCMSBundle' => 'Cocorico\\CMSBundle\\CocoricoCMSBundle',
                'CocoricoBreadcrumbBundle' => 'Cocorico\\BreadcrumbBundle\\CocoricoBreadcrumbBundle',
                'CocoricoSonataAdminBundle' => 'Cocorico\\SonataAdminBundle\\CocoricoSonataAdminBundle',
                'CocoricoMessageBundle' => 'Cocorico\\MessageBundle\\CocoricoMessageBundle',
                'CocoricoContactBundle' => 'Cocorico\\ContactBundle\\CocoricoContactBundle',
                'CocoricoReviewBundle' => 'Cocorico\\ReviewBundle\\CocoricoReviewBundle',
                'CocoricoConfigBundle' => 'Cocorico\\ConfigBundle\\CocoricoConfigBundle',
                'TroopersMangopayBundle' => 'Troopers\\MangopayBundle\\TroopersMangopayBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'DeployBundle' => 'Hpatoio\\DeployBundle\\DeployBundle',
            ),
            'kernel.bundles_metadata' => array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle',
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle',
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle',
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/monolog-bundle',
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/swiftmailer-bundle',
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'AsseticBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/assetic-bundle',
                    'namespace' => 'Symfony\\Bundle\\AsseticBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/doctrine/doctrine-bundle',
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/doctrine/doctrine-migrations-bundle',
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sensio/framework-extra-bundle',
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'FOSUserBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/friendsofsymfony/user-bundle/FOS/UserBundle',
                    'namespace' => 'FOS\\UserBundle',
                ),
                'JMSI18nRoutingBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/jms/i18n-routing-bundle/JMS/I18nRoutingBundle',
                    'namespace' => 'JMS\\I18nRoutingBundle',
                ),
                'JMSTranslationBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/jms/translation-bundle/JMS/TranslationBundle',
                    'namespace' => 'JMS\\TranslationBundle',
                ),
                'JMSAopBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/jms/aop-bundle/JMS/AopBundle',
                    'namespace' => 'JMS\\AopBundle',
                ),
                'JMSDiExtraBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/jms/di-extra-bundle',
                    'namespace' => 'JMS\\DiExtraBundle',
                ),
                'JMSPaymentCoreBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/jms/payment-core-bundle/JMS/Payment/CoreBundle',
                    'namespace' => 'JMS\\Payment\\CoreBundle',
                ),
                'JMSPaymentPaypalBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/jms/payment-paypal-bundle/JMS/Payment/PaypalBundle',
                    'namespace' => 'JMS\\Payment\\PaypalBundle',
                ),
                'A2lixTranslationFormBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/a2lix/translation-form-bundle/A2lix/TranslationFormBundle',
                    'namespace' => 'A2lix\\TranslationFormBundle',
                ),
                'StofDoctrineExtensionsBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/stof/doctrine-extensions-bundle',
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ),
                'OneupUploaderBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/oneup/uploader-bundle/Oneup/UploaderBundle',
                    'namespace' => 'Oneup\\UploaderBundle',
                ),
                'LiipImagineBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/liip/imagine-bundle',
                    'namespace' => 'Liip\\ImagineBundle',
                ),
                'LexikCurrencyBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/lexik/currency-bundle',
                    'namespace' => 'Lexik\\Bundle\\CurrencyBundle',
                ),
                'BazingaGeocoderBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/willdurand/geocoder-bundle/Bazinga/Bundle/GeocoderBundle',
                    'namespace' => 'Bazinga\\Bundle\\GeocoderBundle',
                ),
                'DoctrineMongoDBBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/doctrine/mongodb-odm-bundle',
                    'namespace' => 'Doctrine\\Bundle\\MongoDBBundle',
                ),
                'SonataCoreBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sonata-project/core-bundle',
                    'namespace' => 'Sonata\\CoreBundle',
                ),
                'SonataBlockBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sonata-project/block-bundle',
                    'namespace' => 'Sonata\\BlockBundle',
                ),
                'KnpMenuBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/knplabs/knp-menu-bundle',
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ),
                'SonataDoctrineORMAdminBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sonata-project/doctrine-orm-admin-bundle',
                    'namespace' => 'Sonata\\DoctrineORMAdminBundle',
                ),
                'SonataAdminBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sonata-project/admin-bundle',
                    'namespace' => 'Sonata\\AdminBundle',
                ),
                'SonataEasyExtendsBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sonata-project/easy-extends-bundle',
                    'namespace' => 'Sonata\\EasyExtendsBundle',
                ),
                'SonataUserBundle' => array(
                    'parent' => 'FOSUserBundle',
                    'path' => '/cocorico/vendor/sonata-project/user-bundle',
                    'namespace' => 'Sonata\\UserBundle',
                ),
                'FOSMessageBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle',
                    'namespace' => 'FOS\\MessageBundle',
                ),
                'WhiteOctoberBreadcrumbsBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/whiteoctober/breadcrumbs-bundle/WhiteOctober/BreadcrumbsBundle',
                    'namespace' => 'WhiteOctober\\BreadcrumbsBundle',
                ),
                'HWIOAuthBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/hwi/oauth-bundle',
                    'namespace' => 'HWI\\Bundle\\OAuthBundle',
                ),
                'IvoryCKEditorBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/egeloen/ckeditor-bundle',
                    'namespace' => 'Ivory\\CKEditorBundle',
                ),
                'FMElfinderBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/helios-ag/fm-elfinder-bundle',
                    'namespace' => 'FM\\ElfinderBundle',
                ),
                'DoctrineFixturesBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/doctrine/doctrine-fixtures-bundle',
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ),
                'SimpleThingsEntityAuditBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/simplethings/entity-audit-bundle/src/SimpleThings/EntityAudit',
                    'namespace' => 'SimpleThings\\EntityAudit',
                ),
                'CocoricoCoreBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/CoreBundle',
                    'namespace' => 'Cocorico\\CoreBundle',
                ),
                'CocoricoGeoBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/GeoBundle',
                    'namespace' => 'Cocorico\\GeoBundle',
                ),
                'CocoricoUserBundle' => array(
                    'parent' => 'SonataUserBundle',
                    'path' => '/cocorico/src/Cocorico/UserBundle',
                    'namespace' => 'Cocorico\\UserBundle',
                ),
                'CocoricoPageBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/PageBundle',
                    'namespace' => 'Cocorico\\PageBundle',
                ),
                'CocoricoCMSBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/CMSBundle',
                    'namespace' => 'Cocorico\\CMSBundle',
                ),
                'CocoricoBreadcrumbBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/BreadcrumbBundle',
                    'namespace' => 'Cocorico\\BreadcrumbBundle',
                ),
                'CocoricoSonataAdminBundle' => array(
                    'parent' => 'SonataAdminBundle',
                    'path' => '/cocorico/src/Cocorico/SonataAdminBundle',
                    'namespace' => 'Cocorico\\SonataAdminBundle',
                ),
                'CocoricoMessageBundle' => array(
                    'parent' => 'FOSMessageBundle',
                    'path' => '/cocorico/src/Cocorico/MessageBundle',
                    'namespace' => 'Cocorico\\MessageBundle',
                ),
                'CocoricoContactBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/ContactBundle',
                    'namespace' => 'Cocorico\\ContactBundle',
                ),
                'CocoricoReviewBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/ReviewBundle',
                    'namespace' => 'Cocorico\\ReviewBundle',
                ),
                'CocoricoConfigBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/src/Cocorico/ConfigBundle',
                    'namespace' => 'Cocorico\\ConfigBundle',
                ),
                'TroopersMangopayBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/troopers/mangopay-bundle/Troopers/MangopayBundle',
                    'namespace' => 'Troopers\\MangopayBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle',
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sensio/distribution-bundle',
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'SensioGeneratorBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/sensio/generator-bundle/Sensio/Bundle/GeneratorBundle',
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ),
                'DeployBundle' => array(
                    'parent' => NULL,
                    'path' => '/cocorico/vendor/hpatoio/deploy-bundle/Hpatoio/DeployBundle',
                    'namespace' => 'Hpatoio\\DeployBundle',
                ),
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'cocorico.site_name' => 'KoduTeenus',
            'cocorico.phone' => '+91(0) 78 93 27 30 22',
            'cocorico.address' => 'Harju maakond (county/state), Kuusalu vald (municipality/city), Pudisoo küla (village/street), Männimäe (Place/house), 74626 (zip)',
            'cocorico.short_description' => 'KoduTeenus, is a two-sided home services marketplace application that connects \'TaskTakers,\' people who need help, and \'TaskProviders,\' a network of pre-approved, background checked individuals, who have the time and skills to serve \'TaskTakers\'.',
            'cocorico.contact_mail' => 'contact@koduteenus.online',
            'cocorico.contact_mail_obfuscated' => '&#099;&#111;&#110;&#116;&#097;&#099;&#116;&#064;&#107;&#111;&#100;&#117;&#116;&#101;&#101;&#110;&#117;&#115;&#046;&#111;&#110;&#108;&#105;&#110;&#101;',
            'cocorico.from_email' => 'no-reply@koduteenus.online',
            'cocorico.webmaster_email' => 'webmaster@koduteenus.online',
            'cocorico.vat_number' => 'ES 12 123 456 789',
            'cocorico.home_rss_feed' => 'http://localhost/rssfeed/',
            'locale' => 'en',
            'cocorico.locale' => 'en',
            'cocorico.locales' => array(
                0 => 'en',
                1 => 'ee',
            ),
            'cocorico.locales_string' => 'en|ee',
            'cocorico.currency' => 'EUR',
            'cocorico.currencies_for_lexik' => array(
                0 => 'EUR',
            ),
            'cocorico.currencies' => array(
                'EUR' => '€',
            ),
            'cocorico.currencies_string' => 'EUR',
            'cocorico.currencies_json' => ($this->targetDirs[2].'/../web/json/currencies.json'),
            'cocorico.include_vat' => false,
            'cocorico.display_vat' => true,
            'cocorico.vat' => 0.2,
            'cocorico.registration_confirmation' => false,
            'cocorico.fee_as_asker' => '0.00',
            'cocorico.fee_as_offerer' => '0.00',
            'cocorico.fee_general' => 5.0,
            'cocorico.time_unit' => 60,
            'cocorico.time_zone' => 'Europe/Tallinn',
            'cocorico.days_max' => 360,
            'cocorico.days_max_edition' => 180,
            'cocorico.days_display_mode' => 'range',
            'cocorico.time_picker' => true,
            'cocorico.time_hours_available' => array(
                0 => 0,
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => 7,
                8 => 8,
                9 => 9,
                10 => 10,
                11 => 11,
                12 => 12,
                13 => 13,
                14 => 14,
                15 => 15,
                16 => 16,
                17 => 17,
                18 => 18,
                19 => 19,
                20 => 20,
                21 => 21,
                22 => 22,
                23 => 23,
            ),
            'cocorico.time_unit_flexibility' => 0,
            'cocorico.time_unit_allday' => true,
            'cocorico.times_max' => 8,
            'cocorico.times_display_mode' => 'duration',
            'cocorico.dashboard_max_per_page' => 10,
            'cocorico.message_max_per_page' => 10,
            'cocorico.review_max_per_page' => 10,
            'cocorico.listing_new_is_published' => 1,
            'cocorico.listing_countries' => NULL,
            'cocorico.listing_favorite_countries' => array(
                0 => 'EE',
            ),
            'cocorico.listing_category_min' => 1,
            'cocorico.listing_price_precision' => 2,
            'cocorico.listing_price_min' => 100,
            'cocorico.listing_price_max' => 100000,
            'cocorico.listing_map_display_marker' => false,
            'cocorico.listing_discount_min' => 1,
            'cocorico.listing_discount_max' => 90,
            'cocorico.listing_search_max_per_page' => 10,
            'cocorico.listing_search_min_result' => 0,
            'cocorico.listing.duplication' => true,
            'cocorico.listing_availability_status' => 1,
            'cocorico.booking_price_min' => 500,
            'cocorico.booking.allow_single_day' => true,
            'cocorico.booking.end_day_included' => true,
            'cocorico.booking.min_start_delay' => 0,
            'cocorico.booking.min_start_time_delay' => 720,
            'cocorico.booking.expiration_delay' => 2880,
            'cocorico.booking.acceptation_delay' => 240,
            'cocorico.booking.alert_expiration_delay' => 120,
            'cocorico.booking.alert_imminent_delay' => 1440,
            'cocorico.booking.validated_moment' => 'start',
            'cocorico.booking.validated_delay' => 0,
            'cocorico.bankwire_checking_simulation' => false,
            'cocorico.booking.cancelation_policy' => array(
                'flexible' => array(
                    'time_before_start' => 86400,
                    'refund_min' => 0.5,
                    'refund_max' => 1,
                ),
                'strict' => array(
                    'time_before_start' => 86400,
                    'refund_min' => 0,
                    'refund_max' => 0.5,
                ),
            ),
            'cocorico_listing_option.listing_option.entity_class' => 'Cocorico\\ListingOptionBundle\\Entity\\ListingOption',
            'cocorico_listing_option.booking_option.entity_class' => 'Cocorico\\ListingOptionBundle\\Entity\\BookingOption',
            'cocorico_listing_alert.entity_class' => 'none',
            'cocorico_listing_category_field.entity_class' => 'none',
            'cocorico_listing_category_field_value.entity_class' => 'none',
            'cocorico_listing_category_listing_category_field.entity_class' => 'none',
            'cocorico_config.parameters_allowed' => array(
                'cocorico.fee_as_asker' => array(
                    'type' => 'percent',
                ),
                'cocorico.fee_as_offerer' => array(
                    'type' => 'percent',
                ),
            ),
            'cocorico.user_address_delivery' => true,
            'cocorico.user_img_min' => 1,
            'cocorico.user_img_max' => 6,
            'cocorico.user_img_max_upload_size' => 12,
            'cocorico.user_img_xsmall_w' => 60,
            'cocorico.user_img_xsmall_h' => 45,
            'cocorico.user_img_small_w' => 150,
            'cocorico.user_img_small_h' => 112,
            'cocorico.user_img_medium_w' => 200,
            'cocorico.user_img_medium_h' => 150,
            'cocorico.user_img_contact_w' => 213,
            'cocorico.user_img_contact_h' => 160,
            'cocorico.user_img_profile_w' => 308,
            'cocorico.user_img_profile_h' => 231,
            'cocorico.listing_img_min' => 1,
            'cocorico.listing_img_max' => 24,
            'cocorico.listing_img_max_upload_size' => 12,
            'cocorico.listing_img_xsmall_w' => 90,
            'cocorico.listing_img_xsmall_h' => 67,
            'cocorico.listing_img_small_w' => 100,
            'cocorico.listing_img_small_h' => 75,
            'cocorico.listing_img_xxmedium_w' => 150,
            'cocorico.listing_img_xxmedium_h' => 112,
            'cocorico.listing_img_xmedium_w' => 200,
            'cocorico.listing_img_xmedium_h' => 150,
            'cocorico.listing_img_medium_w' => 275,
            'cocorico.listing_img_medium_h' => 206,
            'cocorico.listing_img_large_w' => 384,
            'cocorico.listing_img_large_h' => 288,
            'cocorico.listing_img_xlarge_w' => 527,
            'cocorico.listing_img_xlarge_h' => 395,
            'cocorico.listing_img_xxlarge_w' => 680,
            'cocorico.listing_img_xxlarge_h' => 510,
            'cocorico.upload_image_w' => 120,
            'cocorico.upload_image_h' => 90,
            'cocorico.listing_new_map_w' => 100,
            'cocorico.listing_new_map_h' => 300,
            'cocorico.listing_edit_map_w' => 100,
            'cocorico.listing_edit_map_h' => 418,
            'cocorico.listing_show_map_w' => 100,
            'cocorico.listing_show_map_h' => 480,
            'cocorico.listing_search_map_w' => 390,
            'cocorico.listing_search_map_h' => 1110,
            'cocorico.assets_base_urls' => 'http://localhost',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'cocorico.admin' => 'admin',
            'cocorico.admin_translation' => false,
            'cocorico.translator.secret.key' => NULL,
            'cocorico.translator.translate.url' => 'http://api.microsofttranslator.com/v2/Http.svc/TranslateArray',
            'cocorico.translator.token.url' => 'https://api.cognitive.microsoft.com/sts/v1.0/issueToken',
            'cocorico.facebook.app_id' => 'none',
            'cocorico.facebook.secret' => 'none',
            'cocorico.image_driver' => 'imagick',
            'cocorico.google_analytics' => 'UA-64445856-1',
            'cocorico.google_tag_manager' => false,
            'cocorico_geo.google_place_api_key' => 'AIzaSyAar48C5lX4pnXGtHf8DLXLJ7f_-bCjay0',
            'cocorico_geo.google_place_server_api_key' => 'AIzaSyAar48C5lX4pnXGtHf8DLXLJ7f_-bCjay0',
            'cocorico_geo.ipinfodb_api_key' => NULL,
            'cocorico.deploy.host' => 'fake.cocorico.prod',
            'cocorico.deploy.dir' => '/fake/path',
            'cocorico.deploy.user' => 'fakeuser',
            'cocorico_sms.enabled' => false,
            'cocorico_sms.phone_check' => false,
            'cocorico_sms.ovh_endpoint_name' => 'ovh-eu',
            'cocorico_sms.ovh_application_key' => 'Application Key',
            'cocorico_sms.ovh_application_secret' => 'Application Secret',
            'cocorico_sms.ovh_consumer_key' => 'Consumer Key',
            'cocorico_sms.ovh_service_name' => 'Service Name',
            'cocorico_sms.ovh_debug' => false,
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'cocorico',
            'database_user' => 'cocorico',
            'database_password' => 'cocorico',
            'mongodb_server' => 'mongodb://127.0.0.1:27017',
            'mongodb_database_name' => 'cocorico',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'mailer_port' => NULL,
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'use_assetic_controller' => false,
            'assetic.cache.class' => 'Assetic\\Cache\\ArrayCache',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Cocorico\\CoreBundle\\Listener\\ResolveTargetEntityListener',
            'cocorico.listing_activated_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:listing_activated_offerer.txt.twig',
            'cocorico.booking_request_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_request_offerer.txt.twig',
            'cocorico.booking_request_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:booking_request_asker.txt.twig',
            'cocorico.booking_accepted_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_accepted_offerer.txt.twig',
            'cocorico.booking_accepted_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:booking_accepted_asker.txt.twig',
            'cocorico.booking_refused_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_refused_offerer.txt.twig',
            'cocorico.booking_refused_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:booking_refused_asker.txt.twig',
            'cocorico.booking_request_expired_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:booking_request_expired_asker.txt.twig',
            'cocorico.booking_request_expired_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_request_expired_offerer.txt.twig',
            'cocorico.booking_canceled_by_asker_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_canceled_by_asker_offerer.txt.twig',
            'cocorico.booking_canceled_by_asker_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:booking_canceled_by_asker_asker.txt.twig',
            'cocorico.booking_imminent_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_imminent_offerer.txt.twig',
            'cocorico.booking_imminent_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:booking_imminent_asker.txt.twig',
            'cocorico.booking_request_expiration_alert_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_request_expiration_alert_offerer.txt.twig',
            'cocorico.reminder_to_rate_asker_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:reminder_to_rate_asker_offerer.txt.twig',
            'cocorico.booking_bank_wire_transfer_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:booking_bank_wire_transfer_offerer.txt.twig',
            'cocorico.update_your_calendar_offerer.email.template' => 'CocoricoCoreBundle:Mails/Offerer:update_your_calendar_offerer.txt.twig',
            'cocorico.payment_error_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:payment_error_asker.txt.twig',
            'cocorico.reminder_to_rate_offerer_asker.email.template' => 'CocoricoCoreBundle:Mails/Asker:reminder_to_rate_offerer_asker.txt.twig',
            'cocorico.admin_message.email.template' => 'CocoricoCoreBundle:Mails:admin_message.txt.twig',
            'knp.doctrine_behaviors.reflection.class_analyzer.class' => 'Knp\\DoctrineBehaviors\\Reflection\\ClassAnalyzer',
            'knp.doctrine_behaviors.reflection.is_recursive' => true,
            'knp.doctrine_behaviors.translatable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\TranslatableSubscriber',
            'knp.doctrine_behaviors.translatable_subscriber.current_locale_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\CurrentLocaleCallable',
            'knp.doctrine_behaviors.translatable_subscriber.default_locale_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Translatable\\DefaultLocaleCallable',
            'knp.doctrine_behaviors.translatable_subscriber.translatable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translatable',
            'knp.doctrine_behaviors.translatable_subscriber.translation_trait' => 'Knp\\DoctrineBehaviors\\Model\\Translatable\\Translation',
            'knp.doctrine_behaviors.translatable_subscriber.translatable_fetch_method' => 'EAGER',
            'knp.doctrine_behaviors.translatable_subscriber.translation_fetch_method' => 'EAGER',
            'knp.doctrine_behaviors.softdeletable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\SoftDeletable\\SoftDeletableSubscriber',
            'knp.doctrine_behaviors.softdeletable_subscriber.softdeletable_trait' => 'Knp\\DoctrineBehaviors\\Model\\SoftDeletable\\SoftDeletable',
            'knp.doctrine_behaviors.timestampable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Timestampable\\TimestampableSubscriber',
            'knp.doctrine_behaviors.timestampable_subscriber.timestampable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Timestampable\\Timestampable',
            'knp.doctrine_behaviors.timestampable_subscriber.db_field_type' => 'datetime',
            'knp.doctrine_behaviors.blameable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Blameable\\BlameableSubscriber',
            'knp.doctrine_behaviors.blameable_subscriber.blameable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Blameable\\Blameable',
            'knp.doctrine_behaviors.blameable_subscriber.user_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Blameable\\UserCallable',
            'knp.doctrine_behaviors.blameable_subscriber.user_entity' => NULL,
            'knp.doctrine_behaviors.loggable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Loggable\\LoggableSubscriber',
            'knp.doctrine_behaviors.loggable_subscriber.logger_callable.class' => 'Knp\\DoctrineBehaviors\\ORM\\Loggable\\LoggerCallable',
            'knp.doctrine_behaviors.geocodable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Geocodable\\GeocodableSubscriber',
            'knp.doctrine_behaviors.geocodable_subscriber.geocodable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Geocodable\\Geocodable',
            'knp.doctrine_behaviors.sluggable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Sluggable\\SluggableSubscriber',
            'knp.doctrine_behaviors.sluggable_subscriber.sluggable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Sluggable\\Sluggable',
            'knp.doctrine_behaviors.tree_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Tree\\TreeSubscriber',
            'knp.doctrine_behaviors.tree_subscriber.tree_trait' => 'Knp\\DoctrineBehaviors\\Model\\Tree\\Node',
            'knp.doctrine_behaviors.sortable_subscriber.class' => 'Knp\\DoctrineBehaviors\\ORM\\Sortable\\SortableSubscriber',
            'knp.doctrine_behaviors.sortable_subscriber.sortable_trait' => 'Knp\\DoctrineBehaviors\\Model\\Sortable\\Sortable',
            'lexik_currency.doctrine_adapter.class' => 'Cocorico\\CurrencyBundle\\Adapter\\DoctrineCurrencyAdapter',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'name' => '_csess',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => '2.5-bc',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'translator.logging' => true,
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'form.resolved_type_factory.data_collector_proxy.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy',
            'form.type_extension.form.data_collector.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension',
            'data_collector.form.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollector',
            'data_collector.form.extractor.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataExtractor',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.resource' => ($this->targetDirs[2].'/config/routing_dev.yml'),
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => -1,
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_SONATA_ADMIN',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'hwi_oauth.resource_ownermap.configured.main' => array(
                'facebook' => '/en/oauth/fb-login',
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'FMElfinderBundle:Form:elfinder_widget.html.twig',
                1 => 'IvoryCKEditorBundle:Form:ckeditor_widget.html.twig',
                2 => 'form_div_layout.html.twig',
                3 => 'CocoricoCoreBundle:Form:fields.html.twig',
                4 => 'SonataCoreBundle:Form:datepicker.html.twig',
                5 => 'LiipImagineBundle:Form:form_div_layout.html.twig',
                6 => 'SonataUserBundle:Form:form_admin_fields.html.twig',
                7 => 'CocoricoCoreBundle:Form:translations.html.twig',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.file.path' => ($this->targetDirs[2].'/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'CocoricoCoreBundle',
                1 => 'CocoricoUserBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => ($this->targetDirs[2].'/../web'),
            'assetic.write_to' => ($this->targetDirs[2].'/../web'),
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.filter.jsqueeze.single_line' => true,
            'assetic.filter.jsqueeze.keep_important_comments' => true,
            'assetic.filter.jsqueeze.special_var_rx' => false,
            'assetic.twig_extension.functions' => array(

            ),
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(
                'extended_payment_data' => array(
                    'class' => 'JMS\\Payment\\CoreBundle\\Entity\\ExtendedDataType',
                    'commented' => true,
                ),
                'json' => array(
                    'class' => 'Sonata\\Doctrine\\Types\\JsonType',
                    'commented' => true,
                ),
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\ORM\\Mapping\\DefaultEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.dir_name' => ($this->targetDirs[2].'/DoctrineMigrations'),
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'fos_user.validator.password.class' => 'FOS\\UserBundle\\Validator\\PasswordValidator',
            'fos_user.validator.unique.class' => 'FOS\\UserBundle\\Validator\\UniqueValidator',
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\Security\\InteractiveLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'FOSUserBundle:Resetting:email.txt.twig',
            'fos_user.registration.confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Cocorico\\UserBundle\\Entity\\User',
            'fos_user.template.engine' => 'twig',
            'fos_user.profile.form.type' => 'user_profile',
            'fos_user.profile.form.name' => 'user_profile',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'CocoricoProfile',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'no-reply@koduteenus.online' => 'KoduTeenus',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'user_registration',
            'fos_user.registration.form.name' => 'user_registration',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'CocoricoRegistration',
            ),
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'no-reply@koduteenus.online' => 'KoduTeenus',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'user_resetting',
            'fos_user.resetting.form.name' => 'user_resetting',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'Cocorico\\UserBundle\\Entity\\Group',
            'fos_user.group.form.type' => 'fos_user_group',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'jms_i18n_routing.router.class' => 'JMS\\I18nRoutingBundle\\Router\\I18nRouter',
            'jms_i18n_routing.locale_resolver.class' => 'JMS\\I18nRoutingBundle\\Router\\DefaultLocaleResolver',
            'jms_i18n_routing.loader.class' => 'JMS\\I18nRoutingBundle\\Router\\I18nLoader',
            'jms_i18n_routing.route_exclusion_strategy.class' => 'JMS\\I18nRoutingBundle\\Router\\DefaultRouteExclusionStrategy',
            'jms_i18n_routing.pattern_generation_strategy.class' => 'JMS\\I18nRoutingBundle\\Router\\DefaultPatternGenerationStrategy',
            'jms_i18n_routing.locale_choosing_listener.class' => 'JMS\\I18nRoutingBundle\\EventListener\\LocaleChoosingListener',
            'jms_i18n_routing.cookie_setting_listener.class' => 'JMS\\I18nRoutingBundle\\EventListener\\CookieSettingListener',
            'jms_i18n_routing.route_translation_extractor.class' => 'JMS\\I18nRoutingBundle\\Translation\\RouteTranslationExtractor',
            'jms_i18n_routing.default_locale' => 'en',
            'jms_i18n_routing.locales' => array(
                0 => 'en',
                1 => 'ee',
            ),
            'jms_i18n_routing.catalogue' => 'routes',
            'jms_i18n_routing.strategy' => 'prefix',
            'jms_i18n_routing.redirect_to_host' => true,
            'jms_i18n_routing.cookie.name' => 'hl',
            'jms_translation.twig_extension.class' => 'JMS\\TranslationBundle\\Twig\\TranslationExtension',
            'jms_translation.extractor_manager.class' => 'JMS\\TranslationBundle\\Translation\\ExtractorManager',
            'jms_translation.extractor.file_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\FileExtractor',
            'jms_translation.extractor.file.default_php_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\DefaultPhpFileExtractor',
            'jms_translation.extractor.file.translation_container_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TranslationContainerExtractor',
            'jms_translation.extractor.file.twig_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TwigFileExtractor',
            'jms_translation.extractor.file.form_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\FormExtractor',
            'jms_translation.extractor.file.validation_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\ValidationExtractor',
            'jms_translation.extractor.file.authentication_message_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\AuthenticationMessagesExtractor',
            'jms_translation.loader.symfony.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\Symfony\\XliffLoader',
            'jms_translation.loader.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\XliffLoader',
            'jms_translation.loader.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\SymfonyLoaderAdapter',
            'jms_translation.loader_manager.class' => 'JMS\\TranslationBundle\\Translation\\LoaderManager',
            'jms_translation.dumper.php_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\PhpDumper',
            'jms_translation.dumper.xliff_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\XliffDumper',
            'jms_translation.dumper.yaml_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\YamlDumper',
            'jms_translation.dumper.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\SymfonyDumperAdapter',
            'jms_translation.file_writer.class' => 'JMS\\TranslationBundle\\Translation\\FileWriter',
            'jms_translation.updater.class' => 'JMS\\TranslationBundle\\Translation\\Updater',
            'jms_translation.config_factory.class' => 'JMS\\TranslationBundle\\Translation\\ConfigFactory',
            'jms_translation.source_language' => 'en',
            'jms_translation.locales' => array(

            ),
            'jms_aop.cache_dir' => (__DIR__.'/jms_aop'),
            'jms_aop.interceptor_loader.class' => 'JMS\\AopBundle\\Aop\\InterceptorLoader',
            'jms_di_extra.metadata.driver.annotation_driver.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\AnnotationDriver',
            'jms_di_extra.metadata.driver.configured_controller_injections.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\ConfiguredControllerInjectionsDriver',
            'jms_di_extra.metadata.driver.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_di_extra.service_naming_strategy.default.class' => 'JMS\\DiExtraBundle\\Metadata\\DefaultNamingStrategy',
            'jms_di_extra.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_di_extra.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_di_extra.metadata.converter.class' => 'JMS\\DiExtraBundle\\Metadata\\MetadataConverter',
            'jms_di_extra.controller_resolver.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerResolver',
            'jms_di_extra.controller_injectors_warmer.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerInjectorsWarmer',
            'jms_di_extra.all_bundles' => false,
            'jms_di_extra.bundles' => array(

            ),
            'jms_di_extra.directories' => array(

            ),
            'jms_di_extra.cache_dir' => (__DIR__.'/jms_diextra'),
            'jms_di_extra.disable_grep' => false,
            'jms_di_extra.doctrine_integration' => true,
            'jms_di_extra.annotation_patterns' => array(
                0 => 'JMS\\DiExtraBundle\\Annotation',
            ),
            'jms_di_extra.cache_warmer.controller_file_blacklist' => array(

            ),
            'jms_di_extra.doctrine_integration.entity_manager.file' => (__DIR__.'/jms_diextra/doctrine/EntityManager_5ba1b8403ebe4.php'),
            'jms_di_extra.doctrine_integration.entity_manager.class' => 'EntityManager5ba1b8403ebe4_546a8d27f194334ee012bfe64f629947b07e4919\\__CG__\\Doctrine\\ORM\\EntityManager',
            'payment.plugin_controller.entity.class' => 'JMS\\Payment\\CoreBundle\\PluginController\\EntityPluginController',
            'payment.plugin_controller.entity.options.result_class' => 'JMS\\Payment\\CoreBundle\\PluginController\\Result',
            'payment.plugin_controller.entity.options.payment_class' => 'JMS\\Payment\\CoreBundle\\Entity\\Payment',
            'payment.plugin_controller.entity.options.payment_instruction_class' => 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction',
            'payment.plugin_controller.entity.options.financial_transaction_class' => 'JMS\\Payment\\CoreBundle\\Entity\\FinancialTransaction',
            'payment.plugin_controller.entity.options.credit_class' => 'JMS\\Payment\\CoreBundle\\Entity\\Credit',
            'payment.form.choose_payment_method_type.class' => 'JMS\\Payment\\CoreBundle\\Form\\ChoosePaymentMethodType',
            'payment.form.choose_payment_method_transformer.class' => 'JMS\\Payment\\CoreBundle\\Form\\Transformer\\ChoosePaymentMethodTransformer',
            'payment.encryption.mcrypt.class' => 'JMS\\Payment\\CoreBundle\\Cryptography\\MCryptEncryptionService',
            'payment.encryption.mcrypt.secret' => '',
            'payment.encryption.mcrypt.cipher' => 'rijndael-256',
            'payment.encryption.mcrypt.mode' => 'ctr',
            'payment.encryption.defuse_php_encryption.class' => 'JMS\\Payment\\CoreBundle\\Cryptography\\DefusePhpEncryptionService',
            'payment.encryption.defuse_php_encryption.secret' => '',
            'payment.encryption_service.class' => 'JMS\\Payment\\CoreBundle\\Cryptography\\MCryptEncryptionService',
            'payment.encryption_service.secret' => '',
            'payment.encryption_service.cipher' => 'rijndael-256',
            'payment.encryption_service.mode' => 'ctr',
            'payment.encryption.enabled' => false,
            'payment.plugin.paypal_express_checkout.class' => 'JMS\\Payment\\PaypalBundle\\Plugin\\ExpressCheckoutPlugin',
            'payment.paypal.express_checkout.return_url' => NULL,
            'payment.paypal.express_checkout.cancel_url' => NULL,
            'payment.paypal.express_checkout.notify_url' => NULL,
            'payment.paypal.express_checkout.useraction' => NULL,
            'payment.paypal.authentication_strategy.token.class' => 'JMS\\Payment\\PaypalBundle\\Client\\Authentication\\TokenAuthenticationStrategy',
            'payment.paypal.username' => 'admin@koduteenus.online',
            'payment.paypal.password' => 'cocorico',
            'payment.paypal.signature' => 'access_token$sandbox$f2w97x7m8z2f87w8$437facced3d661be48193da7568d83a9',
            'payment.form.paypal_express_checkout_type.class' => 'JMS\\Payment\\PaypalBundle\\Form\\ExpressCheckoutType',
            'payment.paypal.client.class' => 'JMS\\Payment\\PaypalBundle\\Client\\Client',
            'payment.paypal.debug' => true,
            'a2lix_translation_form.locales' => array(
                0 => 'en',
                1 => 'ee',
            ),
            'a2lix_translation_form.required_locales' => array(

            ),
            'a2lix_translation_form.default.service.translation.class' => 'A2lix\\TranslationFormBundle\\TranslationForm\\TranslationForm',
            'a2lix_translation_form.default.service.parameter_locale_provider.class' => 'A2lix\\TranslationFormBundle\\Locale\\DefaultProvider',
            'a2lix_translation_form.default.listener.translations.class' => 'A2lix\\TranslationFormBundle\\Form\\EventListener\\TranslationsListener',
            'a2lix_translation_form.default.listener.translationsforms.class' => 'A2lix\\TranslationFormBundle\\Form\\EventListener\\TranslationsFormsListener',
            'a2lix_translation_form.default.type.translations.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsType',
            'a2lix_translation_form.default.type.translationsfields.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFieldsType',
            'a2lix_translation_form.default.type.translationsforms.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsFormsType',
            'a2lix_translation_form.default.type.translationslocalesselector.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslationsLocalesSelectorType',
            'a2lix_translation_form.default.type.translatedentity.class' => 'A2lix\\TranslationFormBundle\\Form\\Type\\TranslatedEntityType',
            'a2lix_translation_form.locale_provider' => 'default',
            'a2lix_translation_form.default_locale' => 'en',
            'a2lix_translation_form.templating' => 'CocoricoCoreBundle:Form:translations.html.twig',
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'en',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'oneup_uploader.chunks.manager.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\ChunkManager',
            'oneup_uploader.chunks_storage.gaufrette.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\GaufretteStorage',
            'oneup_uploader.chunks_storage.flysystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\FlysystemStorage',
            'oneup_uploader.chunks_storage.filesystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\FilesystemStorage',
            'oneup_uploader.namer.urlsafename.class' => 'Oneup\\UploaderBundle\\Uploader\\Naming\\UrlSafeNamer',
            'oneup_uploader.namer.uniqid.class' => 'Oneup\\UploaderBundle\\Uploader\\Naming\\UniqidNamer',
            'oneup_uploader.routing.loader.class' => 'Oneup\\UploaderBundle\\Routing\\RouteLoader',
            'oneup_uploader.storage.gaufrette.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\GaufretteStorage',
            'oneup_uploader.storage.flysystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FlysystemStorage',
            'oneup_uploader.storage.filesystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FilesystemStorage',
            'oneup_uploader.orphanage.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FilesystemOrphanageStorage',
            'oneup_uploader.orphanage.manager.class' => 'Oneup\\UploaderBundle\\Uploader\\Orphanage\\OrphanageManager',
            'oneup_uploader.controller.fineuploader.class' => 'Oneup\\UploaderBundle\\Controller\\FineUploaderController',
            'oneup_uploader.controller.blueimp.class' => 'Oneup\\UploaderBundle\\Controller\\BlueimpController',
            'oneup_uploader.controller.uploadify.class' => 'Oneup\\UploaderBundle\\Controller\\UploadifyController',
            'oneup_uploader.controller.yui3.class' => 'Oneup\\UploaderBundle\\Controller\\YUI3Controller',
            'oneup_uploader.controller.fancyupload.class' => 'Oneup\\UploaderBundle\\Controller\\FancyUploadController',
            'oneup_uploader.controller.mooupload.class' => 'Oneup\\UploaderBundle\\Controller\\MooUploadController',
            'oneup_uploader.controller.plupload.class' => 'Oneup\\UploaderBundle\\Controller\\PluploadController',
            'oneup_uploader.controller.dropzone.class' => 'Oneup\\UploaderBundle\\Controller\\DropzoneController',
            'oneup_uploader.error_handler.noop.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\NoopErrorHandler',
            'oneup_uploader.error_handler.blueimp.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\BlueimpErrorHandler',
            'oneup_uploader.error_handler.dropzone.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\DropzoneErrorHandler',
            'oneup_uploader.chunks' => array(
                'maxage' => 604800,
                'storage' => array(
                    'type' => 'filesystem',
                    'filesystem' => NULL,
                    'directory' => (__DIR__.'/uploader/chunks'),
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                    'prefix' => 'chunks',
                ),
                'load_distribution' => true,
            ),
            'oneup_uploader.orphanage' => array(
                'maxage' => 604800,
                'directory' => (__DIR__.'/uploader/orphanage'),
            ),
            'oneup_uploader.config.listing_images' => array(
                'max_size' => 10000000,
                'frontend' => 'blueimp',
                'allowed_mimetypes' => array(
                    0 => 'image/gif',
                    1 => 'image/jpg',
                    2 => 'image/jpeg',
                    3 => 'image/png',
                ),
                'enable_progress' => true,
                'namer' => 'cocorico.namer.image_namer',
                'storage' => array(
                    'directory' => ($this->targetDirs[2].'/../web/uploads/listings/images/'),
                    'service' => NULL,
                    'type' => 'filesystem',
                    'filesystem' => NULL,
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                ),
                'custom_frontend' => array(
                    'name' => NULL,
                    'class' => NULL,
                ),
                'route_prefix' => '',
                'disallowed_mimetypes' => array(

                ),
                'error_handler' => NULL,
                'use_orphanage' => false,
                'enable_cancelation' => false,
                'root_folder' => false,
            ),
            'oneup_uploader.config.user_images' => array(
                'max_size' => 8000000,
                'frontend' => 'blueimp',
                'allowed_mimetypes' => array(
                    0 => 'image/gif',
                    1 => 'image/jpeg',
                    2 => 'image/png',
                ),
                'enable_progress' => true,
                'namer' => 'cocorico.namer.image_namer',
                'storage' => array(
                    'directory' => ($this->targetDirs[2].'/../web/uploads/users/images/'),
                    'service' => NULL,
                    'type' => 'filesystem',
                    'filesystem' => NULL,
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                ),
                'custom_frontend' => array(
                    'name' => NULL,
                    'class' => NULL,
                ),
                'route_prefix' => '',
                'disallowed_mimetypes' => array(

                ),
                'error_handler' => NULL,
                'use_orphanage' => false,
                'enable_cancelation' => false,
                'root_folder' => false,
            ),
            'oneup_uploader.config' => array(
                'mappings' => array(
                    'listing_images' => array(
                        'max_size' => 10000000,
                        'frontend' => 'blueimp',
                        'allowed_mimetypes' => array(
                            0 => 'image/gif',
                            1 => 'image/jpg',
                            2 => 'image/jpeg',
                            3 => 'image/png',
                        ),
                        'enable_progress' => true,
                        'namer' => 'cocorico.namer.image_namer',
                        'storage' => array(
                            'directory' => ($this->targetDirs[2].'/../web/uploads/listings/images/'),
                            'service' => NULL,
                            'type' => 'filesystem',
                            'filesystem' => NULL,
                            'stream_wrapper' => NULL,
                            'sync_buffer_size' => '100K',
                        ),
                        'custom_frontend' => array(
                            'name' => NULL,
                            'class' => NULL,
                        ),
                        'route_prefix' => '',
                        'disallowed_mimetypes' => array(

                        ),
                        'error_handler' => NULL,
                        'use_orphanage' => false,
                        'enable_cancelation' => false,
                        'root_folder' => false,
                    ),
                    'user_images' => array(
                        'max_size' => 8000000,
                        'frontend' => 'blueimp',
                        'allowed_mimetypes' => array(
                            0 => 'image/gif',
                            1 => 'image/jpeg',
                            2 => 'image/png',
                        ),
                        'enable_progress' => true,
                        'namer' => 'cocorico.namer.image_namer',
                        'storage' => array(
                            'directory' => ($this->targetDirs[2].'/../web/uploads/users/images/'),
                            'service' => NULL,
                            'type' => 'filesystem',
                            'filesystem' => NULL,
                            'stream_wrapper' => NULL,
                            'sync_buffer_size' => '100K',
                        ),
                        'custom_frontend' => array(
                            'name' => NULL,
                            'class' => NULL,
                        ),
                        'route_prefix' => '',
                        'disallowed_mimetypes' => array(

                        ),
                        'error_handler' => NULL,
                        'use_orphanage' => false,
                        'enable_cancelation' => false,
                        'root_folder' => false,
                    ),
                ),
                'chunks' => array(
                    'maxage' => 604800,
                    'storage' => array(
                        'type' => 'filesystem',
                        'filesystem' => NULL,
                        'directory' => (__DIR__.'/uploader/chunks'),
                        'stream_wrapper' => NULL,
                        'sync_buffer_size' => '100K',
                        'prefix' => 'chunks',
                    ),
                    'load_distribution' => true,
                ),
                'orphanage' => array(
                    'maxage' => 604800,
                    'directory' => (__DIR__.'/uploader/orphanage'),
                ),
                'twig' => true,
            ),
            'oneup_uploader.controllers' => array(
                'listing_images' => array(
                    0 => 'oneup_uploader.controller.listing_images',
                    1 => array(
                        'enable_progress' => true,
                        'enable_cancelation' => false,
                        'route_prefix' => '',
                    ),
                ),
                'user_images' => array(
                    0 => 'oneup_uploader.controller.user_images',
                    1 => array(
                        'enable_progress' => true,
                        'enable_cancelation' => false,
                        'route_prefix' => '',
                    ),
                ),
            ),
            'oneup_uploader.maxsize' => array(
                'listing_images' => '10000000',
                'user_images' => '8000000',
            ),
            'liip_imagine.filter.configuration.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterConfiguration',
            'liip_imagine.filter.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterManager',
            'liip_imagine.data.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\DataManager',
            'liip_imagine.cache.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheManager',
            'liip_imagine.cache.signer.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Signer',
            'liip_imagine.binary.mime_type_guesser.class' => 'Liip\\ImagineBundle\\Binary\\SimpleMimeTypeGuesser',
            'liip_imagine.controller.class' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'liip_imagine.twig.extension.class' => 'Liip\\ImagineBundle\\Templating\\ImagineExtension',
            'liip_imagine.templating.helper.class' => 'Liip\\ImagineBundle\\Templating\\Helper\\ImagineHelper',
            'liip_imagine.gd.class' => 'Imagine\\Gd\\Imagine',
            'liip_imagine.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'liip_imagine.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'liip_imagine.filter.loader.relative_resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RelativeResizeFilterLoader',
            'liip_imagine.filter.loader.resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ResizeFilterLoader',
            'liip_imagine.filter.loader.thumbnail.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ThumbnailFilterLoader',
            'liip_imagine.filter.loader.crop.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\CropFilterLoader',
            'liip_imagine.filter.loader.paste.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\PasteFilterLoader',
            'liip_imagine.filter.loader.watermark.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\WatermarkFilterLoader',
            'liip_imagine.filter.loader.strip.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\StripFilterLoader',
            'liip_imagine.filter.loader.background.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\BackgroundFilterLoader',
            'liip_imagine.filter.loader.upscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\UpscaleFilterLoader',
            'liip_imagine.filter.loader.downscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\DownscaleFilterLoader',
            'liip_imagine.filter.loader.auto_rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\AutoRotateFilterLoader',
            'liip_imagine.filter.loader.rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RotateFilterLoader',
            'liip_imagine.filter.loader.interlace.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\InterlaceFilterLoader',
            'liip_imagine.binary.loader.filesystem.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\FileSystemLoader',
            'liip_imagine.binary.loader.stream.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\StreamLoader',
            'liip_imagine.binary.loader.flysystem.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\FlysystemLoader',
            'liip_imagine.cache.resolver.web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\WebPathResolver',
            'liip_imagine.cache.resolver.no_cache_web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\NoCacheWebPathResolver',
            'liip_imagine.cache.resolver.aws_s3.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\AwsS3Resolver',
            'liip_imagine.cache.resolver.cache.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\CacheResolver',
            'liip_imagine.cache.resolver.proxy.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\ProxyResolver',
            'liip_imagine.form.type.image.class' => 'Liip\\ImagineBundle\\Form\\Type\\ImageType',
            'liip_imagine.meta_data.reader.class' => 'Imagine\\Image\\Metadata\\ExifMetadataReader',
            'liip_imagine.filter.post_processor.jpegoptim.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\JpegOptimPostProcessor',
            'liip_imagine.jpegoptim.binary' => '/usr/bin/jpegoptim',
            'liip_imagine.filter.post_processor.optipng.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\OptiPngPostProcessor',
            'liip_imagine.optipng.binary' => '/usr/bin/optipng',
            'liip_imagine.cache.resolver.default' => NULL,
            'liip_imagine.default_image' => NULL,
            'liip_imagine.filter_sets' => array(
                'listing_xsmall' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 90,
                                1 => 67,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'listing_small' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 100,
                                1 => 75,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'listing_xxmedium' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 150,
                                1 => 112,
                            ),
                            'mode' => 'outbound',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'listing_xmedium' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 200,
                                1 => 150,
                            ),
                            'mode' => 'outbound',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'listing_medium' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 275,
                                1 => 206,
                            ),
                            'mode' => 'outbound',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'listing_xxlarge' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 680,
                                1 => 510,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'listing_xlarge' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'upscale' => array(
                            'min' => array(
                                0 => 527,
                                1 => 395,
                            ),
                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 527,
                                1 => 395,
                            ),
                            'mode' => 'outbound',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                            'allow_upscale' => true,
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'listing_large' => array(
                    'quality' => 85,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'upscale' => array(
                            'min' => array(
                                0 => 384,
                                1 => 288,
                            ),
                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 384,
                                1 => 288,
                            ),
                            'mode' => 'outbound',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                            'allow_upscale' => true,
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'user_xsmall' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 60,
                                1 => 45,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'user_small' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 150,
                                1 => 112,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'user_medium' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 200,
                                1 => 150,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'user_contact' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 213,
                                1 => 160,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'user_profile' => array(
                    'quality' => 100,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 308,
                                1 => 231,
                            ),
                            'mode' => 'inset',
                            'cache_type' => 'public',
                            'cache_expires' => '1 months',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
            ),
            'liip_imagine.binary.loader.default' => 'default',
            'liip_imagine.controller.filter_action' => 'liip_imagine.controller:filterAction',
            'liip_imagine.controller.filter_runtime_action' => 'liip_imagine.controller:filterRuntimeAction',
            'lexik_currency.currency_extension.class' => 'Lexik\\Bundle\\CurrencyBundle\\Twig\\Extension\\CurrencyExtension',
            'lexik_currency.converter.class' => 'Lexik\\Bundle\\CurrencyBundle\\Currency\\Converter',
            'lexik_currency.formatter.class' => 'Lexik\\Bundle\\CurrencyBundle\\Currency\\Formatter',
            'lexik_currency.subscriber.locale.class' => 'Lexik\\Bundle\\CurrencyBundle\\EventListener\\LocaleListener',
            'lexik_currency.adapter_collector.class' => 'Lexik\\Bundle\\CurrencyBundle\\Adapter\\AdapterCollector',
            'lexik_currency.adapter_factory.class' => 'Lexik\\Bundle\\CurrencyBundle\\Adapter\\AdapterFactory',
            'lexik_currency.abstract_adapter.class' => 'Lexik\\Bundle\\CurrencyBundle\\Adapter\\AbstractCurrencyAdapter',
            'lexik_currency.ecb_adapter.class' => 'Lexik\\Bundle\\CurrencyBundle\\Adapter\\EcbCurrencyAdapter',
            'lexik_currency.oer_adapter.class' => 'Lexik\\Bundle\\CurrencyBundle\\Adapter\\OerCurrencyAdapter',
            'lexik_currency.doctrine.orm.entity_manager' => 'default',
            'lexik_currency.currencies.default' => 'EUR',
            'lexik_currency.currency_class' => 'Lexik\\Bundle\\CurrencyBundle\\Entity\\Currency',
            'lexik_currency.default_adapter' => 'doctrine_currency_adapter',
            'lexik_currency.ecb_url' => 'http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml',
            'lexik_currency.oer_url' => 'http://openexchangerates.org/api/latest.json',
            'lexik_currency.oer_app_id' => NULL,
            'lexik_currency.decimal_part.precision' => 0,
            'lexik_currency.decimal_part.round_mode' => 'up',
            'lexik_currency.currencies.managed' => array(
                0 => 'EUR',
            ),
            'bazinga_geocoder.geocoder.class' => 'Geocoder\\ProviderAggregator',
            'bazinga_geocoder.geocoder.loggable_class' => 'Bazinga\\Bundle\\GeocoderBundle\\Geocoder\\LoggableGeocoder',
            'bazinga_geocoder.geocoder.default_adapter.class' => 'Ivory\\HttpAdapter\\CurlHttpAdapter',
            'bazinga_geocoder.geocoder.provider.bing_maps.class' => 'Geocoder\\Provider\\BingMaps',
            'bazinga_geocoder.geocoder.provider.free_geo_ip.class' => 'Geocoder\\Provider\\FreeGeoIp',
            'bazinga_geocoder.geocoder.provider.google_maps.class' => 'Geocoder\\Provider\\GoogleMaps',
            'bazinga_geocoder.geocoder.provider.google_maps_business.class' => 'Geocoder\\Provider\\GoogleMapsBusiness',
            'bazinga_geocoder.geocoder.provider.host_ip.class' => 'Geocoder\\Provider\\HostIp',
            'bazinga_geocoder.geocoder.provider.ip_info_db.class' => 'Geocoder\\Provider\\IpInfoDb',
            'bazinga_geocoder.geocoder.provider.yahoo.class' => 'Geocoder\\Provider\\Yahoo',
            'bazinga_geocoder.geocoder.provider.openstreetmap.class' => 'Geocoder\\Provider\\OpenStreetMap',
            'bazinga_geocoder.geocoder.provider.geoip.class' => 'Geocoder\\Provider\\Geoip',
            'bazinga_geocoder.geocoder.provider.mapquest.class' => 'Geocoder\\Provider\\MapQuest',
            'bazinga_geocoder.geocoder.provider.yandex.class' => 'Geocoder\\Provider\\Yandex',
            'bazinga_geocoder.geocoder.provider.geo_ips.class' => 'Geocoder\\Provider\\GeoIPs',
            'bazinga_geocoder.geocoder.provider.geo_plugin.class' => 'Geocoder\\Provider\\GeoPlugin',
            'bazinga_geocoder.geocoder.provider.maxmind.class' => 'Geocoder\\Provider\\MaxMind',
            'bazinga_geocoder.geocoder.provider.maxmind_binary.class' => 'Geocoder\\Provider\\MaxMindBinary',
            'bazinga_geocoder.geocoder.provider.opencage.class' => 'Geocoder\\Provider\\OpenCage',
            'bazinga_geocoder.geocoder.provider.cache.class' => 'Bazinga\\Bundle\\GeocoderBundle\\Provider\\Cache',
            'bazinga_geocoder.geocoder.provider.chain.class' => 'Geocoder\\Provider\\Chain',
            'bazinga_geocoder.geocoder.provider.tom_tom.class' => 'Geocoder\\Provider\\TomTom',
            'bazinga_geocoder.logger.class' => 'Bazinga\\Bundle\\GeocoderBundle\\Logger\\GeocoderLogger',
            'bazinga_geocoder.data_collector.class' => 'Bazinga\\Bundle\\GeocoderBundle\\DataCollector\\GeocoderDataCollector',
            'bazinga_geocoder.event_listener.fake_request.class' => 'Bazinga\\Bundle\\GeocoderBundle\\EventListener\\FakeRequestListener',
            'bazinga_geocoder.dumper_manager.class' => 'Bazinga\\Bundle\\GeocoderBundle\\DumperManager',
            'bazinga_geocoder.dumper.geojson.class' => 'Geocoder\\Dumper\\GeoJson',
            'bazinga_geocoder.dumper.gpx.class' => 'Geocoder\\Dumper\\Gpx',
            'bazinga_geocoder.dumper.kmp.class' => 'Geocoder\\Dumper\\Kml',
            'bazinga_geocoder.dumper.wkb.class' => 'Geocoder\\Dumper\\Wkb',
            'bazinga_geocoder.dumper.wkt.class' => 'Geocoder\\Dumper\\Wkt',
            'doctrine_mongodb.odm.connection.class' => 'Doctrine\\MongoDB\\Connection',
            'doctrine_mongodb.odm.configuration.class' => 'Doctrine\\ODM\\MongoDB\\Configuration',
            'doctrine_mongodb.odm.document_manager.class' => 'Doctrine\\ODM\\MongoDB\\DocumentManager',
            'doctrine_mongodb.odm.manager_configurator.class' => 'Doctrine\\Bundle\\MongoDBBundle\\ManagerConfigurator',
            'doctrine_mongodb.odm.logger.class' => 'Doctrine\\Bundle\\MongoDBBundle\\Logger\\Logger',
            'doctrine_mongodb.odm.logger.aggregate.class' => 'Doctrine\\Bundle\\MongoDBBundle\\Logger\\AggregateLogger',
            'doctrine_mongodb.odm.data_collector.standard.class' => 'Doctrine\\Bundle\\MongoDBBundle\\DataCollector\\StandardDataCollector',
            'doctrine_mongodb.odm.data_collector.pretty.class' => 'Doctrine\\Bundle\\MongoDBBundle\\DataCollector\\PrettyDataCollector',
            'doctrine_mongodb.odm.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine_odm.mongodb.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine_odm.mongodb.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine_mongodb.odm.class' => 'Doctrine\\Bundle\\MongoDBBundle\\ManagerRegistry',
            'doctrine_mongodb.odm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine_mongodb.odm.proxy_cache_warmer.class' => 'Doctrine\\Bundle\\MongoDBBundle\\CacheWarmer\\ProxyCacheWarmer',
            'doctrine_mongodb.odm.hydrator_cache_warmer.class' => 'Doctrine\\Bundle\\MongoDBBundle\\CacheWarmer\\HydratorCacheWarmer',
            'doctrine_mongodb.odm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_mongodb.odm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_mongodb.odm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_mongodb.odm.cache.memcache_host' => 'localhost',
            'doctrine_mongodb.odm.cache.memcache_port' => 11211,
            'doctrine_mongodb.odm.cache.memcache_instance.class' => 'Memcache',
            'doctrine_mongodb.odm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_mongodb.odm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine_mongodb.odm.metadata.annotation.class' => 'Doctrine\\ODM\\MongoDB\\Mapping\\Driver\\AnnotationDriver',
            'doctrine_mongodb.odm.metadata.xml.class' => 'Doctrine\\Bundle\\MongoDBBundle\\Mapping\\Driver\\XmlDriver',
            'doctrine_mongodb.odm.metadata.yml.class' => 'Doctrine\\Bundle\\MongoDBBundle\\Mapping\\Driver\\YamlDriver',
            'doctrine_mongodb.odm.mapping_dirs' => array(

            ),
            'doctrine_mongodb.odm.xml_mapping_dirs' => array(

            ),
            'doctrine_mongodb.odm.yml_mapping_dirs' => array(

            ),
            'doctrine_mongodb.odm.document_dirs' => array(

            ),
            'doctrine_mongodb.odm.fixtures_dirs' => array(

            ),
            'doctrine_mongodb.odm.logger.batch_insert_threshold' => 4,
            'doctrine_mongodb.odm.listeners.resolve_target_document.class' => 'Doctrine\\ODM\\MongoDB\\Tools\\ResolveTargetDocumentListener',
            'doctrine_mongodb.odm.default_connection' => 'default',
            'doctrine_mongodb.odm.default_document_manager' => 'default',
            'doctrine_mongodb.odm.proxy_namespace' => 'MongoDBODMProxies',
            'doctrine_mongodb.odm.proxy_dir' => (__DIR__.'/doctrine/odm/mongodb/Proxies'),
            'doctrine_mongodb.odm.auto_generate_proxy_classes' => false,
            'doctrine_mongodb.odm.hydrator_namespace' => 'Hydrators',
            'doctrine_mongodb.odm.hydrator_dir' => (__DIR__.'/doctrine/odm/mongodb/Hydrators'),
            'doctrine_mongodb.odm.auto_generate_hydrator_classes' => false,
            'doctrine_mongodb.odm.default_commit_options' => array(

            ),
            'doctrine_mongodb.odm.connections' => array(
                'default' => 'doctrine_mongodb.odm.default_connection',
            ),
            'doctrine_mongodb.odm.document_managers' => array(
                'default' => 'doctrine_mongodb.odm.default_document_manager',
            ),
            'sonata.core.flashmessage.manager.class' => 'Sonata\\CoreBundle\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'sonata.core.form.mapping.type' => array(

            ),
            'sonata.core.form.mapping.extension' => array(

            ),
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => array(
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'cmf.block.container',
                3 => 'cmf.block.slideshow',
            ),
            'sonata_block.blocks' => array(
                'sonata.admin.block.admin_list' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.admin.block.search_result' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.user.block.menu' => array(
                    'contexts' => array(
                        0 => 'cms',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.user.block.account' => array(
                    'contexts' => array(
                        0 => 'cms',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.block.service.text' => array(
                    'contexts' => array(
                        0 => 'cms',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
            ),
            'sonata_block.blocks_by_class' => array(

            ),
            'sonata_block.cache_blocks' => array(
                'by_type' => array(
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                    'sonata.admin.block.search_result' => 'sonata.cache.noop',
                    'sonata.user.block.menu' => 'sonata.cache.noop',
                    'sonata.user.block.account' => 'sonata.cache.noop',
                    'sonata.block.service.text' => 'sonata.cache.noop',
                ),
            ),
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'sonata_doctrine_orm_admin.audit.force' => false,
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => array(
                'types' => array(
                    'list' => array(
                        'array' => 'SonataAdminBundle:CRUD:list_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:list_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:list_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'email' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:list_url.html.twig',
                        'html' => 'SonataAdminBundle:CRUD:list_html.html.twig',
                    ),
                    'show' => array(
                        'array' => 'SonataAdminBundle:CRUD:show_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:show_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:show_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:show_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:show_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:show_url.html.twig',
                        'html' => 'SonataAdminBundle:CRUD:show_html.html.twig',
                    ),
                ),
                'form' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig',
                ),
                'filter' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig',
                ),
            ),
            'sonata.admin.configuration.templates' => array(
                'user_block' => 'CocoricoSonataAdminBundle::user_block.html.twig',
                'layout' => 'CocoricoSonataAdminBundle::standard_layout.html.twig',
                'add_block' => 'SonataAdminBundle:Core:add_block.html.twig',
                'ajax' => 'SonataAdminBundle::ajax_layout.html.twig',
                'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig',
                'search' => 'SonataAdminBundle:Core:search.html.twig',
                'list' => 'SonataAdminBundle:CRUD:list.html.twig',
                'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig',
                'show' => 'SonataAdminBundle:CRUD:show.html.twig',
                'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig',
                'edit' => 'SonataAdminBundle:CRUD:edit.html.twig',
                'preview' => 'SonataAdminBundle:CRUD:preview.html.twig',
                'history' => 'SonataAdminBundle:CRUD:history.html.twig',
                'acl' => 'SonataAdminBundle:CRUD:acl.html.twig',
                'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig',
                'action' => 'SonataAdminBundle:CRUD:action.html.twig',
                'select' => 'SonataAdminBundle:CRUD:list__select.html.twig',
                'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig',
                'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig',
                'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig',
                'delete' => 'SonataAdminBundle:CRUD:delete.html.twig',
                'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig',
                'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig',
                'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig',
                'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                'pager_links' => 'SonataAdminBundle:Pager:links.html.twig',
                'pager_results' => 'SonataAdminBundle:Pager:results.html.twig',
                'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig',
            ),
            'sonata.admin.configuration.admin_services' => array(

            ),
            'sonata.admin.configuration.dashboard_groups' => array(

            ),
            'sonata.admin.configuration.dashboard_blocks' => array(

            ),
            'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager',
            'sonata.admin.configuration.security.information' => array(

            ),
            'sonata.admin.configuration.security.admin_permissions' => array(
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ),
            'sonata.admin.configuration.security.object_permissions' => array(
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ),
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => array(
                'admins' => array(

                ),
                'excludes' => array(

                ),
                'implements' => array(

                ),
                'extends' => array(

                ),
                'instanceof' => array(

                ),
            ),
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.user.admin.groupname' => 'Users',
            'sonata.user.admin.user.class' => 'Cocorico\\UserBundle\\Admin\\UserAdmin',
            'sonata.user.admin.group.class' => 'Cocorico\\UserBundle\\Admin\\GroupAdmin',
            'sonata.user.admin.user.entity' => 'Cocorico\\UserBundle\\Entity\\User',
            'sonata.user.admin.group.entity' => 'Cocorico\\UserBundle\\Entity\\Group',
            'sonata.user.admin.user.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.group.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.user.controller' => 'CocoricoUserBundle:Admin\\UserAdmin',
            'sonata.user.admin.group.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.impersonating' => array(
                'route' => 'cocorico_home',
                'parameters' => array(

                ),
            ),
            'sonata.user.google.authenticator.enabled' => false,
            'sonata.user.profile.form.type' => 'user_profile',
            'sonata.user.profile.form.name' => 'user_profile',
            'sonata.user.profile.form.validation_groups' => array(
                0 => 'CocoricoProfile',
            ),
            'sonata.user.register.confirm.redirect_route' => 'sonata_user_profile_show',
            'sonata.user.register.confirm.redirect_route_params' => array(

            ),
            'sonata.user.configuration.profile_blocks' => array(
                0 => array(
                    'position' => 'left',
                    'settings' => array(
                        'content' => '<h2>Welcome!</h2> This is a sample user profile dashboard, feel free to override it in the configuration!',
                    ),
                    'type' => 'sonata.block.service.text',
                ),
            ),
            'fos_message.message_meta_class' => 'Cocorico\\MessageBundle\\Entity\\MessageMetadata',
            'fos_message.thread_meta_class' => 'Cocorico\\MessageBundle\\Entity\\ThreadMetadata',
            'fos_message.message_class' => 'Cocorico\\MessageBundle\\Entity\\Message',
            'fos_message.thread_class' => 'Cocorico\\MessageBundle\\Entity\\Thread',
            'fos_message.new_thread_form.model' => 'Cocorico\\MessageBundle\\FormModel\\NewThreadMessage',
            'fos_message.new_thread_form.name' => 'message',
            'fos_message.reply_form.model' => 'FOS\\MessageBundle\\FormModel\\ReplyMessage',
            'fos_message.reply_form.name' => 'message',
            'white_october_breadcrumbs.options' => array(
                'separator' => '',
                'separatorClass' => 'separator',
                'listId' => 'breadcrumbs',
                'listClass' => 'breadcrumb',
                'itemClass' => '',
                'linkRel' => '',
                'translation_domain' => 'cocorico_breadcrumbs',
                'viewTemplate' => 'WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig',
                'locale' => NULL,
            ),
            'hwi_oauth.authentication.listener.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\Firewall\\OAuthListener',
            'hwi_oauth.authentication.provider.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\Authentication\\Provider\\OAuthProvider',
            'hwi_oauth.authentication.entry_point.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\EntryPoint\\OAuthEntryPoint',
            'hwi_oauth.user.provider.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\OAuthUserProvider',
            'hwi_oauth.user.provider.entity.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\EntityUserProvider',
            'hwi_oauth.user.provider.fosub_bridge.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\FOSUBUserProvider',
            'hwi_oauth.registration.form.handler.fosub_bridge.class' => 'HWI\\Bundle\\OAuthBundle\\Form\\FOSUBRegistrationFormHandler',
            'hwi_oauth.resource_owner.oauth1.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth1ResourceOwner',
            'hwi_oauth.resource_owner.oauth2.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth2ResourceOwner',
            'hwi_oauth.resource_owner.amazon.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AmazonResourceOwner',
            'hwi_oauth.resource_owner.auth0.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\Auth0ResourceOwner',
            'hwi_oauth.resource_owner.azure.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AzureResourceOwner',
            'hwi_oauth.resource_owner.bitbucket.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitbucketResourceOwner',
            'hwi_oauth.resource_owner.bitly.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitlyResourceOwner',
            'hwi_oauth.resource_owner.box.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BoxResourceOwner',
            'hwi_oauth.resource_owner.bufferapp.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BufferAppResourceOwner',
            'hwi_oauth.resource_owner.dailymotion.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DailymotionResourceOwner',
            'hwi_oauth.resource_owner.deviantart.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DeviantartResourceOwner',
            'hwi_oauth.resource_owner.deezer.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DeezerResourceOwner',
            'hwi_oauth.resource_owner.discogs.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DiscogsResourceOwner',
            'hwi_oauth.resource_owner.disqus.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DisqusResourceOwner',
            'hwi_oauth.resource_owner.dropbox.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DropboxResourceOwner',
            'hwi_oauth.resource_owner.eve_online.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\EveOnlineResourceOwner',
            'hwi_oauth.resource_owner.eventbrite.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\EventbriteResourceOwner',
            'hwi_oauth.resource_owner.facebook.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FacebookResourceOwner',
            'hwi_oauth.resource_owner.fiware.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FiwareResourceOwner',
            'hwi_oauth.resource_owner.flickr.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FlickrResourceOwner',
            'hwi_oauth.resource_owner.foursquare.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FoursquareResourceOwner',
            'hwi_oauth.resource_owner.github.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GitHubResourceOwner',
            'hwi_oauth.resource_owner.google.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GoogleResourceOwner',
            'hwi_oauth.resource_owner.youtube.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YoutubeResourceOwner',
            'hwi_oauth.resource_owner.hubic.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\HubicResourceOwner',
            'hwi_oauth.resource_owner.instagram.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\InstagramResourceOwner',
            'hwi_oauth.resource_owner.jira.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\JiraResourceOwner',
            'hwi_oauth.resource_owner.linkedin.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\LinkedinResourceOwner',
            'hwi_oauth.resource_owner.mailru.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\MailRuResourceOwner',
            'hwi_oauth.resource_owner.paypal.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\PaypalResourceOwner',
            'hwi_oauth.resource_owner.qq.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\QQResourceOwner',
            'hwi_oauth.resource_owner.reddit.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\RedditResourceOwner',
            'hwi_oauth.resource_owner.runkeeper.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\RunKeeperResourceOwner',
            'hwi_oauth.resource_owner.salesforce.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SalesforceResourceOwner',
            'hwi_oauth.resource_owner.sensio_connect.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SensioConnectResourceOwner',
            'hwi_oauth.resource_owner.sina_weibo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SinaWeiboResourceOwner',
            'hwi_oauth.resource_owner.slack.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SlackResourceOwner',
            'hwi_oauth.resource_owner.spotify.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SpotifyResourceOwner',
            'hwi_oauth.resource_owner.soundcloud.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SoundcloudResourceOwner',
            'hwi_oauth.resource_owner.stack_exchange.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StackExchangeResourceOwner',
            'hwi_oauth.resource_owner.stereomood.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StereomoodResourceOwner',
            'hwi_oauth.resource_owner.strava.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StravaResourceOwner',
            'hwi_oauth.resource_owner.toshl.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ToshlResourceOwner',
            'hwi_oauth.resource_owner.trakt.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TraktResourceOwner',
            'hwi_oauth.resource_owner.trello.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TrelloResourceOwner',
            'hwi_oauth.resource_owner.twitch.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitchResourceOwner',
            'hwi_oauth.resource_owner.twitter.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitterResourceOwner',
            'hwi_oauth.resource_owner.vkontakte.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\VkontakteResourceOwner',
            'hwi_oauth.resource_owner.wechat.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WechatResourceOwner',
            'hwi_oauth.resource_owner.windows_live.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WindowsLiveResourceOwner',
            'hwi_oauth.resource_owner.wordpress.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WordpressResourceOwner',
            'hwi_oauth.resource_owner.xing.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\XingResourceOwner',
            'hwi_oauth.resource_owner.yahoo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YahooResourceOwner',
            'hwi_oauth.resource_owner.yandex.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YandexResourceOwner',
            'hwi_oauth.resource_owner.odnoklassniki.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\OdnoklassnikiResourceOwner',
            'hwi_oauth.resource_owner.37signals.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ThirtySevenSignalsResourceOwner',
            'hwi_oauth.resource_ownermap.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\ResourceOwnerMap',
            'hwi_oauth.security.oauth_utils.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\OAuthUtils',
            'hwi_oauth.storage.session.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\RequestDataStorage\\SessionStorage',
            'hwi_oauth.templating.helper.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Templating\\Helper\\OAuthHelper',
            'hwi_oauth.twig.extension.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Twig\\Extension\\OAuthExtension',
            'hwi_oauth.http_client.class' => 'Buzz\\Client\\Curl',
            'hwi_oauth.firewall_names' => array(
                0 => 'main',
            ),
            'hwi_oauth.target_path_parameter' => NULL,
            'hwi_oauth.use_referer' => false,
            'hwi_oauth.failed_auth_path' => 'hwi_oauth_connect',
            'hwi_oauth.resource_owners' => array(
                'facebook' => 'facebook',
            ),
            'hwi_oauth.connect' => true,
            'hwi_oauth.connect.confirmation' => true,
            'hwi_oauth.templating.engine' => 'twig',
            'fm_elfinder.loader' => 'FM\\ElfinderBundle\\Loader\\ElFinderLoader',
            'fm_elfinder.configurator' => 'FM\\ElfinderBundle\\Configuration\\ElFinderConfigurationReader',
            'elfinder.form.type.class' => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType',
            'fm_elfinder' => array(
                'instances' => array(
                    'ckeditor' => array(
                        'locale' => 'en',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'theme' => 'smoothness',
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => false,
                            'roots' => array(
                                'uploads' => array(
                                    'show_hidden' => false,
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'application/pdf',
                                        4 => 'image/gif',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '12M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(

                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'disabled_commands' => array(

                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '/',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(

                                    ),
                                    'archivers' => array(

                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(

                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(

                            ),
                            'plugins' => array(

                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                        'visible_mime_types' => array(

                        ),
                    ),
                ),
                'configuration_provider' => 'fm_elfinder.configurator.default',
                'assets_path' => '/assets',
                'loader' => 'fm_elfinder.loader.default',
            ),
            'simplethings.entityaudit.audited_entities' => array(
                0 => 'CocoricoConfigBundle\\Entity\\Parameter',
                1 => 'Cocorico\\ConfigBundle\\Entity\\Parameter',
            ),
            'simplethings.entityaudit.global_ignore_columns' => array(

            ),
            'simplethings.entityaudit.table_prefix' => '',
            'simplethings.entityaudit.table_suffix' => '_audit',
            'simplethings.entityaudit.revision_field_name' => 'rev',
            'simplethings.entityaudit.revision_type_field_name' => 'revtype',
            'simplethings.entityaudit.revision_table_name' => 'revisions',
            'simplethings.entityaudit.revision_id_field_type' => 'integer',
            'cocorico_user.account_created_user.email.template' => 'CocoricoUserBundle:Mails/User:account_created_user.txt.twig',
            'cocorico_user.forgot_password_user.email.template' => 'CocoricoUserBundle:Mails/User:forgot_password_user.txt.twig',
            'cocorico_user.new_message_user.email.template' => 'CocoricoUserBundle:Mails/User:new_message_user.txt.twig',
            'cocorico_user.account_creation_confirmation_user.email.template' => 'CocoricoUserBundle:Mails/User:account_creation_confirmation_user.txt.twig',
            'cocorico_user.profile_about_me.form.class' => 'Cocorico\\UserBundle\\Form\\Type\\ProfileAboutMeFormType',
            'cocorico_user.login.form.class' => 'Cocorico\\UserBundle\\Form\\Type\\LoginFormType',
            'troopers_mangopay.mango_api.class' => 'Troopers\\MangopayBundle\\Helper\\MangopayHelper',
            'troopers_mangopay.payment_helper.class' => 'Troopers\\MangopayBundle\\Helper\\PaymentHelper',
            'troopers_mangopay.card_registration_helper.class' => 'Troopers\\MangopayBundle\\Helper\\CardRegistrationHelper',
            'troopers_mangopay.payment_direct_helper.class' => 'Troopers\\MangopayBundle\\Helper\\PaymentDirectHelper',
            'troopers_mangopay.payment_out_helper.class' => 'Troopers\\MangopayBundle\\Helper\\PaymentOutHelper',
            'troopers_mangopay.bankwire_helper.class' => 'Troopers\\MangopayBundle\\Helper\\BankwireHelper',
            'troopers_mangopay.user_helper.class' => 'Troopers\\MangopayBundle\\Helper\\UserHelper',
            'troopers_mangopay.bank_information_helper.class' => 'Troopers\\MangopayBundle\\Helper\\BankInformationHelper',
            'troopers_mangopay.wallet_helper.class' => 'Troopers\\MangopayBundle\\Helper\\WalletHelper',
            'troopers_mangopay.order.class' => 'Troopers\\MangopayBundle\\Entity\\Order',
            'troopers_mangopay.form.card' => 'Troopers\\MangopayBundle\\Form\\CardType',
            'troopers_mangopay.debug_mode' => false,
            'troopers_mangopay.client_id' => 'koduteenus_mangopay1',
            'troopers_mangopay.client_password' => 'Tanusree_1',
            'troopers_mangopay.base_url' => 'https://api.sandbox.mangopay.com',
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'twig.extension.webprofiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'deploy.config' => array(
                'prod' => array(
                    'rsync_options' => '-azC --force --delete --progress -h --checksum',
                    'host' => 'fake.cocorico.prod',
                    'dir' => '/fake/path',
                    'user' => 'fakeuser',
                    'port' => 22,
                    'timeout' => 120,
                ),
            ),
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'bazinga_geocoder.data_collector' => array(
                    0 => 'geocoder',
                    1 => 'BazingaGeocoderBundle:Collector:geocoder',
                ),
                'doctrine_mongodb.odm.data_collector.pretty' => array(
                    0 => 'mongodb',
                    1 => 'DoctrineMongoDBBundle:Collector:mongodb',
                ),
                'sonata.block.data_collector' => array(
                    0 => 'block',
                    1 => 'SonataBlockBundle:Profiler:block.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'sensio_distribution.security_checker.command',
            ),
            'sonata.core.form.types' => array(
                0 => 'cocorico.form.type.listing_new',
                1 => 'cocorico.form.type.listing_edit',
                2 => 'cocorico.form.type.listing_edit_status',
                3 => 'cocorico.form.type.listing_edit_description',
                4 => 'cocorico.form.type.listing_edit_price',
                5 => 'cocorico.form.type.listing_edit_images',
                6 => 'cocorico.form.type.listing_edit_location',
                7 => 'cocorico.form.type.listing_edit_characteristic',
                8 => 'cocorico.form.type.listing_edit_availabilities',
                9 => 'cocorico.form.type.listing_edit_availabilities_status',
                10 => 'cocorico.form.type.listing_edit_availabilities_prices',
                11 => 'cocorico.form.type.listing_edit_availability_price',
                12 => 'cocorico.form.type.listing_new_categories',
                13 => 'cocorico.form.type.listing_edit_categories',
                14 => 'cocorico.form.type.listing_edit_categories_ajax',
                15 => 'cocorico.form.type.country_filtered',
                16 => 'cocorico.form.type.language_filtered',
                17 => 'cocorico.form.type.price',
                18 => 'cocorico.form.type.entity_hidden',
                19 => 'cocorico.form.type.listing_category',
                20 => 'cocorico.form.type.listing_search_result',
                21 => 'cocorico.form.type.listing_search',
                22 => 'cocorico.form.type.listing_search_home',
                23 => 'cocorico.form.type.listing_characteristic',
                24 => 'cocorico.form.type.date_range',
                25 => 'cocorico.form.type.date_hidden',
                26 => 'cocorico.form.type.time_range',
                27 => 'cocorico.form.type.listing_edit_duration',
                28 => 'cocorico.form.type.booking_new',
                29 => 'cocorico.form.type.booking_edit',
                30 => 'cocorico.form.type.booking_price',
                31 => 'cocorico.form.type.booking_user_address',
                32 => 'cocorico.form.type.weekdays',
                33 => 'cocorico.form.booking.status_filter',
                34 => 'form.type.form',
                35 => 'form.type.birthday',
                36 => 'form.type.checkbox',
                37 => 'form.type.choice',
                38 => 'form.type.collection',
                39 => 'form.type.country',
                40 => 'form.type.date',
                41 => 'form.type.datetime',
                42 => 'form.type.email',
                43 => 'form.type.file',
                44 => 'form.type.hidden',
                45 => 'form.type.integer',
                46 => 'form.type.language',
                47 => 'form.type.locale',
                48 => 'form.type.money',
                49 => 'form.type.number',
                50 => 'form.type.password',
                51 => 'form.type.percent',
                52 => 'form.type.radio',
                53 => 'form.type.range',
                54 => 'form.type.repeated',
                55 => 'form.type.search',
                56 => 'form.type.textarea',
                57 => 'form.type.text',
                58 => 'form.type.time',
                59 => 'form.type.timezone',
                60 => 'form.type.url',
                61 => 'form.type.button',
                62 => 'form.type.submit',
                63 => 'form.type.reset',
                64 => 'form.type.currency',
                65 => 'form.type.entity',
                66 => 'fos_user.username_form_type',
                67 => 'fos_user.profile.form.type',
                68 => 'fos_user.registration.form.type',
                69 => 'fos_user.change_password.form.type',
                70 => 'fos_user.resetting.form.type',
                71 => 'fos_user.group.form.type',
                72 => 'payment.form.choose_payment_method_type',
                73 => 'payment.form.paypal_express_checkout_type',
                74 => 'a2lix_translation_form.default.type.translations',
                75 => 'a2lix_translation_form.default.type.translationsfields',
                76 => 'a2lix_translation_form.default.type.translationsforms',
                77 => 'a2lix_translation_form.default.type.translationslocalesselector',
                78 => 'a2lix_translation_form.default.type.translatedentity',
                79 => 'liip_imagine.form.type.image',
                80 => 'form.type.mongodb_document',
                81 => 'sonata.core.form.type.array',
                82 => 'sonata.core.form.type.boolean',
                83 => 'sonata.core.form.type.collection',
                84 => 'sonata.core.form.type.translatable_choice',
                85 => 'sonata.core.form.type.date_range',
                86 => 'sonata.core.form.type.datetime_range',
                87 => 'sonata.core.form.type.date_picker',
                88 => 'sonata.core.form.type.datetime_picker',
                89 => 'sonata.core.form.type.date_range_picker',
                90 => 'sonata.core.form.type.datetime_range_picker',
                91 => 'sonata.core.form.type.equal',
                92 => 'sonata.core.form.type.color_selector',
                93 => 'sonata.block.form.type.block',
                94 => 'sonata.block.form.type.container_template',
                95 => 'sonata.admin.form.type.admin',
                96 => 'sonata.admin.form.type.model_choice',
                97 => 'sonata.admin.form.type.model_list',
                98 => 'sonata.admin.form.type.model_reference',
                99 => 'sonata.admin.form.type.model_hidden',
                100 => 'sonata.admin.form.type.model_autocomplete',
                101 => 'sonata.admin.form.type.collection',
                102 => 'sonata.admin.form.filter.type.number',
                103 => 'sonata.admin.form.filter.type.choice',
                104 => 'sonata.admin.form.filter.type.default',
                105 => 'sonata.admin.form.filter.type.date',
                106 => 'sonata.admin.form.filter.type.daterange',
                107 => 'sonata.admin.form.filter.type.datetime',
                108 => 'sonata.admin.form.filter.type.datetime_range',
                109 => 'sonata.user.form.type.security_roles',
                110 => 'sonata.user.profile.form.type',
                111 => 'sonata.user.form.gender_list',
                112 => 'fos_message.recipients_selector',
                113 => 'ivory_ck_editor.form.type',
                114 => 'fm_elfinder.form.type',
                115 => 'cocorico_geo.form.type.geocoding',
                116 => 'cocorico_user.profile_about_me.form.type',
                117 => 'cocorico_user.login.form.type',
                118 => 'cocorico_user.form.type.user_address',
                119 => 'cocorico_message.new_thread.form.type',
                120 => 'cocorico_message.reply.form.type',
                121 => 'cocorico_contact.form.type.contact_new',
                122 => 'cocorico.star_rating.form.type',
                123 => 'cocorico.form.type.review_new',
                124 => 'troopers_mangopay.form.card',
            ),
            'sonata.core.form.type_extensions' => array(
                0 => 'cocorico.image_type_extension',
                1 => 'form.type_extension.form.http_foundation',
                2 => 'form.type_extension.form.validator',
                3 => 'form.type_extension.repeated.validator',
                4 => 'form.type_extension.submit.validator',
                5 => 'form.type_extension.upload.validator',
                6 => 'form.type_extension.csrf',
                7 => 'form.type_extension.form.data_collector',
                8 => 'sonata.admin.form.extension.field',
                9 => 'sonata.admin.form.extension.field.mopa',
            ),
        );
    }
}
