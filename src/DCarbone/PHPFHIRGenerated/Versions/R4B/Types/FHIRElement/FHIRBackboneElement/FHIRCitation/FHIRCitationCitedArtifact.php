<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 */
class FHIRCitationCitedArtifact extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_RELATED_IDENTIFIER = 'relatedIdentifier';
    public const FIELD_DATE_ACCESSED = 'dateAccessed';
    public const FIELD_DATE_ACCESSED_EXT = '_dateAccessed';
    public const FIELD_VERSION = 'version';
    public const FIELD_CURRENT_STATE = 'currentState';
    public const FIELD_STATUS_DATE = 'statusDate';
    public const FIELD_TITLE = 'title';
    public const FIELD_ABSTRACT = 'abstract';
    public const FIELD_PART = 'part';
    public const FIELD_RELATES_TO = 'relatesTo';
    public const FIELD_PUBLICATION_FORM = 'publicationForm';
    public const FIELD_WEB_LOCATION = 'webLocation';
    public const FIELD_CLASSIFICATION = 'classification';
    public const FIELD_CONTRIBUTORSHIP = 'contributorship';
    public const FIELD_NOTE = 'note';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this citation when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify things closely related to this
     * citation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $relatedIdentifier;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the cited artifact was accessed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $dateAccessed;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The defined version of the cited artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationVersion 
     */
    protected FHIRCitationVersion $version;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the cited artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $currentState;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * An effective date or period for a status of the cited artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate1[] 
     */
    protected array $statusDate;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The title details of the article or artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationTitle[] 
     */
    protected array $title;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Summary of the article or artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAbstract[] 
     */
    protected array $abstract;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The component of the article or artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPart 
     */
    protected FHIRCitationPart $part;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The artifact related to the cited artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1[] 
     */
    protected array $relatesTo;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * If multiple, used to represent alternative forms of the article that are not
     * separate citations.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm[] 
     */
    protected array $publicationForm;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Used for any URL for the article or artifact cited.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWebLocation[] 
     */
    protected array $webLocation;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The assignment to an organizing scheme.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification1[] 
     */
    protected array $classification;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * This element is used to list authors and other contributors, their contact
     * information, specific contributions, and summary statements.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributorship 
     */
    protected FHIRCitationContributorship $contributorship;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional information or content for the article or artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation[] 
     */
    protected array $note;

    /** Default validation map for fields in type Citation.CitedArtifact */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRCitationCitedArtifact Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] $relatedIdentifier
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $dateAccessed
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationVersion $version
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $currentState
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate1[] $statusDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationTitle[] $title
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAbstract[] $abstract
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPart $part
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1[] $relatesTo
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm[] $publicationForm
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWebLocation[] $webLocation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification1[] $classification
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributorship $contributorship
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation[] $note
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|iterable $relatedIdentifier = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateAccessed = null,
                                null|FHIRCitationVersion $version = null,
                                null|iterable $currentState = null,
                                null|iterable $statusDate = null,
                                null|iterable $title = null,
                                null|iterable $abstract = null,
                                null|FHIRCitationPart $part = null,
                                null|iterable $relatesTo = null,
                                null|iterable $publicationForm = null,
                                null|iterable $webLocation = null,
                                null|iterable $classification = null,
                                null|FHIRCitationContributorship $contributorship = null,
                                null|iterable $note = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $relatedIdentifier) {
            $this->setRelatedIdentifier(...$relatedIdentifier);
        }
        if (null !== $dateAccessed) {
            $this->setDateAccessed($dateAccessed);
        }
        if (null !== $version) {
            $this->setVersion($version);
        }
        if (null !== $currentState) {
            $this->setCurrentState(...$currentState);
        }
        if (null !== $statusDate) {
            $this->setStatusDate(...$statusDate);
        }
        if (null !== $title) {
            $this->setTitle(...$title);
        }
        if (null !== $abstract) {
            $this->setAbstract(...$abstract);
        }
        if (null !== $part) {
            $this->setPart($part);
        }
        if (null !== $relatesTo) {
            $this->setRelatesTo(...$relatesTo);
        }
        if (null !== $publicationForm) {
            $this->setPublicationForm(...$publicationForm);
        }
        if (null !== $webLocation) {
            $this->setWebLocation(...$webLocation);
        }
        if (null !== $classification) {
            $this->setClassification(...$classification);
        }
        if (null !== $contributorship) {
            $this->setContributorship($contributorship);
        }
        if (null !== $note) {
            $this->setNote(...$note);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this citation when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier) || [] === $this->identifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this citation when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this citation when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify things closely related to this
     * citation.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getRelatedIdentifier(): array
    {
        return $this->relatedIdentifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier>
     */
    public function getRelatedIdentifierIterator(): iterable
    {
        if (!isset($this->relatedIdentifier) || [] === $this->relatedIdentifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relatedIdentifier);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify things closely related to this
     * citation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier $relatedIdentifier
     * @return static
     */
    public function addRelatedIdentifier(FHIRIdentifier $relatedIdentifier): self
    {
        if (!isset($this->relatedIdentifier)) {
            $this->relatedIdentifier = [];
        }
        $this->relatedIdentifier[] = $relatedIdentifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify things closely related to this
     * citation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier ...$relatedIdentifier
     * @return static
     */
    public function setRelatedIdentifier(FHIRIdentifier ...$relatedIdentifier): self
    {
        $this->relatedIdentifier = $relatedIdentifier;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the cited artifact was accessed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime
     */
    public function getDateAccessed(): null|FHIRDateTime
    {
        return $this->dateAccessed ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the cited artifact was accessed.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $dateAccessed
     * @return static
     */
    public function setDateAccessed(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateAccessed): self
    {
        if (null === $dateAccessed) {
            unset($this->dateAccessed);
            return $this;
        }
        if (!($dateAccessed instanceof FHIRDateTime)) {
            $dateAccessed = new FHIRDateTime(value: $dateAccessed);
        }
        $this->dateAccessed = $dateAccessed;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The defined version of the cited artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationVersion
     */
    public function getVersion(): null|FHIRCitationVersion
    {
        return $this->version ?? null;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The defined version of the cited artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationVersion $version
     * @return static
     */
    public function setVersion(null|FHIRCitationVersion $version): self
    {
        if (null === $version) {
            unset($this->version);
            return $this;
        }
        $this->version = $version;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the cited artifact.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCurrentState(): array
    {
        return $this->currentState ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCurrentStateIterator(): iterable
    {
        if (!isset($this->currentState) || [] === $this->currentState) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->currentState);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the cited artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $currentState
     * @return static
     */
    public function addCurrentState(FHIRCodeableConcept $currentState): self
    {
        if (!isset($this->currentState)) {
            $this->currentState = [];
        }
        $this->currentState[] = $currentState;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the cited artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$currentState
     * @return static
     */
    public function setCurrentState(FHIRCodeableConcept ...$currentState): self
    {
        $this->currentState = $currentState;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * An effective date or period for a status of the cited artifact.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate1[]
     */
    public function getStatusDate(): array
    {
        return $this->statusDate ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate1>
     */
    public function getStatusDateIterator(): iterable
    {
        if (!isset($this->statusDate) || [] === $this->statusDate) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->statusDate);
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * An effective date or period for a status of the cited artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate1 $statusDate
     * @return static
     */
    public function addStatusDate(FHIRCitationStatusDate1 $statusDate): self
    {
        if (!isset($this->statusDate)) {
            $this->statusDate = [];
        }
        $this->statusDate[] = $statusDate;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * An effective date or period for a status of the cited artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate1 ...$statusDate
     * @return static
     */
    public function setStatusDate(FHIRCitationStatusDate1 ...$statusDate): self
    {
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The title details of the article or artifact.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationTitle[]
     */
    public function getTitle(): array
    {
        return $this->title ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationTitle>
     */
    public function getTitleIterator(): iterable
    {
        if (!isset($this->title) || [] === $this->title) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->title);
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The title details of the article or artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationTitle $title
     * @return static
     */
    public function addTitle(FHIRCitationTitle $title): self
    {
        if (!isset($this->title)) {
            $this->title = [];
        }
        $this->title[] = $title;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The title details of the article or artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationTitle ...$title
     * @return static
     */
    public function setTitle(FHIRCitationTitle ...$title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Summary of the article or artifact.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAbstract[]
     */
    public function getAbstract(): array
    {
        return $this->abstract ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAbstract>
     */
    public function getAbstractIterator(): iterable
    {
        if (!isset($this->abstract) || [] === $this->abstract) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->abstract);
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Summary of the article or artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAbstract $abstract
     * @return static
     */
    public function addAbstract(FHIRCitationAbstract $abstract): self
    {
        if (!isset($this->abstract)) {
            $this->abstract = [];
        }
        $this->abstract[] = $abstract;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Summary of the article or artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAbstract ...$abstract
     * @return static
     */
    public function setAbstract(FHIRCitationAbstract ...$abstract): self
    {
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The component of the article or artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPart
     */
    public function getPart(): null|FHIRCitationPart
    {
        return $this->part ?? null;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The component of the article or artifact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPart $part
     * @return static
     */
    public function setPart(null|FHIRCitationPart $part): self
    {
        if (null === $part) {
            unset($this->part);
            return $this;
        }
        $this->part = $part;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The artifact related to the cited artifact.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1[]
     */
    public function getRelatesTo(): array
    {
        return $this->relatesTo ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1>
     */
    public function getRelatesToIterator(): iterable
    {
        if (!isset($this->relatesTo) || [] === $this->relatesTo) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relatesTo);
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The artifact related to the cited artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1 $relatesTo
     * @return static
     */
    public function addRelatesTo(FHIRCitationRelatesTo1 $relatesTo): self
    {
        if (!isset($this->relatesTo)) {
            $this->relatesTo = [];
        }
        $this->relatesTo[] = $relatesTo;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The artifact related to the cited artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1 ...$relatesTo
     * @return static
     */
    public function setRelatesTo(FHIRCitationRelatesTo1 ...$relatesTo): self
    {
        $this->relatesTo = $relatesTo;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * If multiple, used to represent alternative forms of the article that are not
     * separate citations.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm[]
     */
    public function getPublicationForm(): array
    {
        return $this->publicationForm ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm>
     */
    public function getPublicationFormIterator(): iterable
    {
        if (!isset($this->publicationForm) || [] === $this->publicationForm) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->publicationForm);
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * If multiple, used to represent alternative forms of the article that are not
     * separate citations.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm $publicationForm
     * @return static
     */
    public function addPublicationForm(FHIRCitationPublicationForm $publicationForm): self
    {
        if (!isset($this->publicationForm)) {
            $this->publicationForm = [];
        }
        $this->publicationForm[] = $publicationForm;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * If multiple, used to represent alternative forms of the article that are not
     * separate citations.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm ...$publicationForm
     * @return static
     */
    public function setPublicationForm(FHIRCitationPublicationForm ...$publicationForm): self
    {
        $this->publicationForm = $publicationForm;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Used for any URL for the article or artifact cited.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWebLocation[]
     */
    public function getWebLocation(): array
    {
        return $this->webLocation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWebLocation>
     */
    public function getWebLocationIterator(): iterable
    {
        if (!isset($this->webLocation) || [] === $this->webLocation) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->webLocation);
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Used for any URL for the article or artifact cited.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWebLocation $webLocation
     * @return static
     */
    public function addWebLocation(FHIRCitationWebLocation $webLocation): self
    {
        if (!isset($this->webLocation)) {
            $this->webLocation = [];
        }
        $this->webLocation[] = $webLocation;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Used for any URL for the article or artifact cited.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWebLocation ...$webLocation
     * @return static
     */
    public function setWebLocation(FHIRCitationWebLocation ...$webLocation): self
    {
        $this->webLocation = $webLocation;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The assignment to an organizing scheme.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification1[]
     */
    public function getClassification(): array
    {
        return $this->classification ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification1>
     */
    public function getClassificationIterator(): iterable
    {
        if (!isset($this->classification) || [] === $this->classification) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->classification);
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The assignment to an organizing scheme.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification1 $classification
     * @return static
     */
    public function addClassification(FHIRCitationClassification1 $classification): self
    {
        if (!isset($this->classification)) {
            $this->classification = [];
        }
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The assignment to an organizing scheme.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification1 ...$classification
     * @return static
     */
    public function setClassification(FHIRCitationClassification1 ...$classification): self
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * This element is used to list authors and other contributors, their contact
     * information, specific contributions, and summary statements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributorship
     */
    public function getContributorship(): null|FHIRCitationContributorship
    {
        return $this->contributorship ?? null;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * This element is used to list authors and other contributors, their contact
     * information, specific contributions, and summary statements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributorship $contributorship
     * @return static
     */
    public function setContributorship(null|FHIRCitationContributorship $contributorship): self
    {
        if (null === $contributorship) {
            unset($this->contributorship);
            return $this;
        }
        $this->contributorship = $contributorship;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional information or content for the article or artifact.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation>
     */
    public function getNoteIterator(): iterable
    {
        if (!isset($this->note) || [] === $this->note) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->note);
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional information or content for the article or artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note): self
    {
        if (!isset($this->note)) {
            $this->note = [];
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional information or content for the article or artifact.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_IDENTIFIER])) {
            $v = $this->getRelatedIdentifier();
            foreach($validationRules[self::FIELD_RELATED_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATED_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_IDENTIFIER])) {
                        $errs[self::FIELD_RELATED_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_RELATED_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_ACCESSED])) {
            $v = $this->getDateAccessed();
            foreach($validationRules[self::FIELD_DATE_ACCESSED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATE_ACCESSED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_ACCESSED])) {
                        $errs[self::FIELD_DATE_ACCESSED] = [];
                    }
                    $errs[self::FIELD_DATE_ACCESSED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CURRENT_STATE])) {
            $v = $this->getCurrentState();
            foreach($validationRules[self::FIELD_CURRENT_STATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CURRENT_STATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CURRENT_STATE])) {
                        $errs[self::FIELD_CURRENT_STATE] = [];
                    }
                    $errs[self::FIELD_CURRENT_STATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_DATE])) {
            $v = $this->getStatusDate();
            foreach($validationRules[self::FIELD_STATUS_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_DATE])) {
                        $errs[self::FIELD_STATUS_DATE] = [];
                    }
                    $errs[self::FIELD_STATUS_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABSTRACT])) {
            $v = $this->getAbstract();
            foreach($validationRules[self::FIELD_ABSTRACT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ABSTRACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABSTRACT])) {
                        $errs[self::FIELD_ABSTRACT] = [];
                    }
                    $errs[self::FIELD_ABSTRACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART])) {
            $v = $this->getPart();
            foreach($validationRules[self::FIELD_PART] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PART, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART])) {
                        $errs[self::FIELD_PART] = [];
                    }
                    $errs[self::FIELD_PART][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATES_TO])) {
            $v = $this->getRelatesTo();
            foreach($validationRules[self::FIELD_RELATES_TO] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATES_TO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATES_TO])) {
                        $errs[self::FIELD_RELATES_TO] = [];
                    }
                    $errs[self::FIELD_RELATES_TO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLICATION_FORM])) {
            $v = $this->getPublicationForm();
            foreach($validationRules[self::FIELD_PUBLICATION_FORM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PUBLICATION_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLICATION_FORM])) {
                        $errs[self::FIELD_PUBLICATION_FORM] = [];
                    }
                    $errs[self::FIELD_PUBLICATION_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WEB_LOCATION])) {
            $v = $this->getWebLocation();
            foreach($validationRules[self::FIELD_WEB_LOCATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WEB_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WEB_LOCATION])) {
                        $errs[self::FIELD_WEB_LOCATION] = [];
                    }
                    $errs[self::FIELD_WEB_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFICATION])) {
            $v = $this->getClassification();
            foreach($validationRules[self::FIELD_CLASSIFICATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFICATION])) {
                        $errs[self::FIELD_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTORSHIP])) {
            $v = $this->getContributorship();
            foreach($validationRules[self::FIELD_CONTRIBUTORSHIP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTRIBUTORSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTORSHIP])) {
                        $errs[self::FIELD_CONTRIBUTORSHIP] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTORSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationCitedArtifact $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationCitedArtifact
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationCitedArtifact)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RELATED_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addRelatedIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE_ACCESSED === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDateAccessed(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VERSION === $childName) {
                $v = new FHIRCitationVersion();
                $type->setVersion(FHIRCitationVersion::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CURRENT_STATE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addCurrentState(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS_DATE === $childName) {
                $v = new FHIRCitationStatusDate1();
                $type->addStatusDate(FHIRCitationStatusDate1::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TITLE === $childName) {
                $v = new FHIRCitationTitle();
                $type->addTitle(FHIRCitationTitle::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ABSTRACT === $childName) {
                $v = new FHIRCitationAbstract();
                $type->addAbstract(FHIRCitationAbstract::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PART === $childName) {
                $v = new FHIRCitationPart();
                $type->setPart(FHIRCitationPart::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RELATES_TO === $childName) {
                $v = new FHIRCitationRelatesTo1();
                $type->addRelatesTo(FHIRCitationRelatesTo1::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PUBLICATION_FORM === $childName) {
                $v = new FHIRCitationPublicationForm();
                $type->addPublicationForm(FHIRCitationPublicationForm::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WEB_LOCATION === $childName) {
                $v = new FHIRCitationWebLocation();
                $type->addWebLocation(FHIRCitationWebLocation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CLASSIFICATION === $childName) {
                $v = new FHIRCitationClassification1();
                $type->addClassification(FHIRCitationClassification1::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTRIBUTORSHIP === $childName) {
                $v = new FHIRCitationContributorship();
                $type->setContributorship(FHIRCitationContributorship::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOTE === $childName) {
                $v = new FHIRAnnotation();
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATE_ACCESSED])) {
            $pt = $type->getDateAccessed();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE_ACCESSED]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDateAccessed(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_DATE_ACCESSED],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('CitationCitedArtifact', $this->_getSourceXMLNS());
        }
        if (isset($this->dateAccessed) && $this->dateAccessed->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE_ACCESSED, $this->dateAccessed->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->relatedIdentifier)) {
            foreach ($this->relatedIdentifier as $v) {
                $xw->startElement(self::FIELD_RELATED_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->dateAccessed) && $this->dateAccessed->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATE_ACCESSED);
            $this->dateAccessed->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->version)) {
            $xw->startElement(self::FIELD_VERSION);
            $this->version->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->currentState)) {
            foreach ($this->currentState as $v) {
                $xw->startElement(self::FIELD_CURRENT_STATE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->statusDate)) {
            foreach ($this->statusDate as $v) {
                $xw->startElement(self::FIELD_STATUS_DATE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->title)) {
            foreach ($this->title as $v) {
                $xw->startElement(self::FIELD_TITLE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->abstract)) {
            foreach ($this->abstract as $v) {
                $xw->startElement(self::FIELD_ABSTRACT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->part)) {
            $xw->startElement(self::FIELD_PART);
            $this->part->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->relatesTo)) {
            foreach ($this->relatesTo as $v) {
                $xw->startElement(self::FIELD_RELATES_TO);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->publicationForm)) {
            foreach ($this->publicationForm as $v) {
                $xw->startElement(self::FIELD_PUBLICATION_FORM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->webLocation)) {
            foreach ($this->webLocation as $v) {
                $xw->startElement(self::FIELD_WEB_LOCATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->classification)) {
            foreach ($this->classification as $v) {
                $xw->startElement(self::FIELD_CLASSIFICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->contributorship)) {
            $xw->startElement(self::FIELD_CONTRIBUTORSHIP);
            $this->contributorship->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationCitedArtifact $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationCitedArtifact
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationCitedArtifact)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            if (is_array($json[self::FIELD_IDENTIFIER])) {
                foreach($json[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addIdentifier($v);
                    } else {
                        $type->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->addIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->addIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_RELATED_IDENTIFIER]) || array_key_exists(self::FIELD_RELATED_IDENTIFIER, $json)) {
            if (is_array($json[self::FIELD_RELATED_IDENTIFIER])) {
                foreach($json[self::FIELD_RELATED_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addRelatedIdentifier($v);
                    } else {
                        $type->addRelatedIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_RELATED_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->addRelatedIdentifier($json[self::FIELD_RELATED_IDENTIFIER]);
            } else {
                $type->addRelatedIdentifier(new FHIRIdentifier($json[self::FIELD_RELATED_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_DATE_ACCESSED]) || isset($json[self::FIELD_DATE_ACCESSED_EXT]) || array_key_exists(self::FIELD_DATE_ACCESSED, $json) || array_key_exists(self::FIELD_DATE_ACCESSED_EXT, $json)) {
            $value = $json[self::FIELD_DATE_ACCESSED] ?? null;
            $ext = (isset($json[self::FIELD_DATE_ACCESSED_EXT]) && is_array($json[self::FIELD_DATE_ACCESSED_EXT])) ? $json[self::FIELD_DATE_ACCESSED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setDateAccessed($value);
                } else if (is_array($value)) {
                    $type->setDateAccessed(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setDateAccessed(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDateAccessed(new FHIRDateTime($ext));
            } else {
                $type->setDateAccessed(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_VERSION]) || array_key_exists(self::FIELD_VERSION, $json)) {
            if ($json[self::FIELD_VERSION] instanceof FHIRCitationVersion) {
                $type->setVersion($json[self::FIELD_VERSION]);
            } else {
                $type->setVersion(new FHIRCitationVersion($json[self::FIELD_VERSION]));
            }
        }
        if (isset($json[self::FIELD_CURRENT_STATE]) || array_key_exists(self::FIELD_CURRENT_STATE, $json)) {
            if (is_array($json[self::FIELD_CURRENT_STATE])) {
                foreach($json[self::FIELD_CURRENT_STATE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addCurrentState($v);
                    } else {
                        $type->addCurrentState(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_CURRENT_STATE] instanceof FHIRCodeableConcept) {
                $type->addCurrentState($json[self::FIELD_CURRENT_STATE]);
            } else {
                $type->addCurrentState(new FHIRCodeableConcept($json[self::FIELD_CURRENT_STATE]));
            }
        }
        if (isset($json[self::FIELD_STATUS_DATE]) || array_key_exists(self::FIELD_STATUS_DATE, $json)) {
            if (is_array($json[self::FIELD_STATUS_DATE])) {
                foreach($json[self::FIELD_STATUS_DATE] as $v) {
                    if ($v instanceof FHIRCitationStatusDate1) {
                        $type->addStatusDate($v);
                    } else {
                        $type->addStatusDate(new FHIRCitationStatusDate1($v));
                    }
                }
            } elseif ($json[self::FIELD_STATUS_DATE] instanceof FHIRCitationStatusDate1) {
                $type->addStatusDate($json[self::FIELD_STATUS_DATE]);
            } else {
                $type->addStatusDate(new FHIRCitationStatusDate1($json[self::FIELD_STATUS_DATE]));
            }
        }
        if (isset($json[self::FIELD_TITLE]) || array_key_exists(self::FIELD_TITLE, $json)) {
            if (is_array($json[self::FIELD_TITLE])) {
                foreach($json[self::FIELD_TITLE] as $v) {
                    if ($v instanceof FHIRCitationTitle) {
                        $type->addTitle($v);
                    } else {
                        $type->addTitle(new FHIRCitationTitle($v));
                    }
                }
            } elseif ($json[self::FIELD_TITLE] instanceof FHIRCitationTitle) {
                $type->addTitle($json[self::FIELD_TITLE]);
            } else {
                $type->addTitle(new FHIRCitationTitle($json[self::FIELD_TITLE]));
            }
        }
        if (isset($json[self::FIELD_ABSTRACT]) || array_key_exists(self::FIELD_ABSTRACT, $json)) {
            if (is_array($json[self::FIELD_ABSTRACT])) {
                foreach($json[self::FIELD_ABSTRACT] as $v) {
                    if ($v instanceof FHIRCitationAbstract) {
                        $type->addAbstract($v);
                    } else {
                        $type->addAbstract(new FHIRCitationAbstract($v));
                    }
                }
            } elseif ($json[self::FIELD_ABSTRACT] instanceof FHIRCitationAbstract) {
                $type->addAbstract($json[self::FIELD_ABSTRACT]);
            } else {
                $type->addAbstract(new FHIRCitationAbstract($json[self::FIELD_ABSTRACT]));
            }
        }
        if (isset($json[self::FIELD_PART]) || array_key_exists(self::FIELD_PART, $json)) {
            if ($json[self::FIELD_PART] instanceof FHIRCitationPart) {
                $type->setPart($json[self::FIELD_PART]);
            } else {
                $type->setPart(new FHIRCitationPart($json[self::FIELD_PART]));
            }
        }
        if (isset($json[self::FIELD_RELATES_TO]) || array_key_exists(self::FIELD_RELATES_TO, $json)) {
            if (is_array($json[self::FIELD_RELATES_TO])) {
                foreach($json[self::FIELD_RELATES_TO] as $v) {
                    if ($v instanceof FHIRCitationRelatesTo1) {
                        $type->addRelatesTo($v);
                    } else {
                        $type->addRelatesTo(new FHIRCitationRelatesTo1($v));
                    }
                }
            } elseif ($json[self::FIELD_RELATES_TO] instanceof FHIRCitationRelatesTo1) {
                $type->addRelatesTo($json[self::FIELD_RELATES_TO]);
            } else {
                $type->addRelatesTo(new FHIRCitationRelatesTo1($json[self::FIELD_RELATES_TO]));
            }
        }
        if (isset($json[self::FIELD_PUBLICATION_FORM]) || array_key_exists(self::FIELD_PUBLICATION_FORM, $json)) {
            if (is_array($json[self::FIELD_PUBLICATION_FORM])) {
                foreach($json[self::FIELD_PUBLICATION_FORM] as $v) {
                    if ($v instanceof FHIRCitationPublicationForm) {
                        $type->addPublicationForm($v);
                    } else {
                        $type->addPublicationForm(new FHIRCitationPublicationForm($v));
                    }
                }
            } elseif ($json[self::FIELD_PUBLICATION_FORM] instanceof FHIRCitationPublicationForm) {
                $type->addPublicationForm($json[self::FIELD_PUBLICATION_FORM]);
            } else {
                $type->addPublicationForm(new FHIRCitationPublicationForm($json[self::FIELD_PUBLICATION_FORM]));
            }
        }
        if (isset($json[self::FIELD_WEB_LOCATION]) || array_key_exists(self::FIELD_WEB_LOCATION, $json)) {
            if (is_array($json[self::FIELD_WEB_LOCATION])) {
                foreach($json[self::FIELD_WEB_LOCATION] as $v) {
                    if ($v instanceof FHIRCitationWebLocation) {
                        $type->addWebLocation($v);
                    } else {
                        $type->addWebLocation(new FHIRCitationWebLocation($v));
                    }
                }
            } elseif ($json[self::FIELD_WEB_LOCATION] instanceof FHIRCitationWebLocation) {
                $type->addWebLocation($json[self::FIELD_WEB_LOCATION]);
            } else {
                $type->addWebLocation(new FHIRCitationWebLocation($json[self::FIELD_WEB_LOCATION]));
            }
        }
        if (isset($json[self::FIELD_CLASSIFICATION]) || array_key_exists(self::FIELD_CLASSIFICATION, $json)) {
            if (is_array($json[self::FIELD_CLASSIFICATION])) {
                foreach($json[self::FIELD_CLASSIFICATION] as $v) {
                    if ($v instanceof FHIRCitationClassification1) {
                        $type->addClassification($v);
                    } else {
                        $type->addClassification(new FHIRCitationClassification1($v));
                    }
                }
            } elseif ($json[self::FIELD_CLASSIFICATION] instanceof FHIRCitationClassification1) {
                $type->addClassification($json[self::FIELD_CLASSIFICATION]);
            } else {
                $type->addClassification(new FHIRCitationClassification1($json[self::FIELD_CLASSIFICATION]));
            }
        }
        if (isset($json[self::FIELD_CONTRIBUTORSHIP]) || array_key_exists(self::FIELD_CONTRIBUTORSHIP, $json)) {
            if ($json[self::FIELD_CONTRIBUTORSHIP] instanceof FHIRCitationContributorship) {
                $type->setContributorship($json[self::FIELD_CONTRIBUTORSHIP]);
            } else {
                $type->setContributorship(new FHIRCitationContributorship($json[self::FIELD_CONTRIBUTORSHIP]));
            }
        }
        if (isset($json[self::FIELD_NOTE]) || array_key_exists(self::FIELD_NOTE, $json)) {
            if (is_array($json[self::FIELD_NOTE])) {
                foreach($json[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $type->addNote($v);
                    } else {
                        $type->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($json[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $type->addNote($json[self::FIELD_NOTE]);
            } else {
                $type->addNote(new FHIRAnnotation($json[self::FIELD_NOTE]));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->relatedIdentifier) && [] !== $this->relatedIdentifier) {
            $out->relatedIdentifier = $this->relatedIdentifier;
        }
        if (isset($this->dateAccessed)) {
            if (null !== ($val = $this->dateAccessed->getValue())) {
                $out->dateAccessed = $val;
            }
            $ext = $this->dateAccessed->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dateAccessed = $ext;
            }
        }
        if (isset($this->version)) {
            $out->version = $this->version;
        }
        if (isset($this->currentState) && [] !== $this->currentState) {
            $out->currentState = $this->currentState;
        }
        if (isset($this->statusDate) && [] !== $this->statusDate) {
            $out->statusDate = $this->statusDate;
        }
        if (isset($this->title) && [] !== $this->title) {
            $out->title = $this->title;
        }
        if (isset($this->abstract) && [] !== $this->abstract) {
            $out->abstract = $this->abstract;
        }
        if (isset($this->part)) {
            $out->part = $this->part;
        }
        if (isset($this->relatesTo) && [] !== $this->relatesTo) {
            $out->relatesTo = $this->relatesTo;
        }
        if (isset($this->publicationForm) && [] !== $this->publicationForm) {
            $out->publicationForm = $this->publicationForm;
        }
        if (isset($this->webLocation) && [] !== $this->webLocation) {
            $out->webLocation = $this->webLocation;
        }
        if (isset($this->classification) && [] !== $this->classification) {
            $out->classification = $this->classification;
        }
        if (isset($this->contributorship)) {
            $out->contributorship = $this->contributorship;
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}