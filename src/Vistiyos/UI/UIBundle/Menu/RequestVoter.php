<?php
/**
 * Created by PhpStorm.
 * User: vistiyos
 * Date: 21/6/15
 * Time: 1:29
 */

namespace Vistiyos\UI\UIBundle\Menu;


use Knp\Menu\ItemInterface;
use Knp\Menu\Matcher\Voter\VoterInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class RequestVoter implements VoterInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * Constructor
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Checks whether an item is current.
     *
     * If the voter is not able to determine a result,
     * it should return null to let other voters do the job.
     *
     * @param ItemInterface $item
     *
     * @return boolean|null
     */
    public function matchItem(ItemInterface $item)
    {
        if ($item->getUri() === $this->container->get('request')->getRequestUri()) {
            // URL's completely match
            return true;
        } else if ($item->getUri() !== $this->container->get('request')->getBaseUrl() . '/' && (substr($this->container->get('request')->getRequestUri(), 0, strlen($item->getUri())) === $item->getUri())) {
            // URL isn't just "/" and the first part of the URL match
            return true;
        }
        return null;
    }
}