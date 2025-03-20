<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: March 20th, 2025 02:50+0000
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
use DCarbone\PHPFHIRGenerated\Client\ClientErrorException;
use DCarbone\PHPFHIRGenerated\Client\ClientInterface;
use DCarbone\PHPFHIRGenerated\Client\HTTPMethodEnum;
use DCarbone\PHPFHIRGenerated\Client\Request;
use DCarbone\PHPFHIRGenerated\Client\Response;
use DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum;
use DCarbone\PHPFHIRGenerated\Client\UnexpectedResponseCodeException;
use DCarbone\PHPFHIRGenerated\Encoding\ResourceParser;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRAdverseReaction;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRAlert;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRAllergyIntolerance;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRBinary;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRCarePlan;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRComposition;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRConceptMap;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRCondition;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRConformance;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDevice;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDeviceObservationReport;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDiagnosticOrder;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDiagnosticReport;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDocumentManifest;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDocumentReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIREncounter;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRFamilyHistory;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRGroup;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRImagingStudy;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRImmunization;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRImmunizationRecommendation;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRLocation;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedia;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedication;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedicationAdministration;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedicationDispense;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedicationPrescription;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedicationStatement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMessageHeader;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRObservation;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROperationOutcome;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROrder;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROrderResponse;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROrganization;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROther;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRPatient;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRPractitioner;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRProcedure;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRProfile;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRProvenance;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRQuery;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRQuestionnaire;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRRelatedPerson;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRSecurityEvent;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRSpecimen;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRSubstance;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRSupply;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRValueSet;

class VersionClient
{
    private const _STATUS_OK = 200;

    protected ClientInterface $_client;
    protected Version $_version;

    /**
     * VersionClient Constructor
     *
     * @param \DCarbone\PHPFHIRGenerated\Client\ClientInterface $client
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version $version
     */
    public function __construct(ClientInterface $client, Version $version)
    {
        $this->_client = $client;
        $this->_version = $version;
    }

    /**
     * Queries for one resource of a given type, returning the raw response fromm the server.
     *
     * @see https://www.hl7.org/fhir/http.html#read
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionResourceTypeEnum $resourceType
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum $sort May be a string value if your server supports non-standard sorting methods
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @param null|array $queryParams
     * @param null|bool $parseResponseHeaders
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     */
    public function read(VersionResourceTypeEnum $resourceType,
                         string|FHIRId|FHIRIdPrimitive $resourceID,
                         null|string|SortDirectionEnum $sort = null,
                         null|SerializeFormatEnum $format = null,
                         null|array $queryParams = null,
                         null|bool $parseResponseHeaders = null): Response
    {

        $path = "/{$resourceType->value}";
        $resourceID = trim((string)$resourceID);
        if ('' === $resourceID) {
            throw new \InvalidArgumentException('Resource ID must be null or valued.');
        }
        $path .= "/{$resourceID}";
        $req = new Request(
            method: HTTPMethodEnum::GET,
            path: $path,
            format: $format,
            sort: $sort,
            acceptVersion: $this->_version->getFHIRVersion(),
            queryParams: $queryParams,
            parseResponseHeaders: $parseResponseHeaders,
        );
        return $this->_client->exec($req);
    }


