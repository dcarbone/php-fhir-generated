<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 00:19+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRBinary;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAccount;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRActivityDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAdverseEvent;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAppointment;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAuditEvent;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRBasic;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRBodyStructure;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCarePlan;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCareTeam;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCatalogEntry;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRChargeItem;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRClaim;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRClaimResponse;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRClinicalImpression;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCodeSystem;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCommunication;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRComposition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRConceptMap;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCondition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRConsent;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRContract;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCoverage;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityResponse;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDetectedIssue;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDevice;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDeviceMetric;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDeviceRequest;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDocumentManifest;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDocumentReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREffectEvidenceSynthesis;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREncounter;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREndpoint;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREventDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREvidence;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREvidenceVariable;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRExampleScenario;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRFlag;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRGoal;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRGraphDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRGroup;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRHealthcareService;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRImagingStudy;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRImmunization;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRImmunizationEvaluation;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRImplementationGuide;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRInsurancePlan;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRInvoice;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRLibrary;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRLinkage;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRLocation;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMeasure;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMeasureReport;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedia;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedication;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicationDispense;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicationRequest;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicationStatement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductContraindication;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIngredient;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductInteraction;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductManufactured;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPackaged;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPharmaceutical;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMessageDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMessageHeader;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMolecularSequence;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRNamingSystem;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRObservation;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRObservationDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIROperationDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIROperationOutcome;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIROrganization;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIROrganizationAffiliation;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPatient;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPaymentNotice;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPerson;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPlanDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPractitioner;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPractitionerRole;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRProcedure;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRProvenance;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRQuestionnaire;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRRelatedPerson;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRRequestGroup;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRResearchDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRResearchElementDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRResearchStudy;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRResearchSubject;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRRiskAssessment;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRRiskEvidenceSynthesis;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSchedule;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSearchParameter;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRServiceRequest;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSlot;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSpecimen;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRStructureDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRStructureMap;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubscription;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstance;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSupplyRequest;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRTask;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRTerminologyCapabilities;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRTestReport;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRTestScript;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRValueSet;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRVerificationResult;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRVisionPrescription;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRParameters;

class VersionClient
{
    private const _STATUS_OK = 200;

    protected ClientInterface $_client;
    protected Version $_version;

