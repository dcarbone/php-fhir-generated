<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The clinical particulars - indications, contraindications etc. of a medicinal
 * product, including for regulatory purposes.
 *
 * Class FHIRMedicinalProductClinicalsContraindication
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals
 */
class FHIRMedicinalProductClinicalsContraindication extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_CLINICALS_DOT_CONTRAINDICATION;

    const FIELD_COMORBIDITY = 'comorbidity';
    const FIELD_DISEASE = 'disease';
    const FIELD_DISEASE_STATUS = 'diseaseStatus';
    const FIELD_OTHER_THERAPY = 'otherTherapy';
    const FIELD_POPULATION = 'population';
    const FIELD_THERAPEUTIC_INDICATION = 'therapeuticIndication';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $comorbidity = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The disease, symptom or procedure for the contraindication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $disease = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for the contraindication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $diseaseStatus = null;
    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the contraindication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsOtherTherapy[]
     */
    private $otherTherapy = [];
    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The population group to which this applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation[]
     */
    private $population = [];
    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies as part of the indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication[]
     */
    private $therapeuticIndication = [];

    /**
     * FHIRMedicinalProductClinicalsContraindication Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductClinicalsContraindication::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COMORBIDITY])) {
            if (is_array($data[self::FIELD_COMORBIDITY])) {
                foreach($data[self::FIELD_COMORBIDITY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addComorbidity($v);
                    } else {
                        $this->addComorbidity(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_COMORBIDITY] instanceof FHIRCodeableConcept) {
                $this->addComorbidity($data[self::FIELD_COMORBIDITY]);
            } else {
                $this->addComorbidity(new FHIRCodeableConcept($data[self::FIELD_COMORBIDITY]));
            }
        }
        if (isset($data[self::FIELD_DISEASE])) {
            if ($data[self::FIELD_DISEASE] instanceof FHIRCodeableConcept) {
                $this->setDisease($data[self::FIELD_DISEASE]);
            } else {
                $this->setDisease(new FHIRCodeableConcept($data[self::FIELD_DISEASE]));
            }
        }
        if (isset($data[self::FIELD_DISEASE_STATUS])) {
            if ($data[self::FIELD_DISEASE_STATUS] instanceof FHIRCodeableConcept) {
                $this->setDiseaseStatus($data[self::FIELD_DISEASE_STATUS]);
            } else {
                $this->setDiseaseStatus(new FHIRCodeableConcept($data[self::FIELD_DISEASE_STATUS]));
            }
        }
        if (isset($data[self::FIELD_OTHER_THERAPY])) {
            if (is_array($data[self::FIELD_OTHER_THERAPY])) {
                foreach($data[self::FIELD_OTHER_THERAPY] as $v) {
                    if ($v instanceof FHIRMedicinalProductClinicalsOtherTherapy) {
                        $this->addOtherTherapy($v);
                    } else {
                        $this->addOtherTherapy(new FHIRMedicinalProductClinicalsOtherTherapy($v));
                    }
                }
            } else if ($data[self::FIELD_OTHER_THERAPY] instanceof FHIRMedicinalProductClinicalsOtherTherapy) {
                $this->addOtherTherapy($data[self::FIELD_OTHER_THERAPY]);
            } else {
                $this->addOtherTherapy(new FHIRMedicinalProductClinicalsOtherTherapy($data[self::FIELD_OTHER_THERAPY]));
            }
        }
        if (isset($data[self::FIELD_POPULATION])) {
            if (is_array($data[self::FIELD_POPULATION])) {
                foreach($data[self::FIELD_POPULATION] as $v) {
                    if ($v instanceof FHIRMedicinalProductClinicalsPopulation) {
                        $this->addPopulation($v);
                    } else {
                        $this->addPopulation(new FHIRMedicinalProductClinicalsPopulation($v));
                    }
                }
            } else if ($data[self::FIELD_POPULATION] instanceof FHIRMedicinalProductClinicalsPopulation) {
                $this->addPopulation($data[self::FIELD_POPULATION]);
            } else {
                $this->addPopulation(new FHIRMedicinalProductClinicalsPopulation($data[self::FIELD_POPULATION]));
            }
        }
        if (isset($data[self::FIELD_THERAPEUTIC_INDICATION])) {
            if (is_array($data[self::FIELD_THERAPEUTIC_INDICATION])) {
                foreach($data[self::FIELD_THERAPEUTIC_INDICATION] as $v) {
                    if ($v instanceof FHIRMedicinalProductClinicalsTherapeuticIndication) {
                        $this->addTherapeuticIndication($v);
                    } else {
                        $this->addTherapeuticIndication(new FHIRMedicinalProductClinicalsTherapeuticIndication($v));
                    }
                }
            } else if ($data[self::FIELD_THERAPEUTIC_INDICATION] instanceof FHIRMedicinalProductClinicalsTherapeuticIndication) {
                $this->addTherapeuticIndication($data[self::FIELD_THERAPEUTIC_INDICATION]);
            } else {
                $this->addTherapeuticIndication(new FHIRMedicinalProductClinicalsTherapeuticIndication($data[self::FIELD_THERAPEUTIC_INDICATION]));
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
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getComorbidity()
    {
        return $this->comorbidity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $comorbidity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication
     */
    public function addComorbidity(FHIRCodeableConcept $comorbidity = null)
    {
        $this->comorbidity[] = $comorbidity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $comorbidity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication
     */
    public function setComorbidity(array $comorbidity = [])
    {
        $this->comorbidity = [];
        if ([] === $comorbidity) {
            return $this;
        }
        foreach($comorbidity as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addComorbidity($v);
            } else {
                $this->addComorbidity(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The disease, symptom or procedure for the contraindication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDisease()
    {
        return $this->disease;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The disease, symptom or procedure for the contraindication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $disease
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication
     */
    public function setDisease(FHIRCodeableConcept $disease = null)
    {
        $this->disease = $disease;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for the contraindication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDiseaseStatus()
    {
        return $this->diseaseStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for the contraindication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $diseaseStatus
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication
     */
    public function setDiseaseStatus(FHIRCodeableConcept $diseaseStatus = null)
    {
        $this->diseaseStatus = $diseaseStatus;
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the contraindication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsOtherTherapy[]
     */
    public function getOtherTherapy()
    {
        return $this->otherTherapy;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the contraindication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsOtherTherapy $otherTherapy
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication
     */
    public function addOtherTherapy(FHIRMedicinalProductClinicalsOtherTherapy $otherTherapy = null)
    {
        $this->otherTherapy[] = $otherTherapy;
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the contraindication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsOtherTherapy[] $otherTherapy
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication
     */
    public function setOtherTherapy(array $otherTherapy = [])
    {
        $this->otherTherapy = [];
        if ([] === $otherTherapy) {
            return $this;
        }
        foreach($otherTherapy as $v) {
            if ($v instanceof FHIRMedicinalProductClinicalsOtherTherapy) {
                $this->addOtherTherapy($v);
            } else {
                $this->addOtherTherapy(new FHIRMedicinalProductClinicalsOtherTherapy($v));
            }
        }
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The population group to which this applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation[]
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The population group to which this applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation $population
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication
     */
    public function addPopulation(FHIRMedicinalProductClinicalsPopulation $population = null)
    {
        $this->population[] = $population;
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The population group to which this applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation[] $population
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication
     */
    public function setPopulation(array $population = [])
    {
        $this->population = [];
        if ([] === $population) {
            return $this;
        }
        foreach($population as $v) {
            if ($v instanceof FHIRMedicinalProductClinicalsPopulation) {
                $this->addPopulation($v);
            } else {
                $this->addPopulation(new FHIRMedicinalProductClinicalsPopulation($v));
            }
        }
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies as part of the indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication[]
     */
    public function getTherapeuticIndication()
    {
        return $this->therapeuticIndication;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies as part of the indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication $therapeuticIndication
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication
     */
    public function addTherapeuticIndication(FHIRMedicinalProductClinicalsTherapeuticIndication $therapeuticIndication = null)
    {
        $this->therapeuticIndication[] = $therapeuticIndication;
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies as part of the indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication[] $therapeuticIndication
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication
     */
    public function setTherapeuticIndication(array $therapeuticIndication = [])
    {
        $this->therapeuticIndication = [];
        if ([] === $therapeuticIndication) {
            return $this;
        }
        foreach($therapeuticIndication as $v) {
            if ($v instanceof FHIRMedicinalProductClinicalsTherapeuticIndication) {
                $this->addTherapeuticIndication($v);
            } else {
                $this->addTherapeuticIndication(new FHIRMedicinalProductClinicalsTherapeuticIndication($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication
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
                throw new \DomainException(sprintf('FHIRMedicinalProductClinicalsContraindication::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductClinicalsContraindication::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRMedicinalProductClinicalsContraindication);
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductClinicalsContraindication)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductClinicalsContraindication::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->comorbidity)) {
            foreach($children->comorbidity as $child) {
                $type->addComorbidity(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->disease)) {
            $type->setDisease(FHIRCodeableConcept::xmlUnserialize($children->disease));
        }
        if (isset($children->diseaseStatus)) {
            $type->setDiseaseStatus(FHIRCodeableConcept::xmlUnserialize($children->diseaseStatus));
        }
        if (isset($children->otherTherapy)) {
            foreach($children->otherTherapy as $child) {
                $type->addOtherTherapy(FHIRMedicinalProductClinicalsOtherTherapy::xmlUnserialize($child));
            }
        }
        if (isset($children->population)) {
            foreach($children->population as $child) {
                $type->addPopulation(FHIRMedicinalProductClinicalsPopulation::xmlUnserialize($child));
            }
        }
        if (isset($children->therapeuticIndication)) {
            foreach($children->therapeuticIndication as $child) {
                $type->addTherapeuticIndication(FHIRMedicinalProductClinicalsTherapeuticIndication::xmlUnserialize($child));
            }
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
            $sxe = new \SimpleXMLElement('<MedicinalProductClinicalsContraindication xmlns="http://hl7.org/fhir"></MedicinalProductClinicalsContraindication>');
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getComorbidity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMORBIDITY));
            }
        }

        if (null !== ($v = $this->getDisease())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISEASE));
        }

        if (null !== ($v = $this->getDiseaseStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISEASE_STATUS));
        }

        if ([] !== ($vs = $this->getOtherTherapy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OTHER_THERAPY));
            }
        }

        if ([] !== ($vs = $this->getPopulation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_POPULATION));
            }
        }

        if ([] !== ($vs = $this->getTherapeuticIndication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_THERAPEUTIC_INDICATION));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getComorbidity())) {
            $a[self::FIELD_COMORBIDITY] = $vs;
        }
        if (null !== ($v = $this->getDisease())) {
            $a[self::FIELD_DISEASE] = $v;
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            $a[self::FIELD_DISEASE_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getOtherTherapy())) {
            $a[self::FIELD_OTHER_THERAPY] = $vs;
        }
        if ([] !== ($vs = $this->getPopulation())) {
            $a[self::FIELD_POPULATION] = $vs;
        }
        if ([] !== ($vs = $this->getTherapeuticIndication())) {
            $a[self::FIELD_THERAPEUTIC_INDICATION] = $vs;
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