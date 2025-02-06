<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Encoding;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 6th, 2025 03:21+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 */


trait XMLSerializationOptionsTrait
{
    /**
     * Returns the map of configured field value XML serialization locations for this type, keyed by field name.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum[]
     */
    public function _getXMLFieldValueLocationMap(): array
    {
        return $this->_valueXMLLocations;
    }

    /**
     * Set the location a particular field's value must be placed when serializing this type to XML.  Each type has
     * a limited number of fields that may be serialized to XML
     *
     * @param string $field Name of field on this type.
     * @throws \DomainException
     */
    public function _setXMLFieldValueLocation(string $field, ValueXMLLocationEnum $valueXMLLocation): void
    {
        if (!isset($this->_valueXMLLocations[$field])) {
            throw new \DomainException(sprintf(
                'Field "%s" on Type "%s" does not contain a value that is serializable as an attribute',
                $field,
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
            ));
        }
        $this->_valueXMLLocations[$field] = $valueXMLLocation;
    }

    /**
     * Returns the value serialization target for the given field's value on this type.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     * @throws \DomainException
     */
    public function _getXMLFieldValueLocation(string $field): ValueXMLLocationEnum
    {
        if (!isset($this->_valueXMLLocations[$field])) {
            throw new \DomainException(sprintf(
                'Field "%s" on Type "%s" does not contain a value that is serializable as an attribute',
                $field,
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
            ));
        }
        return $this->_valueXMLLocations[$field];
    }
}
