<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 04:06+0000
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
use DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum;
use DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum;
use DCarbone\PHPFHIRGenerated\Client\UnexpectedResponseCodeException;
use DCarbone\PHPFHIRGenerated\Encoding\ResourceParser;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAdverseReaction;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAlert;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRComposition;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConceptMap;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentManifest;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIREncounter;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRFamilyHistory;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunizationRecommendation;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRLocation;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedia;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationAdministration;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationDispense;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationStatement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROperationOutcome;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrder;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrganization;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROther;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPatient;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPractitioner;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProfile;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProvenance;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuestionnaire;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRRelatedPerson;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSecurityEvent;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSubstance;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSupply;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRValueSet;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;

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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypesEnum $resourceType
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|int $count
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum $sort May be a string value if your server supports non-standard sorting methods
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @param null|array $queryParams
     * @param null|bool $parseResponseHeaders
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     * @throws \Exception
     */
    public function readRaw(VersionTypesEnum $resourceType,
                            string|FHIRId|FHIRIdPrimitive $resourceID,
                            null|int $count = null,
                            null|string|SortDirectionEnum $sort = null,
                            null|ResponseFormatEnum $format = null,
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
        );
        if (null !== $count) {
            $req->count = $count;
        }
        if (null !== $sort) {
            $req->sort = is_string($sort) ? $sort : $sort->value;
        }
        if (null !== $format) {
            $req->format = $format->value;
        }
        if (null !== $parseResponseHeaders) {
            $req->parseResponseHeaders = $parseResponseHeaders;
        }
        if (null !== $queryParams) {
            $req->queryParams = $queryParams;
        }
        return $this->_client->exec($req);
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Client\Response $rc
     * @throws \DCarbone\PHPFHIRGenerated\Client\ClientErrorException
     * @throws \DCarbone\PHPFHIRGenerated\Client\UnexpectedResponseCodeException
     */
    protected function _requireOK(Response $rc): void
    {
        if (isset($rc->err)) {
            throw new ClientErrorException($rc);
        }
        if (!isset($rc->code) || self::_STATUS_OK !== $rc->code) {
            throw new UnexpectedResponseCodeException($rc, self::_STATUS_OK);
        }
    }

    /**
     * Read one AdverseReaction resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAdverseReaction
     * @throws \Exception
     */
    public function readOneAdverseReaction(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|ResponseFormatEnum $format = null): FHIRAdverseReaction
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ADVERSE_REACTION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAdverseReaction::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAdverseReaction::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Alert resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAlert
     * @throws \Exception
     */
    public function readOneAlert(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|ResponseFormatEnum $format = null): FHIRAlert
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ALERT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAlert::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAlert::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one AllergyIntolerance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance
     * @throws \Exception
     */
    public function readOneAllergyIntolerance(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|ResponseFormatEnum $format = null): FHIRAllergyIntolerance
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ALLERGY_INTOLERANCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAllergyIntolerance::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAllergyIntolerance::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CarePlan resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
     * @throws \Exception
     */
    public function readOneCarePlan(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|ResponseFormatEnum $format = null): FHIRCarePlan
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CARE_PLAN,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCarePlan::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCarePlan::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Composition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRComposition
     * @throws \Exception
     */
    public function readOneComposition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|ResponseFormatEnum $format = null): FHIRComposition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::COMPOSITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRComposition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRComposition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ConceptMap resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConceptMap
     * @throws \Exception
     */
    public function readOneConceptMap(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|ResponseFormatEnum $format = null): FHIRConceptMap
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CONCEPT_MAP,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRConceptMap::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRConceptMap::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Condition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition
     * @throws \Exception
     */
    public function readOneCondition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|ResponseFormatEnum $format = null): FHIRCondition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CONDITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCondition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCondition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Conformance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance
     * @throws \Exception
     */
    public function readOneConformance(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|ResponseFormatEnum $format = null): FHIRConformance
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CONFORMANCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRConformance::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRConformance::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Device resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
     * @throws \Exception
     */
    public function readOneDevice(string|FHIRId|FHIRIdPrimitive $resourceID,
                                  null|ResponseFormatEnum $format = null): FHIRDevice
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDevice::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDevice::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DeviceObservationReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport
     * @throws \Exception
     */
    public function readOneDeviceObservationReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                   null|ResponseFormatEnum $format = null): FHIRDeviceObservationReport
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE_OBSERVATION_REPORT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDeviceObservationReport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDeviceObservationReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DiagnosticOrder resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder
     * @throws \Exception
     */
    public function readOneDiagnosticOrder(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|ResponseFormatEnum $format = null): FHIRDiagnosticOrder
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DIAGNOSTIC_ORDER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDiagnosticOrder::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDiagnosticOrder::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DiagnosticReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     * @throws \Exception
     */
    public function readOneDiagnosticReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|ResponseFormatEnum $format = null): FHIRDiagnosticReport
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DIAGNOSTIC_REPORT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDiagnosticReport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDiagnosticReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DocumentManifest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentManifest
     * @throws \Exception
     */
    public function readOneDocumentManifest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|ResponseFormatEnum $format = null): FHIRDocumentManifest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DOCUMENT_MANIFEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDocumentManifest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDocumentManifest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DocumentReference resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference
     * @throws \Exception
     */
    public function readOneDocumentReference(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|ResponseFormatEnum $format = null): FHIRDocumentReference
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DOCUMENT_REFERENCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDocumentReference::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDocumentReference::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Encounter resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIREncounter
     * @throws \Exception
     */
    public function readOneEncounter(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|ResponseFormatEnum $format = null): FHIREncounter
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ENCOUNTER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREncounter::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREncounter::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one FamilyHistory resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRFamilyHistory
     * @throws \Exception
     */
    public function readOneFamilyHistory(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRFamilyHistory
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::FAMILY_HISTORY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRFamilyHistory::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRFamilyHistory::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Group resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     * @throws \Exception
     */
    public function readOneGroup(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|ResponseFormatEnum $format = null): FHIRGroup
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::GROUP,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRGroup::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRGroup::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ImagingStudy resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy
     * @throws \Exception
     */
    public function readOneImagingStudy(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|ResponseFormatEnum $format = null): FHIRImagingStudy
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::IMAGING_STUDY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRImagingStudy::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRImagingStudy::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Immunization resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization
     * @throws \Exception
     */
    public function readOneImmunization(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|ResponseFormatEnum $format = null): FHIRImmunization
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::IMMUNIZATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRImmunization::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRImmunization::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ImmunizationRecommendation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunizationRecommendation
     * @throws \Exception
     */
    public function readOneImmunizationRecommendation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|ResponseFormatEnum $format = null): FHIRImmunizationRecommendation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::IMMUNIZATION_RECOMMENDATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRImmunizationRecommendation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRImmunizationRecommendation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one List resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRList
     * @throws \Exception
     */
    public function readOneList(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|ResponseFormatEnum $format = null): FHIRList
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::LIST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRList::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRList::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Location resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRLocation
     * @throws \Exception
     */
    public function readOneLocation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|ResponseFormatEnum $format = null): FHIRLocation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::LOCATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRLocation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRLocation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Media resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedia
     * @throws \Exception
     */
    public function readOneMedia(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|ResponseFormatEnum $format = null): FHIRMedia
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDIA,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedia::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedia::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Medication resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication
     * @throws \Exception
     */
    public function readOneMedication(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|ResponseFormatEnum $format = null): FHIRMedication
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedication::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedication::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicationAdministration resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationAdministration
     * @throws \Exception
     */
    public function readOneMedicationAdministration(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                    null|ResponseFormatEnum $format = null): FHIRMedicationAdministration
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICATION_ADMINISTRATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicationAdministration::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicationAdministration::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicationDispense resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationDispense
     * @throws \Exception
     */
    public function readOneMedicationDispense(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|ResponseFormatEnum $format = null): FHIRMedicationDispense
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICATION_DISPENSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicationDispense::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicationDispense::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicationPrescription resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription
     * @throws \Exception
     */
    public function readOneMedicationPrescription(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                  null|ResponseFormatEnum $format = null): FHIRMedicationPrescription
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICATION_PRESCRIPTION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicationPrescription::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicationPrescription::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicationStatement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationStatement
     * @throws \Exception
     */
    public function readOneMedicationStatement(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|ResponseFormatEnum $format = null): FHIRMedicationStatement
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICATION_STATEMENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicationStatement::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicationStatement::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MessageHeader resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader
     * @throws \Exception
     */
    public function readOneMessageHeader(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRMessageHeader
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MESSAGE_HEADER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMessageHeader::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMessageHeader::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Observation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation
     * @throws \Exception
     */
    public function readOneObservation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|ResponseFormatEnum $format = null): FHIRObservation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::OBSERVATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRObservation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRObservation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one OperationOutcome resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROperationOutcome
     * @throws \Exception
     */
    public function readOneOperationOutcome(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|ResponseFormatEnum $format = null): FHIROperationOutcome
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::OPERATION_OUTCOME,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIROperationOutcome::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIROperationOutcome::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Order resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrder
     * @throws \Exception
     */
    public function readOneOrder(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|ResponseFormatEnum $format = null): FHIROrder
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ORDER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIROrder::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIROrder::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one OrderResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     * @throws \Exception
     */
    public function readOneOrderResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIROrderResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ORDER_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIROrderResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIROrderResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Organization resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrganization
     * @throws \Exception
     */
    public function readOneOrganization(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|ResponseFormatEnum $format = null): FHIROrganization
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ORGANIZATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIROrganization::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIROrganization::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Other resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROther
     * @throws \Exception
     */
    public function readOneOther(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|ResponseFormatEnum $format = null): FHIROther
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::OTHER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIROther::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIROther::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Patient resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPatient
     * @throws \Exception
     */
    public function readOnePatient(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|ResponseFormatEnum $format = null): FHIRPatient
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PATIENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPatient::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPatient::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Practitioner resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPractitioner
     * @throws \Exception
     */
    public function readOnePractitioner(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|ResponseFormatEnum $format = null): FHIRPractitioner
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PRACTITIONER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPractitioner::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPractitioner::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Procedure resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     * @throws \Exception
     */
    public function readOneProcedure(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|ResponseFormatEnum $format = null): FHIRProcedure
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PROCEDURE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRProcedure::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRProcedure::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Profile resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProfile
     * @throws \Exception
     */
    public function readOneProfile(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|ResponseFormatEnum $format = null): FHIRProfile
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PROFILE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRProfile::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRProfile::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Provenance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProvenance
     * @throws \Exception
     */
    public function readOneProvenance(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|ResponseFormatEnum $format = null): FHIRProvenance
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PROVENANCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRProvenance::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRProvenance::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Query resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery
     * @throws \Exception
     */
    public function readOneQuery(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|ResponseFormatEnum $format = null): FHIRQuery
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::QUERY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRQuery::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRQuery::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Questionnaire resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuestionnaire
     * @throws \Exception
     */
    public function readOneQuestionnaire(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRQuestionnaire
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::QUESTIONNAIRE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRQuestionnaire::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRQuestionnaire::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one RelatedPerson resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRRelatedPerson
     * @throws \Exception
     */
    public function readOneRelatedPerson(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRRelatedPerson
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::RELATED_PERSON,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRRelatedPerson::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRRelatedPerson::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SecurityEvent resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSecurityEvent
     * @throws \Exception
     */
    public function readOneSecurityEvent(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRSecurityEvent
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SECURITY_EVENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSecurityEvent::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSecurityEvent::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Specimen resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen
     * @throws \Exception
     */
    public function readOneSpecimen(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|ResponseFormatEnum $format = null): FHIRSpecimen
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SPECIMEN,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSpecimen::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSpecimen::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Substance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSubstance
     * @throws \Exception
     */
    public function readOneSubstance(string|FHIRId|FHIRIdPrimitive $resourceID,
                                     null|ResponseFormatEnum $format = null): FHIRSubstance
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSTANCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubstance::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubstance::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Supply resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSupply
     * @throws \Exception
     */
    public function readOneSupply(string|FHIRId|FHIRIdPrimitive $resourceID,
                                  null|ResponseFormatEnum $format = null): FHIRSupply
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUPPLY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSupply::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSupply::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ValueSet resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRValueSet
     * @throws \Exception
     */
    public function readOneValueSet(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|ResponseFormatEnum $format = null): FHIRValueSet
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::VALUE_SET,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRValueSet::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRValueSet::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

}
