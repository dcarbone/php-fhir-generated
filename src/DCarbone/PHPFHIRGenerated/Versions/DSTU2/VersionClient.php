<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
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
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRBinary;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAccount;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAppointment;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAuditEvent;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRBasic;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRBodySite;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCarePlan;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClaim;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClaimResponse;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClinicalImpression;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCommunication;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRComposition;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRConceptMap;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCondition;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRConformance;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRContract;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCoverage;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDataElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDetectedIssue;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDevice;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDeviceComponent;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDeviceMetric;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDiagnosticOrder;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDocumentManifest;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDocumentReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREligibilityRequest;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREligibilityResponse;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREncounter;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRFlag;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRGoal;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRGroup;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRHealthcareService;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImagingObjectSelection;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImagingStudy;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImmunization;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImplementationGuide;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRLocation;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedia;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedication;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationDispense;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationOrder;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationStatement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMessageHeader;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRNamingSystem;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRObservation;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROperationDefinition;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROperationOutcome;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROrder;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROrderResponse;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROrganization;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPatient;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPaymentNotice;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPerson;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPractitioner;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProcedure;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProcedureRequest;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProcessRequest;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProcessResponse;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProvenance;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRQuestionnaire;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRReferralRequest;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRRelatedPerson;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRRiskAssessment;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSchedule;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSearchParameter;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSlot;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSpecimen;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRStructureDefinition;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSubscription;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSubstance;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSupplyRequest;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRTestScript;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRValueSet;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRVisionPrescription;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRParameters;

class VersionClient
{
    private const _STATUS_OK = 200;

    protected ClientInterface $_client;
    protected Version $_version;

    /**
     * VersionClient Constructor
     *
     * @param \DCarbone\PHPFHIRGenerated\Client\ClientInterface $client
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version $version
     */
    public function __construct(ClientInterface $client, Version $version)
    {
        $this->_client = $client;
        $this->_version = $version;
    }

