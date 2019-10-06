<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:03+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011-2013, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationProduct;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationKind;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * Primarily used for identification and definition of Medication, but also covers
 * ingredients and packaging.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedication
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRMedication extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION;

    const FIELD_CODE = 'code';
    const FIELD_IS_BRAND = 'isBrand';
    const FIELD_IS_BRAND_EXT = '_isBrand';
    const FIELD_KIND = 'kind';
    const FIELD_MANUFACTURER = 'manufacturer';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PACKAGE = 'package';
    const FIELD_PRODUCT = 'product';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code (or set of codes) that identify this medication. Usage note: This could
     * be a standard drug code such as a drug regulator code, RxNorm code, SNOMED CT
     * code, etc. It could also be a local formulary code, optionally with translations
     * to the standard drug codes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Set to true if the item is attributable to a specific manufacturer (even if we
     * don't know who that is).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    private $isBrand = null;
    /**
     * Whether the medication is a product or a package
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Medications are either a single administrable product or a package that contains
     * one or more products.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationKind
     */
    private $kind = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the details of the manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $manufacturer = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The common/commercial name of the medication absent information such as
     * strength, form, etc. E.g. Acetaminophen, Tylenol 3, etc. The fully coordinated
     * name is communicated as the display of Medication.code.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $name = null;
    /**
     * Primarily used for identification and definition of Medication, but also covers
     * ingredients and packaging.
     *
     * Information that only applies to packages (not products).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage
     */
    private $package = null;
    /**
     * Primarily used for identification and definition of Medication, but also covers
     * ingredients and packaging.
     *
     * Information that only applies to products (not packages).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationProduct
     */
    private $product = null;

    /**
     * FHIRMedication Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedication::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_IS_BRAND])) {
            $ext = (isset($data[self::FIELD_IS_BRAND_EXT]) && is_array($data[self::FIELD_IS_BRAND_EXT]))
                ? $data[self::FIELD_IS_BRAND_EXT]
                : null;
            if ($data[self::FIELD_IS_BRAND] instanceof FHIRBoolean) {
                $this->setIsBrand($data[self::FIELD_IS_BRAND]);
            } elseif ($ext && is_scalar($data[self::FIELD_IS_BRAND])) {
                $this->setIsBrand(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_IS_BRAND]] + $ext));
            } else {
                $this->setIsBrand(new FHIRBoolean($data[self::FIELD_IS_BRAND]));
            }
        }
        if (isset($data[self::FIELD_KIND])) {
            if ($data[self::FIELD_KIND] instanceof FHIRMedicationKind) {
                $this->setKind($data[self::FIELD_KIND]);
            } else {
                $this->setKind(new FHIRMedicationKind($data[self::FIELD_KIND]));
            }
        }
        if (isset($data[self::FIELD_MANUFACTURER])) {
            if ($data[self::FIELD_MANUFACTURER] instanceof FHIRResourceReference) {
                $this->setManufacturer($data[self::FIELD_MANUFACTURER]);
            } else {
                $this->setManufacturer(new FHIRResourceReference($data[self::FIELD_MANUFACTURER]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_PACKAGE])) {
            if ($data[self::FIELD_PACKAGE] instanceof FHIRMedicationPackage) {
                $this->setPackage($data[self::FIELD_PACKAGE]);
            } else {
                $this->setPackage(new FHIRMedicationPackage($data[self::FIELD_PACKAGE]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT])) {
            if ($data[self::FIELD_PRODUCT] instanceof FHIRMedicationProduct) {
                $this->setProduct($data[self::FIELD_PRODUCT]);
            } else {
                $this->setProduct(new FHIRMedicationProduct($data[self::FIELD_PRODUCT]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code (or set of codes) that identify this medication. Usage note: This could
     * be a standard drug code such as a drug regulator code, RxNorm code, SNOMED CT
     * code, etc. It could also be a local formulary code, optionally with translations
     * to the standard drug codes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code (or set of codes) that identify this medication. Usage note: This could
     * be a standard drug code such as a drug regulator code, RxNorm code, SNOMED CT
     * code, etc. It could also be a local formulary code, optionally with translations
     * to the standard drug codes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $code
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Set to true if the item is attributable to a specific manufacturer (even if we
     * don't know who that is).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getIsBrand()
    {
        return $this->isBrand;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Set to true if the item is attributable to a specific manufacturer (even if we
     * don't know who that is).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $isBrand
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication
     */
    public function setIsBrand($isBrand = null)
    {
        if (null === $isBrand) {
            $this->isBrand = null;
            return $this;
        }
        if ($isBrand instanceof FHIRBoolean) {
            $this->isBrand = $isBrand;
            return $this;
        }
        $this->isBrand = new FHIRBoolean($isBrand);
        return $this;
    }

    /**
     * Whether the medication is a product or a package
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Medications are either a single administrable product or a package that contains
     * one or more products.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Whether the medication is a product or a package
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Medications are either a single administrable product or a package that contains
     * one or more products.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationKind $kind
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication
     */
    public function setKind(FHIRMedicationKind $kind = null)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the details of the manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the details of the manufacturer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $manufacturer
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication
     */
    public function setManufacturer(FHIRResourceReference $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The common/commercial name of the medication absent information such as
     * strength, form, etc. E.g. Acetaminophen, Tylenol 3, etc. The fully coordinated
     * name is communicated as the display of Medication.code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The common/commercial name of the medication absent information such as
     * strength, form, etc. E.g. Acetaminophen, Tylenol 3, etc. The fully coordinated
     * name is communicated as the display of Medication.code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * Primarily used for identification and definition of Medication, but also covers
     * ingredients and packaging.
     *
     * Information that only applies to packages (not products).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Primarily used for identification and definition of Medication, but also covers
     * ingredients and packaging.
     *
     * Information that only applies to packages (not products).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage $package
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication
     */
    public function setPackage(FHIRMedicationPackage $package = null)
    {
        $this->package = $package;
        return $this;
    }

    /**
     * Primarily used for identification and definition of Medication, but also covers
     * ingredients and packaging.
     *
     * Information that only applies to products (not packages).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationProduct
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Primarily used for identification and definition of Medication, but also covers
     * ingredients and packaging.
     *
     * Information that only applies to products (not packages).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationProduct $product
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication
     */
    public function setProduct(FHIRMedicationProduct $product = null)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRMedication::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedication::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRResource::xmlUnserialize($sxe, new FHIRMedication);
        } elseif (!is_object($type) || !($type instanceof FHIRMedication)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedication::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($attributes->isBrand)) {
            $type->setIsBrand((string)$attributes->isBrand);
        }
        if (isset($children->isBrand)) {
            $type->setIsBrand(FHIRBoolean::xmlUnserialize($children->isBrand));
        }
        if (isset($children->kind)) {
            $type->setKind(FHIRMedicationKind::xmlUnserialize($children->kind));
        }
        if (isset($children->manufacturer)) {
            $type->setManufacturer(FHIRResourceReference::xmlUnserialize($children->manufacturer));
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($children->package)) {
            $type->setPackage(FHIRMedicationPackage::xmlUnserialize($children->package));
        }
        if (isset($children->product)) {
            $type->setProduct(FHIRMedicationProduct::xmlUnserialize($children->product));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Medication xmlns="http://hl7.org/fhir"></Medication>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE));
        }
        if (null !== ($v = $this->getIsBrand())) {
            $sxe->addAttribute(self::FIELD_IS_BRAND, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_IS_BRAND));
            }
        }

        if (null !== ($v = $this->getKind())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_KIND));
        }

        if (null !== ($v = $this->getManufacturer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MANUFACTURER));
        }
        if (null !== ($v = $this->getName())) {
            $sxe->addAttribute(self::FIELD_NAME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
            }
        }

        if (null !== ($v = $this->getPackage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PACKAGE));
        }

        if (null !== ($v = $this->getProduct())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getIsBrand())) {
            $a[self::FIELD_IS_BRAND] = (string)$v;
            $a[self::FIELD_IS_BRAND_EXT] = $v;
        }
        if (null !== ($v = $this->getKind())) {
            $a[self::FIELD_KIND] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a[self::FIELD_MANUFACTURER] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = (string)$v;
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if (null !== ($v = $this->getPackage())) {
            $a[self::FIELD_PACKAGE] = $v;
        }
        if (null !== ($v = $this->getProduct())) {
            $a[self::FIELD_PRODUCT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}