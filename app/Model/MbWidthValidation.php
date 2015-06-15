<?php
class MbWidthValidation
{
	/**
	 * Minimum string width
	 *
	 * @param   string
	 * @param   int
	 * @return  bool
	 */
	public static function validation_min_width($val, $length)
	{
		return Validation::_empty($val) || (MBSTRING ? mb_strwidth($val) : strlen($val)*2) >= $length;
	}

	/**
	 * Maximum string width
	 *
	 * @param   string
	 * @param   int
	 * @return  bool
	 */
	public static function _validation_max_width($val, $length)
	{
		return (MBSTRING ? mb_strwidth($val) : strlen($val)*2) <= $length;
	}

	/**
	 * Exact string width
	 *
	 * @param   string
	 * @param   int
	 * @return  bool
	 */
	public static function _validation_exact_width($val, $length)
	{
		return Validation::_empty($val) || (MBSTRING ? mb_strwidth($val) : strlen($val)*2) == $length;
	}
}