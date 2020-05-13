<?php

namespace agentur1601com\GsdSpecialAnnouncements\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use agentur1601com\GsdSpecialAnnouncements\GsdSpecialAnnouncementsBundle;
#use Contao\CalendarBundle\ContaoCalendarBundle;
use agentur1601com\GsdJobs\GsdJobsBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(GsdSpecialAnnouncementsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
