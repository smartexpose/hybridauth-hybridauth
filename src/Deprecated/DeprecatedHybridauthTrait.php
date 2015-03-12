<?php
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2014, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html 
*/

namespace Hybridauth\Deprecated;

/**
 * Deprecated methods back yard (kept for backward compatibility sake)
 *
 * These methods are to be removed sooner or later.
 */
trait DeprecatedHybridauthTrait
{	
	/**
	* Check if the current user is connected to a given provider
	*
	* @deprecated 
	*/
	public static function isConnectedWith( $providerId )
	{
		return $this->getAdapter( $providerId )->isAuthorized();
	}

	/**
	* A generic function to logout all connected provider at once 
	*
	* @deprecated 
	*/ 
	public static function logoutAllProviders()
	{
		$this->storage->clear();
	}

	/**
	*  Get the storage session data into an array
	*
	* @deprecated 
	*/
	function getSessionData()
	{ 
		return $this->storage->getSessionData();
	}

	/**
	* Restore the storage back into session from an array
	*
	* @deprecated 
	*/
	function restoreSessionData( $sessiondata )
	{
		$this->storage->restoreSessionData( $sessiondata );
	}
}