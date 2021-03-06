<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Smile Elastic Suite to newer
 * versions in the future.
 *
 *
 * @category  Smile
 * @package   Smile\ScopedEav
 * @author    Aurelien FOUCRET <aurelien.foucret@smile.fr>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

namespace Smile\ScopedEav\Api\Data;

/**
 * Scoped attribute interface.
 *
 * @api
 *
 * @category Smile
 * @package  Smile\ScopedEav
 * @author   Aurelien FOUCRET <aurelien.foucret@smile.fr>
 */
interface AttributeInterface extends \Magento\Eav\Api\Data\AttributeInterface
{
    const SCOPE_STORE_TEXT = 'store';

    const SCOPE_GLOBAL_TEXT = 'global';

    const SCOPE_WEBSITE_TEXT = 'website';

    const SCOPE_STORE = 0;

    const SCOPE_GLOBAL = 1;

    const SCOPE_WEBSITE = 2;

    const KEY_IS_GLOBAL = 'is_global';

    /**
     * Retrieve attribute scope as text.
     *
     * @return string|null
     */
    public function getScope();

    /**
     * Return is attribute global as int.
     *
     * @return integer
     */
    public function getIsGlobal();

    /**
     * Set attribute scope
     *
     * @param string $scope Attribute scope as text.
     *
     * @return $this
     */
    public function setScope($scope);

    /**
     * Set is_global value.
     *
     * @param integer $isGlobal Attribute scope as int.
     *
     * @return $this
     */
    public function setIsGlobal($isGlobal);

    /**
     * Retrieve attribute is global scope flag
     *
     * @return bool
     */
    public function isScopeGlobal();

    /**
     * Retrieve attribute is website scope website
     *
     * @return bool
     */
    public function isScopeWebsite();

    /**
     * Retrieve attribute is store scope flag
     *
     * @return bool
     */
    public function isScopeStore();
}