    /**
     * Queries for one or more resources of a given type, returning the raw response fromm the server.
     *
     * @see https://www.hl7.org/fhir/http.html#read
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionTypesEnum $resourceType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|int $count
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum $sort May be a string value if your server supports non-standard sorting methods
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @param null|array $queryParams
     * @param null|bool $parseResponseHeaders
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     * @throws \Exception
     */
    public function readRaw(VersionTypesEnum $resourceType,
                            null|string|FHIRId|FHIRIdPrimitive $resourceID = null,
                            null|int $count = null,
                            null|string|SortDirectionEnum $sort = null,
                            null|ResponseFormatEnum $format = null,
                            null|array $queryParams = null,
                            null|bool $parseResponseHeaders = null): Response
    {

        $path = "/{$resourceType->value}";
        if (null !== $resourceID) {
            $resourceID = trim((string)$resourceID);
            if ('' === $resourceID) {
                throw new \InvalidArgumentException('Resource ID must be null or valued.');
            }
            $path .= "/{$resourceID}";
        }
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
     * Queries for one or more resources of a given type, returning the unserialized response from the server.
     *
     * @see https://www.hl7.org/fhir/http.html#read
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionTypesEnum $resourceType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|int $count
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum $sort May be a string value if your server supports non-standard sorting methods
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @param null|array $queryParams
     * @param null|bool $parseResponseHeaders
     * @return null|\DCarbone\PHPFHIRGenerated\Types\TypeInterface
     * @throws \Exception
     */
    public function read(VersionTypesEnum $resourceType,
                         null|string|FHIRId|FHIRIdPrimitive $resourceID = null,
                         null|int $count = null,
                         null|string|SortDirectionEnum $sort = null,
                         null|ResponseFormatEnum $format = null,
                         null|array $queryParams = null,
                         null|bool $parseResponseHeaders = null): null|TypeInterface
    {
        $rc = $this->readRaw($resourceType, $resourceID, $count, $sort, $format, $queryParams, $parseResponseHeaders);
        $this->_requireOK($rc);
        return ResourceParser::parse($this->_version, $rc->resp);
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
     * Read one Account resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAccount
     * @throws \Exception
     */
    public function readOneAccount(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|ResponseFormatEnum $format = null): FHIRAccount
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ACCOUNT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAccount::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAccount::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one AllergyIntolerance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
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
     * Read one Appointment resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAppointment
     * @throws \Exception
     */
    public function readOneAppointment(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|ResponseFormatEnum $format = null): FHIRAppointment
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::APPOINTMENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAppointment::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAppointment::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one AppointmentResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse
     * @throws \Exception
     */
    public function readOneAppointmentResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|ResponseFormatEnum $format = null): FHIRAppointmentResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::APPOINTMENT_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAppointmentResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAppointmentResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one AuditEvent resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     * @throws \Exception
     */
    public function readOneAuditEvent(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|ResponseFormatEnum $format = null): FHIRAuditEvent
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::AUDIT_EVENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAuditEvent::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAuditEvent::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Basic resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRBasic
     * @throws \Exception
     */
    public function readOneBasic(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|ResponseFormatEnum $format = null): FHIRBasic
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::BASIC,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRBasic::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRBasic::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Binary resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRBinary
     * @throws \Exception
     */
    public function readOneBinary(string|FHIRId|FHIRIdPrimitive $resourceID,
                                  null|ResponseFormatEnum $format = null): FHIRBinary
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::BINARY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRBinary::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRBinary::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one BodySite resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRBodySite
     * @throws \Exception
     */
    public function readOneBodySite(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|ResponseFormatEnum $format = null): FHIRBodySite
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::BODY_SITE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRBodySite::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRBodySite::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CarePlan resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCarePlan
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
     * Read one Claim resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClaim
     * @throws \Exception
     */
    public function readOneClaim(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|ResponseFormatEnum $format = null): FHIRClaim
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CLAIM,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRClaim::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRClaim::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ClaimResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     * @throws \Exception
     */
    public function readOneClaimResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRClaimResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CLAIM_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRClaimResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRClaimResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ClinicalImpression resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
     * @throws \Exception
     */
    public function readOneClinicalImpression(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|ResponseFormatEnum $format = null): FHIRClinicalImpression
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CLINICAL_IMPRESSION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRClinicalImpression::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRClinicalImpression::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Communication resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCommunication
     * @throws \Exception
     */
    public function readOneCommunication(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRCommunication
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::COMMUNICATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCommunication::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCommunication::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CommunicationRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest
     * @throws \Exception
     */
    public function readOneCommunicationRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|ResponseFormatEnum $format = null): FHIRCommunicationRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::COMMUNICATION_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCommunicationRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCommunicationRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Composition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRComposition
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRConceptMap
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCondition
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRConformance
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
     * Read one Contract resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRContract
     * @throws \Exception
     */
    public function readOneContract(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|ResponseFormatEnum $format = null): FHIRContract
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CONTRACT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRContract::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRContract::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Coverage resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCoverage
     * @throws \Exception
     */
    public function readOneCoverage(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|ResponseFormatEnum $format = null): FHIRCoverage
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::COVERAGE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCoverage::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCoverage::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DataElement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDataElement
     * @throws \Exception
     */
    public function readOneDataElement(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|ResponseFormatEnum $format = null): FHIRDataElement
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DATA_ELEMENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDataElement::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDataElement::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DetectedIssue resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     * @throws \Exception
     */
    public function readOneDetectedIssue(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRDetectedIssue
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DETECTED_ISSUE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDetectedIssue::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDetectedIssue::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Device resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * Read one DeviceComponent resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     * @throws \Exception
     */
    public function readOneDeviceComponent(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|ResponseFormatEnum $format = null): FHIRDeviceComponent
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE_COMPONENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDeviceComponent::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDeviceComponent::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DeviceMetric resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     * @throws \Exception
     */
    public function readOneDeviceMetric(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|ResponseFormatEnum $format = null): FHIRDeviceMetric
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE_METRIC,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDeviceMetric::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDeviceMetric::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DeviceUseRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     * @throws \Exception
     */
    public function readOneDeviceUseRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|ResponseFormatEnum $format = null): FHIRDeviceUseRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE_USE_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDeviceUseRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDeviceUseRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DeviceUseStatement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement
     * @throws \Exception
     */
    public function readOneDeviceUseStatement(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|ResponseFormatEnum $format = null): FHIRDeviceUseStatement
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE_USE_STATEMENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDeviceUseStatement::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDeviceUseStatement::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DiagnosticOrder resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDiagnosticOrder
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDocumentReference
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
     * Read one EligibilityRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREligibilityRequest
     * @throws \Exception
     */
    public function readOneEligibilityRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|ResponseFormatEnum $format = null): FHIREligibilityRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ELIGIBILITY_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREligibilityRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREligibilityRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one EligibilityResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     * @throws \Exception
     */
    public function readOneEligibilityResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|ResponseFormatEnum $format = null): FHIREligibilityResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ELIGIBILITY_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREligibilityResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREligibilityResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Encounter resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREncounter
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
     * Read one EnrollmentRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest
     * @throws \Exception
     */
    public function readOneEnrollmentRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|ResponseFormatEnum $format = null): FHIREnrollmentRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ENROLLMENT_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREnrollmentRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREnrollmentRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one EnrollmentResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse
     * @throws \Exception
     */
    public function readOneEnrollmentResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|ResponseFormatEnum $format = null): FHIREnrollmentResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ENROLLMENT_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREnrollmentResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREnrollmentResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one EpisodeOfCare resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     * @throws \Exception
     */
    public function readOneEpisodeOfCare(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIREpisodeOfCare
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::EPISODE_OF_CARE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREpisodeOfCare::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREpisodeOfCare::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ExplanationOfBenefit resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     * @throws \Exception
     */
    public function readOneExplanationOfBenefit(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|ResponseFormatEnum $format = null): FHIRExplanationOfBenefit
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::EXPLANATION_OF_BENEFIT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRExplanationOfBenefit::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRExplanationOfBenefit::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one FamilyMemberHistory resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     * @throws \Exception
     */
    public function readOneFamilyMemberHistory(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|ResponseFormatEnum $format = null): FHIRFamilyMemberHistory
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::FAMILY_MEMBER_HISTORY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRFamilyMemberHistory::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRFamilyMemberHistory::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Flag resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRFlag
     * @throws \Exception
     */
    public function readOneFlag(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|ResponseFormatEnum $format = null): FHIRFlag
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::FLAG,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRFlag::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRFlag::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Goal resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRGoal
     * @throws \Exception
     */
    public function readOneGoal(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|ResponseFormatEnum $format = null): FHIRGoal
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::GOAL,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRGoal::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRGoal::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Group resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRGroup
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
     * Read one HealthcareService resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     * @throws \Exception
     */
    public function readOneHealthcareService(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|ResponseFormatEnum $format = null): FHIRHealthcareService
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::HEALTHCARE_SERVICE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRHealthcareService::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRHealthcareService::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ImagingObjectSelection resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImagingObjectSelection
     * @throws \Exception
     */
    public function readOneImagingObjectSelection(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                  null|ResponseFormatEnum $format = null): FHIRImagingObjectSelection
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::IMAGING_OBJECT_SELECTION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRImagingObjectSelection::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRImagingObjectSelection::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ImagingStudy resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImagingStudy
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation
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
     * Read one ImplementationGuide resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     * @throws \Exception
     */
    public function readOneImplementationGuide(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|ResponseFormatEnum $format = null): FHIRImplementationGuide
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::IMPLEMENTATION_GUIDE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRImplementationGuide::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRImplementationGuide::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one List resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRList
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRLocation
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedia
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedication
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
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
     * Read one MedicationOrder resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationOrder
     * @throws \Exception
     */
    public function readOneMedicationOrder(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|ResponseFormatEnum $format = null): FHIRMedicationOrder
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICATION_ORDER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicationOrder::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicationOrder::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicationStatement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationStatement
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMessageHeader
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
     * Read one NamingSystem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRNamingSystem
     * @throws \Exception
     */
    public function readOneNamingSystem(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|ResponseFormatEnum $format = null): FHIRNamingSystem
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::NAMING_SYSTEM,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRNamingSystem::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRNamingSystem::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one NutritionOrder resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     * @throws \Exception
     */
    public function readOneNutritionOrder(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|ResponseFormatEnum $format = null): FHIRNutritionOrder
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::NUTRITION_ORDER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRNutritionOrder::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRNutritionOrder::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Observation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRObservation
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
     * Read one OperationDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROperationDefinition
     * @throws \Exception
     */
    public function readOneOperationDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|ResponseFormatEnum $format = null): FHIROperationDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::OPERATION_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIROperationDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIROperationDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one OperationOutcome resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROperationOutcome
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROrder
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROrderResponse
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROrganization
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
     * Read one Parameters resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRParameters
     * @throws \Exception
     */
    public function readOneParameters(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|ResponseFormatEnum $format = null): FHIRParameters
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PARAMETERS,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRParameters::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRParameters::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Patient resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPatient
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
     * Read one PaymentNotice resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPaymentNotice
     * @throws \Exception
     */
    public function readOnePaymentNotice(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRPaymentNotice
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PAYMENT_NOTICE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPaymentNotice::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPaymentNotice::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one PaymentReconciliation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation
     * @throws \Exception
     */
    public function readOnePaymentReconciliation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|ResponseFormatEnum $format = null): FHIRPaymentReconciliation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PAYMENT_RECONCILIATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPaymentReconciliation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPaymentReconciliation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Person resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPerson
     * @throws \Exception
     */
    public function readOnePerson(string|FHIRId|FHIRIdPrimitive $resourceID,
                                  null|ResponseFormatEnum $format = null): FHIRPerson
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PERSON,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPerson::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPerson::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Practitioner resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPractitioner
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProcedure
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
     * Read one ProcedureRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProcedureRequest
     * @throws \Exception
     */
    public function readOneProcedureRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|ResponseFormatEnum $format = null): FHIRProcedureRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PROCEDURE_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRProcedureRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRProcedureRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ProcessRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProcessRequest
     * @throws \Exception
     */
    public function readOneProcessRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|ResponseFormatEnum $format = null): FHIRProcessRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PROCESS_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRProcessRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRProcessRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ProcessResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     * @throws \Exception
     */
    public function readOneProcessResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|ResponseFormatEnum $format = null): FHIRProcessResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PROCESS_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRProcessResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRProcessResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Provenance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProvenance
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
     * Read one Questionnaire resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRQuestionnaire
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
     * Read one QuestionnaireResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse
     * @throws \Exception
     */
    public function readOneQuestionnaireResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|ResponseFormatEnum $format = null): FHIRQuestionnaireResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::QUESTIONNAIRE_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRQuestionnaireResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRQuestionnaireResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ReferralRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRReferralRequest
     * @throws \Exception
     */
    public function readOneReferralRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|ResponseFormatEnum $format = null): FHIRReferralRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::REFERRAL_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRReferralRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRReferralRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one RelatedPerson resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRRelatedPerson
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
     * Read one RiskAssessment resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRRiskAssessment
     * @throws \Exception
     */
    public function readOneRiskAssessment(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|ResponseFormatEnum $format = null): FHIRRiskAssessment
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::RISK_ASSESSMENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRRiskAssessment::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRRiskAssessment::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Schedule resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSchedule
     * @throws \Exception
     */
    public function readOneSchedule(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|ResponseFormatEnum $format = null): FHIRSchedule
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SCHEDULE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSchedule::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSchedule::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SearchParameter resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSearchParameter
     * @throws \Exception
     */
    public function readOneSearchParameter(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|ResponseFormatEnum $format = null): FHIRSearchParameter
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SEARCH_PARAMETER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSearchParameter::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSearchParameter::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Slot resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSlot
     * @throws \Exception
     */
    public function readOneSlot(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|ResponseFormatEnum $format = null): FHIRSlot
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SLOT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSlot::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSlot::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Specimen resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSpecimen
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
     * Read one StructureDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRStructureDefinition
     * @throws \Exception
     */
    public function readOneStructureDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|ResponseFormatEnum $format = null): FHIRStructureDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::STRUCTURE_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRStructureDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRStructureDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Subscription resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSubscription
     * @throws \Exception
     */
    public function readOneSubscription(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|ResponseFormatEnum $format = null): FHIRSubscription
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSCRIPTION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubscription::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubscription::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Substance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSubstance
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
     * Read one SupplyDelivery resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery
     * @throws \Exception
     */
    public function readOneSupplyDelivery(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|ResponseFormatEnum $format = null): FHIRSupplyDelivery
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUPPLY_DELIVERY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSupplyDelivery::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSupplyDelivery::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SupplyRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSupplyRequest
     * @throws \Exception
     */
    public function readOneSupplyRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRSupplyRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUPPLY_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSupplyRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSupplyRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one TestScript resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRTestScript
     * @throws \Exception
     */
    public function readOneTestScript(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|ResponseFormatEnum $format = null): FHIRTestScript
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::TEST_SCRIPT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRTestScript::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRTestScript::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ValueSet resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRValueSet
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

    /**
     * Read one VisionPrescription resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRVisionPrescription
     * @throws \Exception
     */
    public function readOneVisionPrescription(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|ResponseFormatEnum $format = null): FHIRVisionPrescription
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::VISION_PRESCRIPTION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRVisionPrescription::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRVisionPrescription::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

}