    /**
     * VersionClient Constructor
     *
     * @param \DCarbone\PHPFHIRGenerated\Client\ClientInterface $client
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Version $version
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypesEnum $resourceType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypesEnum $resourceType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAccount
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
     * Read one ActivityDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRActivityDefinition
     * @throws \Exception
     */
    public function readOneActivityDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|ResponseFormatEnum $format = null): FHIRActivityDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ACTIVITY_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRActivityDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRActivityDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one AdverseEvent resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     * @throws \Exception
     */
    public function readOneAdverseEvent(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|ResponseFormatEnum $format = null): FHIRAdverseEvent
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ADVERSE_EVENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRAdverseEvent::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRAdverseEvent::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one AllergyIntolerance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAppointment
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAuditEvent
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRBasic
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRBinary
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
     * Read one BiologicallyDerivedProduct resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct
     * @throws \Exception
     */
    public function readOneBiologicallyDerivedProduct(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|ResponseFormatEnum $format = null): FHIRBiologicallyDerivedProduct
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::BIOLOGICALLY_DERIVED_PRODUCT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRBiologicallyDerivedProduct::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRBiologicallyDerivedProduct::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one BodyStructure resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRBodyStructure
     * @throws \Exception
     */
    public function readOneBodyStructure(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRBodyStructure
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::BODY_STRUCTURE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRBodyStructure::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRBodyStructure::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CapabilityStatement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement
     * @throws \Exception
     */
    public function readOneCapabilityStatement(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|ResponseFormatEnum $format = null): FHIRCapabilityStatement
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CAPABILITY_STATEMENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCapabilityStatement::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCapabilityStatement::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CarePlan resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCarePlan
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
     * Read one CareTeam resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCareTeam
     * @throws \Exception
     */
    public function readOneCareTeam(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|ResponseFormatEnum $format = null): FHIRCareTeam
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CARE_TEAM,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCareTeam::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCareTeam::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CatalogEntry resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCatalogEntry
     * @throws \Exception
     */
    public function readOneCatalogEntry(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|ResponseFormatEnum $format = null): FHIRCatalogEntry
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CATALOG_ENTRY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCatalogEntry::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCatalogEntry::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ChargeItem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRChargeItem
     * @throws \Exception
     */
    public function readOneChargeItem(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|ResponseFormatEnum $format = null): FHIRChargeItem
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CHARGE_ITEM,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRChargeItem::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRChargeItem::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ChargeItemDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
     * @throws \Exception
     */
    public function readOneChargeItemDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|ResponseFormatEnum $format = null): FHIRChargeItemDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CHARGE_ITEM_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRChargeItemDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRChargeItemDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Claim resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRClaim
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
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
     * Read one CodeSystem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCodeSystem
     * @throws \Exception
     */
    public function readOneCodeSystem(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|ResponseFormatEnum $format = null): FHIRCodeSystem
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CODE_SYSTEM,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCodeSystem::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCodeSystem::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Communication resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCommunication
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest
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
     * Read one CompartmentDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition
     * @throws \Exception
     */
    public function readOneCompartmentDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|ResponseFormatEnum $format = null): FHIRCompartmentDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::COMPARTMENT_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCompartmentDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCompartmentDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Composition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRComposition
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRConceptMap
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCondition
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
     * Read one Consent resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRConsent
     * @throws \Exception
     */
    public function readOneConsent(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|ResponseFormatEnum $format = null): FHIRConsent
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::CONSENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRConsent::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRConsent::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Contract resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRContract
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCoverage
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
     * Read one CoverageEligibilityRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest
     * @throws \Exception
     */
    public function readOneCoverageEligibilityRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|ResponseFormatEnum $format = null): FHIRCoverageEligibilityRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::COVERAGE_ELIGIBILITY_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCoverageEligibilityRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCoverageEligibilityRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one CoverageEligibilityResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityResponse
     * @throws \Exception
     */
    public function readOneCoverageEligibilityResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                       null|ResponseFormatEnum $format = null): FHIRCoverageEligibilityResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::COVERAGE_ELIGIBILITY_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRCoverageEligibilityResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRCoverageEligibilityResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DetectedIssue resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDevice
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
     * Read one DeviceDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition
     * @throws \Exception
     */
    public function readOneDeviceDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|ResponseFormatEnum $format = null): FHIRDeviceDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDeviceDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDeviceDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DeviceMetric resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
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
     * Read one DeviceRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDeviceRequest
     * @throws \Exception
     */
    public function readOneDeviceRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRDeviceRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::DEVICE_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRDeviceRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRDeviceRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one DeviceUseStatement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement
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
     * Read one DiagnosticReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRDocumentReference
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
     * Read one EffectEvidenceSynthesis resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREffectEvidenceSynthesis
     * @throws \Exception
     */
    public function readOneEffectEvidenceSynthesis(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                   null|ResponseFormatEnum $format = null): FHIREffectEvidenceSynthesis
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::EFFECT_EVIDENCE_SYNTHESIS,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREffectEvidenceSynthesis::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREffectEvidenceSynthesis::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Encounter resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREncounter
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
     * Read one Endpoint resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREndpoint
     * @throws \Exception
     */
    public function readOneEndpoint(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|ResponseFormatEnum $format = null): FHIREndpoint
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ENDPOINT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREndpoint::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREndpoint::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one EnrollmentRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
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
     * Read one EventDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREventDefinition
     * @throws \Exception
     */
    public function readOneEventDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|ResponseFormatEnum $format = null): FHIREventDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::EVENT_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREventDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREventDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Evidence resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREvidence
     * @throws \Exception
     */
    public function readOneEvidence(string|FHIRId|FHIRIdPrimitive $resourceID,
                                    null|ResponseFormatEnum $format = null): FHIREvidence
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::EVIDENCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREvidence::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREvidence::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one EvidenceVariable resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIREvidenceVariable
     * @throws \Exception
     */
    public function readOneEvidenceVariable(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|ResponseFormatEnum $format = null): FHIREvidenceVariable
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::EVIDENCE_VARIABLE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIREvidenceVariable::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIREvidenceVariable::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ExampleScenario resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRExampleScenario
     * @throws \Exception
     */
    public function readOneExampleScenario(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|ResponseFormatEnum $format = null): FHIRExampleScenario
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::EXAMPLE_SCENARIO,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRExampleScenario::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRExampleScenario::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ExplanationOfBenefit resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRFlag
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRGoal
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
     * Read one GraphDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRGraphDefinition
     * @throws \Exception
     */
    public function readOneGraphDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|ResponseFormatEnum $format = null): FHIRGraphDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::GRAPH_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRGraphDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRGraphDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Group resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRGroup
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
     * Read one GuidanceResponse resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse
     * @throws \Exception
     */
    public function readOneGuidanceResponse(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|ResponseFormatEnum $format = null): FHIRGuidanceResponse
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::GUIDANCE_RESPONSE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRGuidanceResponse::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRGuidanceResponse::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one HealthcareService resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRHealthcareService
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
     * Read one ImagingStudy resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRImagingStudy
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRImmunization
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
     * Read one ImmunizationEvaluation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRImmunizationEvaluation
     * @throws \Exception
     */
    public function readOneImmunizationEvaluation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                  null|ResponseFormatEnum $format = null): FHIRImmunizationEvaluation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::IMMUNIZATION_EVALUATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRImmunizationEvaluation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRImmunizationEvaluation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ImmunizationRecommendation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * Read one InsurancePlan resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRInsurancePlan
     * @throws \Exception
     */
    public function readOneInsurancePlan(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRInsurancePlan
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::INSURANCE_PLAN,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRInsurancePlan::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRInsurancePlan::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Invoice resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRInvoice
     * @throws \Exception
     */
    public function readOneInvoice(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|ResponseFormatEnum $format = null): FHIRInvoice
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::INVOICE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRInvoice::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRInvoice::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Library resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRLibrary
     * @throws \Exception
     */
    public function readOneLibrary(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|ResponseFormatEnum $format = null): FHIRLibrary
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::LIBRARY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRLibrary::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRLibrary::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Linkage resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRLinkage
     * @throws \Exception
     */
    public function readOneLinkage(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|ResponseFormatEnum $format = null): FHIRLinkage
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::LINKAGE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRLinkage::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRLinkage::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one List resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRList
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRLocation
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
     * Read one Measure resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMeasure
     * @throws \Exception
     */
    public function readOneMeasure(string|FHIRId|FHIRIdPrimitive $resourceID,
                                   null|ResponseFormatEnum $format = null): FHIRMeasure
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEASURE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMeasure::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMeasure::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MeasureReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMeasureReport
     * @throws \Exception
     */
    public function readOneMeasureReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRMeasureReport
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEASURE_REPORT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMeasureReport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMeasureReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Media resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedia
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedication
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicationDispense
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
     * Read one MedicationKnowledge resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge
     * @throws \Exception
     */
    public function readOneMedicationKnowledge(string|FHIRId|FHIRIdPrimitive $resourceID,
                                               null|ResponseFormatEnum $format = null): FHIRMedicationKnowledge
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICATION_KNOWLEDGE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicationKnowledge::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicationKnowledge::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicationRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicationRequest
     * @throws \Exception
     */
    public function readOneMedicationRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|ResponseFormatEnum $format = null): FHIRMedicationRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICATION_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicationRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicationRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicationStatement resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicationStatement
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
     * Read one MedicinalProduct resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct
     * @throws \Exception
     */
    public function readOneMedicinalProduct(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|ResponseFormatEnum $format = null): FHIRMedicinalProduct
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICINAL_PRODUCT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicinalProduct::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicinalProduct::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicinalProductAuthorization resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization
     * @throws \Exception
     */
    public function readOneMedicinalProductAuthorization(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                         null|ResponseFormatEnum $format = null): FHIRMedicinalProductAuthorization
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICINAL_PRODUCT_AUTHORIZATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicinalProductAuthorization::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicinalProductAuthorization::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicinalProductContraindication resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductContraindication
     * @throws \Exception
     */
    public function readOneMedicinalProductContraindication(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                            null|ResponseFormatEnum $format = null): FHIRMedicinalProductContraindication
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICINAL_PRODUCT_CONTRAINDICATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicinalProductContraindication::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicinalProductContraindication::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicinalProductIndication resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication
     * @throws \Exception
     */
    public function readOneMedicinalProductIndication(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|ResponseFormatEnum $format = null): FHIRMedicinalProductIndication
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICINAL_PRODUCT_INDICATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicinalProductIndication::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicinalProductIndication::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicinalProductIngredient resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIngredient
     * @throws \Exception
     */
    public function readOneMedicinalProductIngredient(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                      null|ResponseFormatEnum $format = null): FHIRMedicinalProductIngredient
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICINAL_PRODUCT_INGREDIENT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicinalProductIngredient::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicinalProductIngredient::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicinalProductInteraction resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductInteraction
     * @throws \Exception
     */
    public function readOneMedicinalProductInteraction(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                       null|ResponseFormatEnum $format = null): FHIRMedicinalProductInteraction
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICINAL_PRODUCT_INTERACTION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicinalProductInteraction::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicinalProductInteraction::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicinalProductManufactured resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductManufactured
     * @throws \Exception
     */
    public function readOneMedicinalProductManufactured(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                        null|ResponseFormatEnum $format = null): FHIRMedicinalProductManufactured
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICINAL_PRODUCT_MANUFACTURED,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicinalProductManufactured::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicinalProductManufactured::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicinalProductPackaged resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPackaged
     * @throws \Exception
     */
    public function readOneMedicinalProductPackaged(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                    null|ResponseFormatEnum $format = null): FHIRMedicinalProductPackaged
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICINAL_PRODUCT_PACKAGED,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicinalProductPackaged::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicinalProductPackaged::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicinalProductPharmaceutical resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPharmaceutical
     * @throws \Exception
     */
    public function readOneMedicinalProductPharmaceutical(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                          null|ResponseFormatEnum $format = null): FHIRMedicinalProductPharmaceutical
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICINAL_PRODUCT_PHARMACEUTICAL,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicinalProductPharmaceutical::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicinalProductPharmaceutical::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MedicinalProductUndesirableEffect resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect
     * @throws \Exception
     */
    public function readOneMedicinalProductUndesirableEffect(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                             null|ResponseFormatEnum $format = null): FHIRMedicinalProductUndesirableEffect
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MEDICINAL_PRODUCT_UNDESIRABLE_EFFECT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMedicinalProductUndesirableEffect::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMedicinalProductUndesirableEffect::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MessageDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMessageDefinition
     * @throws \Exception
     */
    public function readOneMessageDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|ResponseFormatEnum $format = null): FHIRMessageDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MESSAGE_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMessageDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMessageDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one MessageHeader resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMessageHeader
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
     * Read one MolecularSequence resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMolecularSequence
     * @throws \Exception
     */
    public function readOneMolecularSequence(string|FHIRId|FHIRIdPrimitive $resourceID,
                                             null|ResponseFormatEnum $format = null): FHIRMolecularSequence
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::MOLECULAR_SEQUENCE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRMolecularSequence::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRMolecularSequence::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one NamingSystem resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRNamingSystem
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRObservation
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
     * Read one ObservationDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRObservationDefinition
     * @throws \Exception
     */
    public function readOneObservationDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|ResponseFormatEnum $format = null): FHIRObservationDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::OBSERVATION_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRObservationDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRObservationDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one OperationDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIROperationDefinition
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIROperationOutcome
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
     * Read one Organization resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIROrganization
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
     * Read one OrganizationAffiliation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIROrganizationAffiliation
     * @throws \Exception
     */
    public function readOneOrganizationAffiliation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                   null|ResponseFormatEnum $format = null): FHIROrganizationAffiliation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::ORGANIZATION_AFFILIATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIROrganizationAffiliation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIROrganizationAffiliation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Parameters resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRParameters
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPatient
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPaymentNotice
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPerson
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
     * Read one PlanDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPlanDefinition
     * @throws \Exception
     */
    public function readOnePlanDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|ResponseFormatEnum $format = null): FHIRPlanDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PLAN_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPlanDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPlanDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Practitioner resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPractitioner
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
     * Read one PractitionerRole resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPractitionerRole
     * @throws \Exception
     */
    public function readOnePractitionerRole(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|ResponseFormatEnum $format = null): FHIRPractitionerRole
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::PRACTITIONER_ROLE,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRPractitionerRole::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRPractitionerRole::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Procedure resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRProcedure
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
     * Read one Provenance resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRProvenance
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRQuestionnaire
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse
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
     * Read one RelatedPerson resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRRelatedPerson
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
     * Read one RequestGroup resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRRequestGroup
     * @throws \Exception
     */
    public function readOneRequestGroup(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|ResponseFormatEnum $format = null): FHIRRequestGroup
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::REQUEST_GROUP,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRRequestGroup::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRRequestGroup::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ResearchDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRResearchDefinition
     * @throws \Exception
     */
    public function readOneResearchDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|ResponseFormatEnum $format = null): FHIRResearchDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::RESEARCH_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRResearchDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRResearchDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ResearchElementDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRResearchElementDefinition
     * @throws \Exception
     */
    public function readOneResearchElementDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                     null|ResponseFormatEnum $format = null): FHIRResearchElementDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::RESEARCH_ELEMENT_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRResearchElementDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRResearchElementDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ResearchStudy resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRResearchStudy
     * @throws \Exception
     */
    public function readOneResearchStudy(string|FHIRId|FHIRIdPrimitive $resourceID,
                                         null|ResponseFormatEnum $format = null): FHIRResearchStudy
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::RESEARCH_STUDY,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRResearchStudy::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRResearchStudy::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one ResearchSubject resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     * @throws \Exception
     */
    public function readOneResearchSubject(string|FHIRId|FHIRIdPrimitive $resourceID,
                                           null|ResponseFormatEnum $format = null): FHIRResearchSubject
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::RESEARCH_SUBJECT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRResearchSubject::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRResearchSubject::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one RiskAssessment resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRRiskAssessment
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
     * Read one RiskEvidenceSynthesis resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRRiskEvidenceSynthesis
     * @throws \Exception
     */
    public function readOneRiskEvidenceSynthesis(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                 null|ResponseFormatEnum $format = null): FHIRRiskEvidenceSynthesis
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::RISK_EVIDENCE_SYNTHESIS,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRRiskEvidenceSynthesis::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRRiskEvidenceSynthesis::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Schedule resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSchedule
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSearchParameter
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
     * Read one ServiceRequest resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRServiceRequest
     * @throws \Exception
     */
    public function readOneServiceRequest(string|FHIRId|FHIRIdPrimitive $resourceID,
                                          null|ResponseFormatEnum $format = null): FHIRServiceRequest
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SERVICE_REQUEST,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRServiceRequest::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRServiceRequest::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Slot resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSlot
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSpecimen
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
     * Read one SpecimenDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition
     * @throws \Exception
     */
    public function readOneSpecimenDefinition(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|ResponseFormatEnum $format = null): FHIRSpecimenDefinition
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SPECIMEN_DEFINITION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSpecimenDefinition::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSpecimenDefinition::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one StructureDefinition resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRStructureDefinition
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
     * Read one StructureMap resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRStructureMap
     * @throws \Exception
     */
    public function readOneStructureMap(string|FHIRId|FHIRIdPrimitive $resourceID,
                                        null|ResponseFormatEnum $format = null): FHIRStructureMap
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::STRUCTURE_MAP,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRStructureMap::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRStructureMap::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one Subscription resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubscription
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstance
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
     * Read one SubstanceNucleicAcid resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid
     * @throws \Exception
     */
    public function readOneSubstanceNucleicAcid(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                null|ResponseFormatEnum $format = null): FHIRSubstanceNucleicAcid
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSTANCE_NUCLEIC_ACID,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubstanceNucleicAcid::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubstanceNucleicAcid::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SubstancePolymer resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
     * @throws \Exception
     */
    public function readOneSubstancePolymer(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|ResponseFormatEnum $format = null): FHIRSubstancePolymer
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSTANCE_POLYMER,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubstancePolymer::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubstancePolymer::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SubstanceProtein resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein
     * @throws \Exception
     */
    public function readOneSubstanceProtein(string|FHIRId|FHIRIdPrimitive $resourceID,
                                            null|ResponseFormatEnum $format = null): FHIRSubstanceProtein
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSTANCE_PROTEIN,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubstanceProtein::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubstanceProtein::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SubstanceReferenceInformation resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation
     * @throws \Exception
     */
    public function readOneSubstanceReferenceInformation(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                         null|ResponseFormatEnum $format = null): FHIRSubstanceReferenceInformation
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSTANCE_REFERENCE_INFORMATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubstanceReferenceInformation::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubstanceReferenceInformation::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SubstanceSourceMaterial resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial
     * @throws \Exception
     */
    public function readOneSubstanceSourceMaterial(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                   null|ResponseFormatEnum $format = null): FHIRSubstanceSourceMaterial
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSTANCE_SOURCE_MATERIAL,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubstanceSourceMaterial::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubstanceSourceMaterial::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SubstanceSpecification resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification
     * @throws \Exception
     */
    public function readOneSubstanceSpecification(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                  null|ResponseFormatEnum $format = null): FHIRSubstanceSpecification
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::SUBSTANCE_SPECIFICATION,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRSubstanceSpecification::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRSubstanceSpecification::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one SupplyDelivery resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSupplyRequest
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
     * Read one Task resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRTask
     * @throws \Exception
     */
    public function readOneTask(string|FHIRId|FHIRIdPrimitive $resourceID,
                                null|ResponseFormatEnum $format = null): FHIRTask
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::TASK,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRTask::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRTask::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one TerminologyCapabilities resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRTerminologyCapabilities
     * @throws \Exception
     */
    public function readOneTerminologyCapabilities(string|FHIRId|FHIRIdPrimitive $resourceID,
                                                   null|ResponseFormatEnum $format = null): FHIRTerminologyCapabilities
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::TERMINOLOGY_CAPABILITIES,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRTerminologyCapabilities::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRTerminologyCapabilities::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one TestReport resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRTestReport
     * @throws \Exception
     */
    public function readOneTestReport(string|FHIRId|FHIRIdPrimitive $resourceID,
                                      null|ResponseFormatEnum $format = null): FHIRTestReport
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::TEST_REPORT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRTestReport::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRTestReport::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one TestScript resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRTestScript
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRValueSet
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
     * Read one VerificationResult resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     * @throws \Exception
     */
    public function readOneVerificationResult(string|FHIRId|FHIRIdPrimitive $resourceID,
                                              null|ResponseFormatEnum $format = null): FHIRVerificationResult
    {
        $rc = $this->readRaw(resourceType: VersionTypesEnum::VERIFICATION_RESULT,
                             resourceID: $resourceID,
                             format: $format);
        $this->_requireOK($rc);
        return match($format) {
            ResponseFormatEnum::JSON => FHIRVerificationResult::jsonUnserialize(
                json: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            ResponseFormatEnum::XML => FHIRVerificationResult::xmlUnserialize(
                element: $rc->resp,
                config: $this->_version->getConfig()->getUnserializeConfig(),
            ),
            default => ResourceParser::parse($this->_version, $rc->resp),
        };
    }

    /**
     * Read one VisionPrescription resource.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive $resourceID
     * @param null|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRVisionPrescription
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
