<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 20th, 2025 13:35+0000
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
use DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum;
use DCarbone\PHPFHIRGenerated\Client\UnexpectedResponseCodeException;
use DCarbone\PHPFHIRGenerated\Encoding\ResourceParser;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum;
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionResourceTypeEnum $resourceType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|int $count
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum $sort May be a string value if your server supports non-standard sorting methods
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @param null|array $queryParams
     * @param null|bool $parseResponseHeaders
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     */
    public function read(VersionResourceTypeEnum $resourceType,
                         null|string|FHIRId|FHIRIdPrimitive $resourceID = null,
                         null|int $count = null,
                         null|string|SortDirectionEnum $sort = null,
                         null|SerializeFormatEnum $format = null,
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
            count: $count,
            format: $format,
            sort: $sort,
            acceptVersion: $this->_version->getFHIRVersion(),
            queryParams: $queryParams,
            parseResponseHeaders: $parseResponseHeaders,
        );
        return $this->_client->exec($req);
    }

    /**
     * Create a resource.
     *
     * @see https://www.hl7.org/fhir/http.html#create
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionResourceTypeInterface $resource The resource to update, must have a defined ID.
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @param null|array $queryParams Any additional query params to send as part of this request
     * @param null|bool $parseResponseHeaders
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     */
    public function create(VersionResourceTypeInterface $resource,
                           null|SerializeFormatEnum $format = null,
                           null|array $queryParams = null,
                           null|bool $parseResponseHeaders = null): Response
    {
        $req = new Request(
            method: HTTPMethodEnum::POST,
            path: "/{$resource->_getFHIRTypeName()}",
            format: $format,
            acceptVersion: $resource->_getFHIRVersion(),
            resource: $resource,
            resourceSerializeConfig: $this->_version->getConfig()->getSerializeConfig(),
            queryParams: $queryParams,
            parseResponseHeaders: $parseResponseHeaders,
        );
        return $this->_client->exec($req);
    }

    /**
     * Update or create a specific resource.
     *
     * @see https://www.hl7.org/fhir/http.html#update
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionResourceTypeInterface $resource The resource to update, must have a defined ID.
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @param null|array $queryParams Any additional query params to send as part of this request
     * @param null|bool $parseResponseHeaders
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     */
    public function update(VersionResourceTypeInterface $resource,
                           null|SerializeFormatEnum $format = null,
                           null|array $queryParams = null,
                           null|bool $parseResponseHeaders = null): Response
    {
        $req = new Request(
            method: HTTPMethodEnum::PUT,
            path: "/{$resource->_getFHIRTypeName()}/{$this->_mustGetResourceID($resource)}",
            format: $format,
            acceptVersion: $resource->_getFHIRVersion(),
            resource: $resource,
            resourceSerializeConfig: $this->_version->getConfig()->getSerializeConfig(),
            queryParams: $queryParams,
            parseResponseHeaders: $parseResponseHeaders,
        );
        return $this->_client->exec($req);
    }

    /**
     * Perform a partial update on a resource.
     *
     * @see https://www.hl7.org/fhir/http.html#patch
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionResourceTypeInterface $resource The resource to update, must have a defined ID.
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @param null|array $queryParams Any additional query params to send as part of this request
     * @param null|bool $parseResponseHeaders
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     */
    public function patch(VersionResourceTypeInterface $resource,
                           null|SerializeFormatEnum $format = null,
                           null|array $queryParams = null,
                           null|bool $parseResponseHeaders = null): Response
    {
        $req = new Request(
            method: HTTPMethodEnum::PATCH,
            path: "/{$resource->_getFHIRTypeName()}/{$this->_mustGetResourceID($resource)}",
            format: $format,
            acceptVersion: $resource->_getFHIRVersion(),
            resource: $resource,
            resourceSerializeConfig: $this->_version->getConfig()->getSerializeConfig(),
            queryParams: $queryParams,
            parseResponseHeaders: $parseResponseHeaders,
        );
        return $this->_client->exec($req);
    }

    /**
     * Delete a resource by ID.
     *
     * @see https://www.hl7.org/fhir/http.html#delete
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionResourceTypeEnum $resourceType
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID ID of resource to delete.
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     */
    public function delete(VersionResourceTypeEnum $resourceType,
                           string|FHIRId|FHIRIdPrimitive $resourceID): Response
    {
        $req = new Request(
            method: HTTPMethodEnum::DELETE,
            path: "{$resourceType->value}/{$resourceID}",
        );
        return $this->_client->exec($req);
    }

    /**
     * Delete a specific resource.
     *
     * @see https://www.hl7.org/fhir/http.html#delete
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionResourceTypeInterface $resource Specific resource to delete.
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     */
    public function deleteResource(VersionResourceTypeInterface $resource): Response
    {
        $req = new Request(
            method: HTTPMethodEnum::DELETE,
            path: "/{$resource->_getFHIRTypeName()}/{$this->_mustGetResourceID($resource)}",
        );
        return $this->_client->exec($req);
    }

    /**
     * Read one Account resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAccount
     * @throws \Exception
     */
    public function readOneAccount(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|SerializeFormatEnum $format = null): FHIRAccount
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ACCOUNT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRAccount::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRAccount::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one AllergyIntolerance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
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
     * Read one Appointment resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAppointment
     * @throws \Exception
     */
    public function readOneAppointment(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|SerializeFormatEnum $format = null): FHIRAppointment
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::APPOINTMENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRAppointment::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRAppointment::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one AppointmentResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse
     * @throws \Exception
     */
    public function readOneAppointmentResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIRAppointmentResponse
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::APPOINTMENT_RESPONSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRAppointmentResponse::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRAppointmentResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one AuditEvent resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     * @throws \Exception
     */
    public function readOneAuditEvent(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRAuditEvent
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::AUDIT_EVENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRAuditEvent::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRAuditEvent::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Basic resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRBasic
     * @throws \Exception
     */
    public function readOneBasic(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|SerializeFormatEnum $format = null): FHIRBasic
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::BASIC,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRBasic::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRBasic::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Binary resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRBinary
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
     * Read one BodySite resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRBodySite
     * @throws \Exception
     */
    public function readOneBodySite(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRBodySite
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::BODY_SITE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRBodySite::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRBodySite::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one CarePlan resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCarePlan
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
     * Read one Claim resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClaim
     * @throws \Exception
     */
    public function readOneClaim(string|FHIRId|FHIRIdPrimitive $resourceID,
                                 null|SerializeFormatEnum $format = null): FHIRClaim
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CLAIM,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRClaim::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRClaim::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ClaimResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     * @throws \Exception
     */
    public function readOneClaimResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRClaimResponse
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CLAIM_RESPONSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRClaimResponse::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRClaimResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ClinicalImpression resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
     * @throws \Exception
     */
    public function readOneClinicalImpression(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIRClinicalImpression
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CLINICAL_IMPRESSION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRClinicalImpression::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRClinicalImpression::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Communication resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCommunication
     * @throws \Exception
     */
    public function readOneCommunication(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRCommunication
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::COMMUNICATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCommunication::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCommunication::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one CommunicationRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest
     * @throws \Exception
     */
    public function readOneCommunicationRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|SerializeFormatEnum $format = null): FHIRCommunicationRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::COMMUNICATION_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCommunicationRequest::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCommunicationRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Composition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRComposition
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRConceptMap
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCondition
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRConformance
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
     * Read one Contract resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRContract
     * @throws \Exception
     */
    public function readOneContract(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRContract
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::CONTRACT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRContract::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRContract::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Coverage resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCoverage
     * @throws \Exception
     */
    public function readOneCoverage(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRCoverage
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::COVERAGE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRCoverage::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRCoverage::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DataElement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDataElement
     * @throws \Exception
     */
    public function readOneDataElement(string|FHIRId|FHIRIdPrimitive $resourceID,
                                       null|SerializeFormatEnum $format = null): FHIRDataElement
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DATA_ELEMENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDataElement::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDataElement::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DetectedIssue resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     * @throws \Exception
     */
    public function readOneDetectedIssue(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRDetectedIssue
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DETECTED_ISSUE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDetectedIssue::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDetectedIssue::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Device resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * Read one DeviceComponent resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDeviceComponent
     * @throws \Exception
     */
    public function readOneDeviceComponent(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIRDeviceComponent
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DEVICE_COMPONENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDeviceComponent::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDeviceComponent::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DeviceMetric resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     * @throws \Exception
     */
    public function readOneDeviceMetric(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRDeviceMetric
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DEVICE_METRIC,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDeviceMetric::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDeviceMetric::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DeviceUseRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     * @throws \Exception
     */
    public function readOneDeviceUseRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIRDeviceUseRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DEVICE_USE_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDeviceUseRequest::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDeviceUseRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DeviceUseStatement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement
     * @throws \Exception
     */
    public function readOneDeviceUseStatement(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIRDeviceUseStatement
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::DEVICE_USE_STATEMENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRDeviceUseStatement::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRDeviceUseStatement::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one DiagnosticOrder resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDiagnosticOrder
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRDocumentReference
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
     * Read one EligibilityRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREligibilityRequest
     * @throws \Exception
     */
    public function readOneEligibilityRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIREligibilityRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ELIGIBILITY_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREligibilityRequest::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREligibilityRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one EligibilityResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     * @throws \Exception
     */
    public function readOneEligibilityResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIREligibilityResponse
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ELIGIBILITY_RESPONSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREligibilityResponse::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREligibilityResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Encounter resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREncounter
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
     * Read one EnrollmentRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest
     * @throws \Exception
     */
    public function readOneEnrollmentRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|SerializeFormatEnum $format = null): FHIREnrollmentRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ENROLLMENT_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREnrollmentRequest::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREnrollmentRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one EnrollmentResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse
     * @throws \Exception
     */
    public function readOneEnrollmentResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIREnrollmentResponse
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::ENROLLMENT_RESPONSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREnrollmentResponse::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREnrollmentResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one EpisodeOfCare resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     * @throws \Exception
     */
    public function readOneEpisodeOfCare(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIREpisodeOfCare
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::EPISODE_OF_CARE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIREpisodeOfCare::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIREpisodeOfCare::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ExplanationOfBenefit resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     * @throws \Exception
     */
    public function readOneExplanationOfBenefit(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|SerializeFormatEnum $format = null): FHIRExplanationOfBenefit
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::EXPLANATION_OF_BENEFIT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRExplanationOfBenefit::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRExplanationOfBenefit::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one FamilyMemberHistory resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     * @throws \Exception
     */
    public function readOneFamilyMemberHistory(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIRFamilyMemberHistory
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::FAMILY_MEMBER_HISTORY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRFamilyMemberHistory::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRFamilyMemberHistory::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Flag resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRFlag
     * @throws \Exception
     */
    public function readOneFlag(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|SerializeFormatEnum $format = null): FHIRFlag
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::FLAG,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRFlag::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRFlag::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Goal resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRGoal
     * @throws \Exception
     */
    public function readOneGoal(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|SerializeFormatEnum $format = null): FHIRGoal
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::GOAL,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRGoal::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRGoal::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Group resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRGroup
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
     * Read one HealthcareService resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     * @throws \Exception
     */
    public function readOneHealthcareService(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|SerializeFormatEnum $format = null): FHIRHealthcareService
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::HEALTHCARE_SERVICE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRHealthcareService::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRHealthcareService::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ImagingObjectSelection resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImagingObjectSelection
     * @throws \Exception
     */
    public function readOneImagingObjectSelection(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                  null|SerializeFormatEnum $format = null): FHIRImagingObjectSelection
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::IMAGING_OBJECT_SELECTION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRImagingObjectSelection::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRImagingObjectSelection::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ImagingStudy resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImagingStudy
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation
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
     * Read one ImplementationGuide resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     * @throws \Exception
     */
    public function readOneImplementationGuide(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIRImplementationGuide
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::IMPLEMENTATION_GUIDE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRImplementationGuide::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRImplementationGuide::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one List resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRList
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRLocation
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedia
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedication
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
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
     * Read one MedicationOrder resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationOrder
     * @throws \Exception
     */
    public function readOneMedicationOrder(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIRMedicationOrder
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::MEDICATION_ORDER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRMedicationOrder::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRMedicationOrder::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one MedicationStatement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationStatement
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMessageHeader
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
     * Read one NamingSystem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRNamingSystem
     * @throws \Exception
     */
    public function readOneNamingSystem(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRNamingSystem
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::NAMING_SYSTEM,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRNamingSystem::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRNamingSystem::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one NutritionOrder resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     * @throws \Exception
     */
    public function readOneNutritionOrder(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|SerializeFormatEnum $format = null): FHIRNutritionOrder
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::NUTRITION_ORDER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRNutritionOrder::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRNutritionOrder::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Observation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRObservation
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
     * Read one OperationDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROperationDefinition
     * @throws \Exception
     */
    public function readOneOperationDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIROperationDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::OPERATION_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIROperationDefinition::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIROperationDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one OperationOutcome resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROperationOutcome
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROrder
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROrderResponse
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIROrganization
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
     * Read one Parameters resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRParameters
     * @throws \Exception
     */
    public function readOneParameters(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRParameters
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PARAMETERS,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRParameters::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRParameters::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Patient resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPatient
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
     * Read one PaymentNotice resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPaymentNotice
     * @throws \Exception
     */
    public function readOnePaymentNotice(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRPaymentNotice
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PAYMENT_NOTICE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRPaymentNotice::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRPaymentNotice::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one PaymentReconciliation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation
     * @throws \Exception
     */
    public function readOnePaymentReconciliation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|SerializeFormatEnum $format = null): FHIRPaymentReconciliation
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PAYMENT_RECONCILIATION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRPaymentReconciliation::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRPaymentReconciliation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Person resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPerson
     * @throws \Exception
     */
    public function readOnePerson(string|FHIRId|FHIRIdPrimitive $resourceID,
                                  null|SerializeFormatEnum $format = null): FHIRPerson
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PERSON,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRPerson::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRPerson::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Practitioner resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRPractitioner
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProcedure
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
     * Read one ProcedureRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProcedureRequest
     * @throws \Exception
     */
    public function readOneProcedureRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|SerializeFormatEnum $format = null): FHIRProcedureRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PROCEDURE_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRProcedureRequest::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRProcedureRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ProcessRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProcessRequest
     * @throws \Exception
     */
    public function readOneProcessRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|SerializeFormatEnum $format = null): FHIRProcessRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PROCESS_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRProcessRequest::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRProcessRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ProcessResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     * @throws \Exception
     */
    public function readOneProcessResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIRProcessResponse
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::PROCESS_RESPONSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRProcessResponse::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRProcessResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Provenance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRProvenance
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
     * Read one Questionnaire resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRQuestionnaire
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
     * Read one QuestionnaireResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse
     * @throws \Exception
     */
    public function readOneQuestionnaireResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|SerializeFormatEnum $format = null): FHIRQuestionnaireResponse
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::QUESTIONNAIRE_RESPONSE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRQuestionnaireResponse::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRQuestionnaireResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ReferralRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRReferralRequest
     * @throws \Exception
     */
    public function readOneReferralRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIRReferralRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::REFERRAL_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRReferralRequest::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRReferralRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one RelatedPerson resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRRelatedPerson
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
     * Read one RiskAssessment resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRRiskAssessment
     * @throws \Exception
     */
    public function readOneRiskAssessment(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|SerializeFormatEnum $format = null): FHIRRiskAssessment
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::RISK_ASSESSMENT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRRiskAssessment::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRRiskAssessment::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Schedule resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSchedule
     * @throws \Exception
     */
    public function readOneSchedule(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|SerializeFormatEnum $format = null): FHIRSchedule
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SCHEDULE,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSchedule::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSchedule::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SearchParameter resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSearchParameter
     * @throws \Exception
     */
    public function readOneSearchParameter(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|SerializeFormatEnum $format = null): FHIRSearchParameter
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SEARCH_PARAMETER,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSearchParameter::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSearchParameter::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Slot resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSlot
     * @throws \Exception
     */
    public function readOneSlot(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|SerializeFormatEnum $format = null): FHIRSlot
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SLOT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSlot::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSlot::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Specimen resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSpecimen
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
     * Read one StructureDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRStructureDefinition
     * @throws \Exception
     */
    public function readOneStructureDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|SerializeFormatEnum $format = null): FHIRStructureDefinition
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::STRUCTURE_DEFINITION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRStructureDefinition::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRStructureDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Subscription resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSubscription
     * @throws \Exception
     */
    public function readOneSubscription(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|SerializeFormatEnum $format = null): FHIRSubscription
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUBSCRIPTION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSubscription::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSubscription::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one Substance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSubstance
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
     * Read one SupplyDelivery resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery
     * @throws \Exception
     */
    public function readOneSupplyDelivery(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|SerializeFormatEnum $format = null): FHIRSupplyDelivery
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUPPLY_DELIVERY,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSupplyDelivery::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSupplyDelivery::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one SupplyRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRSupplyRequest
     * @throws \Exception
     */
    public function readOneSupplyRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|SerializeFormatEnum $format = null): FHIRSupplyRequest
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::SUPPLY_REQUEST,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRSupplyRequest::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRSupplyRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one TestScript resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRTestScript
     * @throws \Exception
     */
    public function readOneTestScript(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|SerializeFormatEnum $format = null): FHIRTestScript
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::TEST_SCRIPT,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRTestScript::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRTestScript::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
        };
    }

    /**
     * Read one ValueSet resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRValueSet
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

    /**
     * Read one VisionPrescription resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRVisionPrescription
     * @throws \Exception
     */
    public function readOneVisionPrescription(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|SerializeFormatEnum $format = null): FHIRVisionPrescription
    {
        $rc = $this->read(resourceType: VersionResourceTypeEnum::VISION_PRESCRIPTION,
                          resourceID: $resourceID,
                          format: $format);
        $this->_requireOK($rc);
        return match($format) {
            SerializeFormatEnum::JSON => FHIRVisionPrescription::jsonUnserialize(
                decoded: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            SerializeFormatEnum::XML => FHIRVisionPrescription::xmlUnserialize(
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
        /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionResourceTypeInterface $class */
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
