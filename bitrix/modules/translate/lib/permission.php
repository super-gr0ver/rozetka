<?php

namespace Bitrix\Translate;

use Bitrix\Main;
use Bitrix\Translate;


class Permission
{
	const SOURCE = 'X';
	const WRITE = 'W';
	const READ = 'R';
	const DENY = 'D';

	/**
	 * Checks user's access to path.
	 *
	 * @param string $path Path to check.
	 *
	 * @return bool
	 */
	public static function isAllowPath(string $path): bool
	{
		static $initFolders;
		if (empty($initFolders))
		{
			$initFolders = Translate\Config::getInitPath();
			if (empty($initFolders))
			{
				$initFolders = array(Translate\Config::getDefaultPath());
			}
		}

		$path = (string)$path;
		$allowPath = false;
		foreach ($initFolders as $oneFolder)
		{
			if (\mb_strpos($path, $oneFolder) === 0)
			{
				$allowPath = true;
				break;
			}
		}

		return $allowPath;
	}

	/**
	 * Return true if current user can edit php.
	 *
	 * @param \CUser|Main\Engine\CurrentUser $checkUser Current user check for.
	 *
	 * @return bool
	 */
	public static function canEditSource($checkUser): bool
	{
		if ($checkUser instanceof \CUser || $checkUser instanceof Main\Engine\CurrentUser)
		{
			return $checkUser->canDoOperation('edit_php');
		}

		return false;
	}


	/**
	 * Determines if current user is admin.
	 *
	 * @param \CUser|Main\Engine\CurrentUser $checkUser User.
	 *
	 * @return bool
	 */
	public static function isAdmin($checkUser): bool
	{
		if (!($checkUser instanceof \CUser) && !($checkUser instanceof Main\Engine\CurrentUser))
		{
			return false;
		}

		return $checkUser->isAdmin();
	}


	/**
	 * Return true if current user can view module pages.
	 *
	 * @param \CUser|Main\Engine\CurrentUser $checkUser User.
	 *
	 * @return bool
	 */
	public static function canView($checkUser): bool
	{
		if (!($checkUser instanceof \CUser) && !($checkUser instanceof Main\Engine\CurrentUser))
		{
			return false;
		}

		if (self::isAdmin($checkUser))
		{
			return true;
		}

		if ($checkUser instanceof Main\Engine\CurrentUser)
		{
			$userRights = \CMain::getUserRight('translate', $checkUser->getUserGroups());
		}
		elseif ($checkUser instanceof \CUser)
		{
			$userRights = \CMain::getUserRight('translate', $checkUser->getUserGroupArray());
		}

		return ($userRights >= self::READ);
	}

	/**
	 * Return true if current user can edit on module pages.
	 *
	 * @param \CUser|Main\Engine\CurrentUser $checkUser User.
	 *
	 * @return bool
	 */
	public static function canEdit($checkUser): bool
	{
		if (!($checkUser instanceof \CUser) && !($checkUser instanceof Main\Engine\CurrentUser))
		{
			return false;
		}

		if (self::isAdmin($checkUser))
		{
			return true;
		}

		if ($checkUser instanceof Main\Engine\CurrentUser)
		{
			$userRights = \CMain::getUserRight('translate', $checkUser->getUserGroups());
		}
		elseif ($checkUser instanceof \CUser)
		{
			$userRights = \CMain::getUserRight('translate', $checkUser->getUserGroupArray());
		}

		return ($userRights >= self::WRITE);
	}
}