    /**
     * Read one AdverseReaction resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRAdverseReaction
     * @throws \Exception
     */
    public function readOneAdverseReaction(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIRAdverseReaction
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ADVERSE_REACTION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRAdverseReaction::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRAdverseReaction::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Alert resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRAlert
     * @throws \Exception
     */
    public function readOneAlert(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|SerializeFormatEnum $format = null): FHIRAlert
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ALERT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRAlert::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRAlert::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one AllergyIntolerance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRAllergyIntolerance
     * @throws \Exception
     */
    public function readOneAllergyIntolerance(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIRAllergyIntolerance
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ALLERGY_INTOLERANCE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRAllergyIntolerance::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRAllergyIntolerance::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Binary resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRBinary
     * @throws \Exception
     */
    public function readOneBinary(string|FHIRId|FHIRIdPrimitive $resourceID,
                                  null|SerializeFormatEnum $format = null): FHIRBinary
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::BINARY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRBinary::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRBinary::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one CarePlan resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRCarePlan
     * @throws \Exception
     */
    public function readOneCarePlan(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRCarePlan
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CARE_PLAN,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCarePlan::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCarePlan::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Composition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRComposition
     * @throws \Exception
     */
    public function readOneComposition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|SerializeFormatEnum $format = null): FHIRComposition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::COMPOSITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRComposition::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRComposition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ConceptMap resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRConceptMap
     * @throws \Exception
     */
    public function readOneConceptMap(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRConceptMap
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CONCEPT_MAP,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRConceptMap::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRConceptMap::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Condition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRCondition
     * @throws \Exception
     */
    public function readOneCondition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|SerializeFormatEnum $format = null): FHIRCondition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CONDITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCondition::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCondition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Conformance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRConformance
     * @throws \Exception
     */
    public function readOneConformance(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|SerializeFormatEnum $format = null): FHIRConformance
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CONFORMANCE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRConformance::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRConformance::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Device resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDevice
     * @throws \Exception
     */
    public function readOneDevice(string|FHIRId|FHIRIdPrimitive $resourceID,
                                  null|SerializeFormatEnum $format = null): FHIRDevice
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DEVICE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDevice::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDevice::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DeviceObservationReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDeviceObservationReport
     * @throws \Exception
     */
    public function readOneDeviceObservationReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                   null|SerializeFormatEnum $format = null): FHIRDeviceObservationReport
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DEVICE_OBSERVATION_REPORT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDeviceObservationReport::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDeviceObservationReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DiagnosticOrder resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDiagnosticOrder
     * @throws \Exception
     */
    public function readOneDiagnosticOrder(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIRDiagnosticOrder
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DIAGNOSTIC_ORDER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDiagnosticOrder::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDiagnosticOrder::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DiagnosticReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDiagnosticReport
     * @throws \Exception
     */
    public function readOneDiagnosticReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIRDiagnosticReport
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DIAGNOSTIC_REPORT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDiagnosticReport::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDiagnosticReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DocumentManifest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDocumentManifest
     * @throws \Exception
     */
    public function readOneDocumentManifest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIRDocumentManifest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DOCUMENT_MANIFEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDocumentManifest::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDocumentManifest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DocumentReference resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDocumentReference
     * @throws \Exception
     */
    public function readOneDocumentReference(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|SerializeFormatEnum $format = null): FHIRDocumentReference
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DOCUMENT_REFERENCE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDocumentReference::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDocumentReference::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Encounter resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIREncounter
     * @throws \Exception
     */
    public function readOneEncounter(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|SerializeFormatEnum $format = null): FHIREncounter
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ENCOUNTER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREncounter::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREncounter::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one FamilyHistory resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRFamilyHistory
     * @throws \Exception
     */
    public function readOneFamilyHistory(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRFamilyHistory
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::FAMILY_HISTORY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRFamilyHistory::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRFamilyHistory::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Group resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRGroup
     * @throws \Exception
     */
    public function readOneGroup(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|SerializeFormatEnum $format = null): FHIRGroup
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::GROUP,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRGroup::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRGroup::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ImagingStudy resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRImagingStudy
     * @throws \Exception
     */
    public function readOneImagingStudy(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRImagingStudy
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::IMAGING_STUDY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRImagingStudy::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRImagingStudy::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Immunization resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRImmunization
     * @throws \Exception
     */
    public function readOneImmunization(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRImmunization
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::IMMUNIZATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRImmunization::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRImmunization::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ImmunizationRecommendation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRImmunizationRecommendation
     * @throws \Exception
     */
    public function readOneImmunizationRecommendation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|SerializeFormatEnum $format = null): FHIRImmunizationRecommendation
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::IMMUNIZATION_RECOMMENDATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRImmunizationRecommendation::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRImmunizationRecommendation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one List resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRList
     * @throws \Exception
     */
    public function readOneList(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|SerializeFormatEnum $format = null): FHIRList
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::LIST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRList::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRList::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Location resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRLocation
     * @throws \Exception
     */
    public function readOneLocation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRLocation
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::LOCATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRLocation::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRLocation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Media resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedia
     * @throws \Exception
     */
    public function readOneMedia(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|SerializeFormatEnum $format = null): FHIRMedia
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEDIA,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMedia::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMedia::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Medication resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedication
     * @throws \Exception
     */
    public function readOneMedication(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRMedication
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEDICATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMedication::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMedication::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MedicationAdministration resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedicationAdministration
     * @throws \Exception
     */
    public function readOneMedicationAdministration(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                    null|SerializeFormatEnum $format = null): FHIRMedicationAdministration
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEDICATION_ADMINISTRATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMedicationAdministration::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMedicationAdministration::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MedicationDispense resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedicationDispense
     * @throws \Exception
     */
    public function readOneMedicationDispense(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIRMedicationDispense
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEDICATION_DISPENSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMedicationDispense::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMedicationDispense::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MedicationPrescription resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedicationPrescription
     * @throws \Exception
     */
    public function readOneMedicationPrescription(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                  null|SerializeFormatEnum $format = null): FHIRMedicationPrescription
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEDICATION_PRESCRIPTION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMedicationPrescription::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMedicationPrescription::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MedicationStatement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedicationStatement
     * @throws \Exception
     */
    public function readOneMedicationStatement(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIRMedicationStatement
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEDICATION_STATEMENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMedicationStatement::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMedicationStatement::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MessageHeader resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMessageHeader
     * @throws \Exception
     */
    public function readOneMessageHeader(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRMessageHeader
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MESSAGE_HEADER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMessageHeader::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMessageHeader::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Observation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRObservation
     * @throws \Exception
     */
    public function readOneObservation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|SerializeFormatEnum $format = null): FHIRObservation
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::OBSERVATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRObservation::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRObservation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one OperationOutcome resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROperationOutcome
     * @throws \Exception
     */
    public function readOneOperationOutcome(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIROperationOutcome
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::OPERATION_OUTCOME,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIROperationOutcome::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIROperationOutcome::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Order resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROrder
     * @throws \Exception
     */
    public function readOneOrder(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|SerializeFormatEnum $format = null): FHIROrder
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ORDER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIROrder::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIROrder::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one OrderResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROrderResponse
     * @throws \Exception
     */
    public function readOneOrderResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIROrderResponse
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ORDER_RESPONSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIROrderResponse::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIROrderResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Organization resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROrganization
     * @throws \Exception
     */
    public function readOneOrganization(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIROrganization
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ORGANIZATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIROrganization::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIROrganization::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Other resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROther
     * @throws \Exception
     */
    public function readOneOther(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|SerializeFormatEnum $format = null): FHIROther
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::OTHER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIROther::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIROther::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Patient resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRPatient
     * @throws \Exception
     */
    public function readOnePatient(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|SerializeFormatEnum $format = null): FHIRPatient
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PATIENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRPatient::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRPatient::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Practitioner resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRPractitioner
     * @throws \Exception
     */
    public function readOnePractitioner(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRPractitioner
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PRACTITIONER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRPractitioner::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRPractitioner::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Procedure resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRProcedure
     * @throws \Exception
     */
    public function readOneProcedure(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|SerializeFormatEnum $format = null): FHIRProcedure
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PROCEDURE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRProcedure::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRProcedure::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Profile resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRProfile
     * @throws \Exception
     */
    public function readOneProfile(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|SerializeFormatEnum $format = null): FHIRProfile
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PROFILE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRProfile::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRProfile::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Provenance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRProvenance
     * @throws \Exception
     */
    public function readOneProvenance(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRProvenance
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PROVENANCE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRProvenance::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRProvenance::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Query resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRQuery
     * @throws \Exception
     */
    public function readOneQuery(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|SerializeFormatEnum $format = null): FHIRQuery
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::QUERY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRQuery::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRQuery::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Questionnaire resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRQuestionnaire
     * @throws \Exception
     */
    public function readOneQuestionnaire(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRQuestionnaire
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::QUESTIONNAIRE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRQuestionnaire::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRQuestionnaire::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one RelatedPerson resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRRelatedPerson
     * @throws \Exception
     */
    public function readOneRelatedPerson(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRRelatedPerson
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::RELATED_PERSON,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRRelatedPerson::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRRelatedPerson::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SecurityEvent resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRSecurityEvent
     * @throws \Exception
     */
    public function readOneSecurityEvent(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRSecurityEvent
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SECURITY_EVENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSecurityEvent::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSecurityEvent::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Specimen resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRSpecimen
     * @throws \Exception
     */
    public function readOneSpecimen(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRSpecimen
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SPECIMEN,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSpecimen::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSpecimen::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Substance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRSubstance
     * @throws \Exception
     */
    public function readOneSubstance(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|SerializeFormatEnum $format = null): FHIRSubstance
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUBSTANCE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSubstance::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSubstance::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Supply resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRSupply
     * @throws \Exception
     */
    public function readOneSupply(string|FHIRId|FHIRIdPrimitive $resourceID,
                                  null|SerializeFormatEnum $format = null): FHIRSupply
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUPPLY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSupply::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSupply::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ValueSet resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRValueSet
     * @throws \Exception
     */
    public function readOneValueSet(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRValueSet
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::VALUE_SET,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRValueSet::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRValueSet::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    protected function _requireOK(Response $rc): void
    {
        if (isset($rc->err)) {
            throw new ClientErrorException($rc);
        }
        if (!isset($rc->code) || self::_STATUS_OK !== $rc->code) {
            throw new UnexpectedResponseCodeException($rc, self::_STATUS_OK);
        }
    }

    protected function _parseResponse(VersionResourceTypeEnum $resourceType,
                                     Response $rc): VersionResourceTypeInterface
    {
        /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionResourceTypeInterface $class */
        $class = $this->_version->getTypeMap()::getTypeClassname($resourceType->name);
        return match ($rc->getResponseFormat()) {
            SerializeFormatEnum::JSON => $class::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => $class::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            null => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    protected function _mustGetResourceID(VersionResourceTypeInterface $resource): string
    {
        $id = $resource->getId()?->_getValueAsString();
        if (null === $id || '' === $id) {
            throw new \DomainException(sprintf(
                'Cannot update resource of type "%s" as its ID is undefined or empty',
                $resource->_getFHIRTypeName(),
            ));
        }
        return $id;
    }
}
