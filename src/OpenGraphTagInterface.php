<?php

namespace Symflex\Library\SeoInterface;

/**
 * Interface OpenGraphTagInterface
 * @package Symflex\Library\SeoInterface
 */
interface OpenGraphTagInterface extends CommonTagInterface
{
    public const TAG_TYPE_NAME     = 'name';
    public const TAG_TYPE_PROPERTY = 'property';

    public const TAG_OG_TITLE          = 'og:title';
    public const TAG_OG_TYPE           = 'og:type';
    public const TAG_OG_URL            = 'og:url';
    public const TAG_OG_IMAGE          = 'og:image';
    public const TAG_OG_SITE_NAME      = 'og:site-name';
    public const TAG_OG_DESCRIPTION    = 'og:description';
    public const TAG_OG_EMAIL          = 'og:email';
    public const TAG_OG_PHONE_NUMBER   = 'og:phone-number';
    public const TAG_OG_FAX_NUMBER     = 'og:fax-number';
    public const TAG_OG_LATITUDE       = 'og:latitude';
    public const TAG_OG_LONGITUDE      = 'og:longitude';
    public const TAG_OG_STREET_ADDRESS = 'og:street-address';
    public const TAG_OG_LOCALITY       = 'og:locality';
    public const TAG_OG_REGION         = 'og:region';
    public const TAG_OG_POSTAL_CODE    = 'og:postal-code';
    public const TAG_OG_COUNTRY_NAME   = 'og:country-name';


    public function getProperty(): string;
}
