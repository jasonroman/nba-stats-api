<?php declare(strict_types = 1);

namespace JasonRoman\NbaApi\Params\Data;

class GameDateParam extends AbstractDataParam
{
    // format for dates is YYYYMMDD
    const FORMAT      = '/^\d{4}-\d{2}-\d{2}$/';
    const DATE_FORMAT = 'Ymd';

    /**
     * Take a \DateTime value and convert it to the string date format that the API expects.
     *
     * @param \DateTime|string $dateTime
     * @return string
     */
    public static function getStringValue($dateTime): string
    {
        // do not return anything if no value was specified
        if (!$dateTime) {
            return '';
        }

        // until a mixed type is supported for type-hints, check the value here
        if (!$dateTime instanceof \DateTime) {
            return (new \DateTime($dateTime))->format(static::DATE_FORMAT);
        }

        return $dateTime->format(static::DATE_FORMAT);
    }

    /**
     * {@inheritdoc}
     * @return \DateTime
     */
    public static function getDefaultValue(): \DateTime
    {
        return new \DateTime();
    }

    /**
     * {@inheritdoc}
     */
    public static function getExampleValue()
    {
        return new \DateTime('2017-02-01');
    }
}