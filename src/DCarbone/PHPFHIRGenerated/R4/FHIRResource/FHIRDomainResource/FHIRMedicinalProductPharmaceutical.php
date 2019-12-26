<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Copyright (c) 2011+, HL7, Inc.
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A pharmaceutical product described in terms of its composition and dose form.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicinalProductPharmaceutical
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductPharmaceutical extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL;
    const FIELD_ADMINISTRABLE_DOSE_FORM = 'administrableDoseForm';
    const FIELD_CHARACTERISTICS = 'characteristics';
    const FIELD_DEVICE = 'device';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INGREDIENT = 'ingredient';
    const FIELD_ROUTE_OF_ADMINISTRATION = 'routeOfAdministration';
    const FIELD_UNIT_OF_PRESENTATION = 'unitOfPresentation';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The administrable dose form, after necessary reconstitution.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $administrableDoseForm = null;

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * Characteristics e.g. a products onset of action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics[]
     */
    protected $characteristics = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accompanying device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $device = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the pharmaceutical medicinal product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ingredient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $ingredient = [];

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * The path by which the pharmaceutical product is taken into or makes contact with
     * the body.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration[]
     */
    protected $routeOfAdministration = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $unitOfPresentation = null;

    /**
     * Validation map for fields in type MedicinalProductPharmaceutical
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_ROUTE_OF_ADMINISTRATION => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRMedicinalProductPharmaceutical Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductPharmaceutical::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADMINISTRABLE_DOSE_FORM])) {
            if ($data[self::FIELD_ADMINISTRABLE_DOSE_FORM] instanceof FHIRCodeableConcept) {
                $this->setAdministrableDoseForm($data[self::FIELD_ADMINISTRABLE_DOSE_FORM]);
            } else {
                $this->setAdministrableDoseForm(new FHIRCodeableConcept($data[self::FIELD_ADMINISTRABLE_DOSE_FORM]));
            }
        }
        if (isset($data[self::FIELD_CHARACTERISTICS])) {
            if (is_array($data[self::FIELD_CHARACTERISTICS])) {
                foreach($data[self::FIELD_CHARACTERISTICS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductPharmaceuticalCharacteristics) {
                        $this->addCharacteristics($v);
                    } else {
                        $this->addCharacteristics(new FHIRMedicinalProductPharmaceuticalCharacteristics($v));
                    }
                }
            } else if ($data[self::FIELD_CHARACTERISTICS] instanceof FHIRMedicinalProductPharmaceuticalCharacteristics) {
                $this->addCharacteristics($data[self::FIELD_CHARACTERISTICS]);
            } else {
                $this->addCharacteristics(new FHIRMedicinalProductPharmaceuticalCharacteristics($data[self::FIELD_CHARACTERISTICS]));
            }
        }
        if (isset($data[self::FIELD_DEVICE])) {
            if (is_array($data[self::FIELD_DEVICE])) {
                foreach($data[self::FIELD_DEVICE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addDevice($v);
                    } else {
                        $this->addDevice(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_DEVICE] instanceof FHIRReference) {
                $this->addDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->addDevice(new FHIRReference($data[self::FIELD_DEVICE]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_INGREDIENT])) {
            if (is_array($data[self::FIELD_INGREDIENT])) {
                foreach($data[self::FIELD_INGREDIENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addIngredient($v);
                    } else {
                        $this->addIngredient(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_INGREDIENT] instanceof FHIRReference) {
                $this->addIngredient($data[self::FIELD_INGREDIENT]);
            } else {
                $this->addIngredient(new FHIRReference($data[self::FIELD_INGREDIENT]));
            }
        }
        if (isset($data[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
            if (is_array($data[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
                foreach($data[self::FIELD_ROUTE_OF_ADMINISTRATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductPharmaceuticalRouteOfAdministration) {
                        $this->addRouteOfAdministration($v);
                    } else {
                        $this->addRouteOfAdministration(new FHIRMedicinalProductPharmaceuticalRouteOfAdministration($v));
                    }
                }
            } else if ($data[self::FIELD_ROUTE_OF_ADMINISTRATION] instanceof FHIRMedicinalProductPharmaceuticalRouteOfAdministration) {
                $this->addRouteOfAdministration($data[self::FIELD_ROUTE_OF_ADMINISTRATION]);
            } else {
                $this->addRouteOfAdministration(new FHIRMedicinalProductPharmaceuticalRouteOfAdministration($data[self::FIELD_ROUTE_OF_ADMINISTRATION]));
            }
        }
        if (isset($data[self::FIELD_UNIT_OF_PRESENTATION])) {
            if ($data[self::FIELD_UNIT_OF_PRESENTATION] instanceof FHIRCodeableConcept) {
                $this->setUnitOfPresentation($data[self::FIELD_UNIT_OF_PRESENTATION]);
            } else {
                $this->setUnitOfPresentation(new FHIRCodeableConcept($data[self::FIELD_UNIT_OF_PRESENTATION]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<MedicinalProductPharmaceutical{$xmlns}></MedicinalProductPharmaceutical>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The administrable dose form, after necessary reconstitution.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getAdministrableDoseForm()
    {
        return $this->administrableDoseForm;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The administrable dose form, after necessary reconstitution.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $administrableDoseForm
     * @return static
     */
    public function setAdministrableDoseForm(FHIRCodeableConcept $administrableDoseForm = null)
    {
        $this->administrableDoseForm = $administrableDoseForm;
        return $this;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * Characteristics e.g. a products onset of action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics[]
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * Characteristics e.g. a products onset of action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics $characteristics
     * @return static
     */
    public function addCharacteristics(FHIRMedicinalProductPharmaceuticalCharacteristics $characteristics = null)
    {
        $this->characteristics[] = $characteristics;
        return $this;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * Characteristics e.g. a products onset of action.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics[] $characteristics
     * @return static
     */
    public function setCharacteristics(array $characteristics = [])
    {
        $this->characteristics = [];
        if ([] === $characteristics) {
            return $this;
        }
        foreach($characteristics as $v) {
            if ($v instanceof FHIRMedicinalProductPharmaceuticalCharacteristics) {
                $this->addCharacteristics($v);
            } else {
                $this->addCharacteristics(new FHIRMedicinalProductPharmaceuticalCharacteristics($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accompanying device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accompanying device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $device
     * @return static
     */
    public function addDevice(FHIRReference $device = null)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Accompanying device.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $device
     * @return static
     */
    public function setDevice(array $device = [])
    {
        $this->device = [];
        if ([] === $device) {
            return $this;
        }
        foreach($device as $v) {
            if ($v instanceof FHIRReference) {
                $this->addDevice($v);
            } else {
                $this->addDevice(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the pharmaceutical medicinal product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the pharmaceutical medicinal product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the pharmaceutical medicinal product.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ingredient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ingredient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $ingredient
     * @return static
     */
    public function addIngredient(FHIRReference $ingredient = null)
    {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ingredient.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $ingredient
     * @return static
     */
    public function setIngredient(array $ingredient = [])
    {
        $this->ingredient = [];
        if ([] === $ingredient) {
            return $this;
        }
        foreach($ingredient as $v) {
            if ($v instanceof FHIRReference) {
                $this->addIngredient($v);
            } else {
                $this->addIngredient(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * The path by which the pharmaceutical product is taken into or makes contact with
     * the body.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration[]
     */
    public function getRouteOfAdministration()
    {
        return $this->routeOfAdministration;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * The path by which the pharmaceutical product is taken into or makes contact with
     * the body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration $routeOfAdministration
     * @return static
     */
    public function addRouteOfAdministration(FHIRMedicinalProductPharmaceuticalRouteOfAdministration $routeOfAdministration = null)
    {
        $this->routeOfAdministration[] = $routeOfAdministration;
        return $this;
    }

    /**
     * A pharmaceutical product described in terms of its composition and dose form.
     *
     * The path by which the pharmaceutical product is taken into or makes contact with
     * the body.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration[] $routeOfAdministration
     * @return static
     */
    public function setRouteOfAdministration(array $routeOfAdministration = [])
    {
        $this->routeOfAdministration = [];
        if ([] === $routeOfAdministration) {
            return $this;
        }
        foreach($routeOfAdministration as $v) {
            if ($v instanceof FHIRMedicinalProductPharmaceuticalRouteOfAdministration) {
                $this->addRouteOfAdministration($v);
            } else {
                $this->addRouteOfAdministration(new FHIRMedicinalProductPharmaceuticalRouteOfAdministration($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getUnitOfPresentation()
    {
        return $this->unitOfPresentation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $unitOfPresentation
     * @return static
     */
    public function setUnitOfPresentation(FHIRCodeableConcept $unitOfPresentation = null)
    {
        $this->unitOfPresentation = $unitOfPresentation;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getAdministrableDoseForm())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADMINISTRABLE_DOSE_FORM] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCharacteristics())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CHARACTERISTICS, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDevice())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEVICE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIngredient())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INGREDIENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRouteOfAdministration())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ROUTE_OF_ADMINISTRATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getUnitOfPresentation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNIT_OF_PRESENTATION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ADMINISTRABLE_DOSE_FORM])) {
            $v = $this->getAdministrableDoseForm();
            foreach($validationRules[self::FIELD_ADMINISTRABLE_DOSE_FORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL, self::FIELD_ADMINISTRABLE_DOSE_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMINISTRABLE_DOSE_FORM])) {
                        $errs[self::FIELD_ADMINISTRABLE_DOSE_FORM] = [];
                    }
                    $errs[self::FIELD_ADMINISTRABLE_DOSE_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARACTERISTICS])) {
            $v = $this->getCharacteristics();
            foreach($validationRules[self::FIELD_CHARACTERISTICS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL, self::FIELD_CHARACTERISTICS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARACTERISTICS])) {
                        $errs[self::FIELD_CHARACTERISTICS] = [];
                    }
                    $errs[self::FIELD_CHARACTERISTICS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE])) {
            $v = $this->getDevice();
            foreach($validationRules[self::FIELD_DEVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL, self::FIELD_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE])) {
                        $errs[self::FIELD_DEVICE] = [];
                    }
                    $errs[self::FIELD_DEVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INGREDIENT])) {
            $v = $this->getIngredient();
            foreach($validationRules[self::FIELD_INGREDIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL, self::FIELD_INGREDIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INGREDIENT])) {
                        $errs[self::FIELD_INGREDIENT] = [];
                    }
                    $errs[self::FIELD_INGREDIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
            $v = $this->getRouteOfAdministration();
            foreach($validationRules[self::FIELD_ROUTE_OF_ADMINISTRATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL, self::FIELD_ROUTE_OF_ADMINISTRATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
                        $errs[self::FIELD_ROUTE_OF_ADMINISTRATION] = [];
                    }
                    $errs[self::FIELD_ROUTE_OF_ADMINISTRATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNIT_OF_PRESENTATION])) {
            $v = $this->getUnitOfPresentation();
            foreach($validationRules[self::FIELD_UNIT_OF_PRESENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_PHARMACEUTICAL, self::FIELD_UNIT_OF_PRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT_OF_PRESENTATION])) {
                        $errs[self::FIELD_UNIT_OF_PRESENTATION] = [];
                    }
                    $errs[self::FIELD_UNIT_OF_PRESENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPharmaceutical $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPharmaceutical
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRMedicinalProductPharmaceutical::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductPharmaceutical::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicinalProductPharmaceutical;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductPharmaceutical)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductPharmaceutical::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPharmaceutical or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->administrableDoseForm)) {
            $type->setAdministrableDoseForm(FHIRCodeableConcept::xmlUnserialize($children->administrableDoseForm));
        }
        if (isset($children->characteristics)) {
            foreach($children->characteristics as $child) {
                $type->addCharacteristics(FHIRMedicinalProductPharmaceuticalCharacteristics::xmlUnserialize($child));
            }
        }
        if (isset($children->device)) {
            foreach($children->device as $child) {
                $type->addDevice(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->ingredient)) {
            foreach($children->ingredient as $child) {
                $type->addIngredient(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->routeOfAdministration)) {
            foreach($children->routeOfAdministration as $child) {
                $type->addRouteOfAdministration(FHIRMedicinalProductPharmaceuticalRouteOfAdministration::xmlUnserialize($child));
            }
        }
        if (isset($children->unitOfPresentation)) {
            $type->setUnitOfPresentation(FHIRCodeableConcept::xmlUnserialize($children->unitOfPresentation));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getAdministrableDoseForm())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ADMINISTRABLE_DOSE_FORM, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getCharacteristics())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CHARACTERISTICS, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getDevice())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEVICE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getIngredient())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INGREDIENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getRouteOfAdministration())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ROUTE_OF_ADMINISTRATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getUnitOfPresentation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UNIT_OF_PRESENTATION, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAdministrableDoseForm())) {
            $a[self::FIELD_ADMINISTRABLE_DOSE_FORM] = $v;
        }
        if ([] !== ($vs = $this->getCharacteristics())) {
            $a[self::FIELD_CHARACTERISTICS] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CHARACTERISTICS][] = $v;
            }
        }
        if ([] !== ($vs = $this->getDevice())) {
            $a[self::FIELD_DEVICE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DEVICE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getIngredient())) {
            $a[self::FIELD_INGREDIENT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INGREDIENT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getRouteOfAdministration())) {
            $a[self::FIELD_ROUTE_OF_ADMINISTRATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ROUTE_OF_ADMINISTRATION][] = $v;
            }
        }
        if (null !== ($v = $this->getUnitOfPresentation())) {
            $a[self::FIELD_UNIT_OF_PRESENTATION] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}