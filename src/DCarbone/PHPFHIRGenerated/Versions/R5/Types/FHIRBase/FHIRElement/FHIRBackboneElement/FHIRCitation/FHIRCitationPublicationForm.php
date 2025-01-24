<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 24th, 2025 03:11+0000
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 */
class FHIRCitationPublicationForm extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM;


    public const FIELD_PUBLISHED_IN = 'publishedIn';
    public const FIELD_CITED_MEDIUM = 'citedMedium';
    public const FIELD_VOLUME = 'volume';
    public const FIELD_VOLUME_EXT = '_volume';
    public const FIELD_ISSUE = 'issue';
    public const FIELD_ISSUE_EXT = '_issue';
    public const FIELD_ARTICLE_DATE = 'articleDate';
    public const FIELD_ARTICLE_DATE_EXT = '_articleDate';
    public const FIELD_PUBLICATION_DATE_TEXT = 'publicationDateText';
    public const FIELD_PUBLICATION_DATE_TEXT_EXT = '_publicationDateText';
    public const FIELD_PUBLICATION_DATE_SEASON = 'publicationDateSeason';
    public const FIELD_PUBLICATION_DATE_SEASON_EXT = '_publicationDateSeason';
    public const FIELD_LAST_REVISION_DATE = 'lastRevisionDate';
    public const FIELD_LAST_REVISION_DATE_EXT = '_lastRevisionDate';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_ACCESSION_NUMBER = 'accessionNumber';
    public const FIELD_ACCESSION_NUMBER_EXT = '_accessionNumber';
    public const FIELD_PAGE_STRING = 'pageString';
    public const FIELD_PAGE_STRING_EXT = '_pageString';
    public const FIELD_FIRST_PAGE = 'firstPage';
    public const FIELD_FIRST_PAGE_EXT = '_firstPage';
    public const FIELD_LAST_PAGE = 'lastPage';
    public const FIELD_LAST_PAGE_EXT = '_lastPage';
    public const FIELD_PAGE_COUNT = 'pageCount';
    public const FIELD_PAGE_COUNT_EXT = '_pageCount';
    public const FIELD_COPYRIGHT = 'copyright';
    public const FIELD_COPYRIGHT_EXT = '_copyright';

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The collection the cited article or artifact is published in.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn 
     */
    protected FHIRCitationPublishedIn $publishedIn;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the medium cited. Common codes are "Internet" or "Print".
     * The CitedMedium value set has 6 codes. The codes internet, print, and
     * offline-digital-storage are the common codes for a typical publication form,
     * though internet and print are more common for study citations. Three additional
     * codes (each appending one of the primary codes with "-without-issue" are used
     * for situations when a study is published both within an issue (of a periodical
     * release as commonly done for journals) AND is published separately from the
     * issue (as commonly done with early online publication), to represent specific
     * identification of the publication form not associated with the issue.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $citedMedium;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Volume number of journal or other collection in which the article is published.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $volume;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Issue, part or supplement of journal or other collection in which the article is
     * published.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $issue;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was added to the database, or the date the article was
     * released.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $articleDate;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text representation of the date on which the issue of the cited artifact was
     * published.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $publicationDateText;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Spring, Summer, Fall/Autumn, Winter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $publicationDateSeason;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was last revised or updated in the database.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $lastRevisionDate;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The language or languages in which this form of the article is published.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $language;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Entry number or identifier for inclusion in a database.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $accessionNumber;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for full display of pagination.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $pageString;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of first page.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $firstPage;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of last page.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $lastPage;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual or approximate number of pages or screens. Distinct from reporting the
     * page numbers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $pageCount;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Copyright notice for the full article or artifact.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $copyright;

    /** Default validation map for fields in type Citation.PublicationForm */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRCitationPublicationForm Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn $publishedIn
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $citedMedium
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $volume
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $issue
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $articleDate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $publicationDateText
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $publicationDateSeason
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $lastRevisionDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $language
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $accessionNumber
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $pageString
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $firstPage
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $lastPage
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $pageCount
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $copyright
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCitationPublishedIn $publishedIn = null,
                                null|FHIRCodeableConcept $citedMedium = null,
                                null|string|FHIRStringPrimitive|FHIRString $volume = null,
                                null|string|FHIRStringPrimitive|FHIRString $issue = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $articleDate = null,
                                null|string|FHIRStringPrimitive|FHIRString $publicationDateText = null,
                                null|string|FHIRStringPrimitive|FHIRString $publicationDateSeason = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $lastRevisionDate = null,
                                null|iterable $language = null,
                                null|string|FHIRStringPrimitive|FHIRString $accessionNumber = null,
                                null|string|FHIRStringPrimitive|FHIRString $pageString = null,
                                null|string|FHIRStringPrimitive|FHIRString $firstPage = null,
                                null|string|FHIRStringPrimitive|FHIRString $lastPage = null,
                                null|string|FHIRStringPrimitive|FHIRString $pageCount = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $copyright = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $publishedIn) {
            $this->setPublishedIn($publishedIn);
        }
        if (null !== $citedMedium) {
            $this->setCitedMedium($citedMedium);
        }
        if (null !== $volume) {
            $this->setVolume($volume);
        }
        if (null !== $issue) {
            $this->setIssue($issue);
        }
        if (null !== $articleDate) {
            $this->setArticleDate($articleDate);
        }
        if (null !== $publicationDateText) {
            $this->setPublicationDateText($publicationDateText);
        }
        if (null !== $publicationDateSeason) {
            $this->setPublicationDateSeason($publicationDateSeason);
        }
        if (null !== $lastRevisionDate) {
            $this->setLastRevisionDate($lastRevisionDate);
        }
        if (null !== $language) {
            $this->setLanguage(...$language);
        }
        if (null !== $accessionNumber) {
            $this->setAccessionNumber($accessionNumber);
        }
        if (null !== $pageString) {
            $this->setPageString($pageString);
        }
        if (null !== $firstPage) {
            $this->setFirstPage($firstPage);
        }
        if (null !== $lastPage) {
            $this->setLastPage($lastPage);
        }
        if (null !== $pageCount) {
            $this->setPageCount($pageCount);
        }
        if (null !== $copyright) {
            $this->setCopyright($copyright);
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
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The collection the cited article or artifact is published in.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn
     */
    public function getPublishedIn(): null|FHIRCitationPublishedIn
    {
        return $this->publishedIn ?? null;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The collection the cited article or artifact is published in.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn $publishedIn
     * @return static
     */
    public function setPublishedIn(null|FHIRCitationPublishedIn $publishedIn): self
    {
        if (null === $publishedIn) {
            unset($this->publishedIn);
            return $this;
        }
        $this->publishedIn = $publishedIn;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the medium cited. Common codes are "Internet" or "Print".
     * The CitedMedium value set has 6 codes. The codes internet, print, and
     * offline-digital-storage are the common codes for a typical publication form,
     * though internet and print are more common for study citations. Three additional
     * codes (each appending one of the primary codes with "-without-issue" are used
     * for situations when a study is published both within an issue (of a periodical
     * release as commonly done for journals) AND is published separately from the
     * issue (as commonly done with early online publication), to represent specific
     * identification of the publication form not associated with the issue.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCitedMedium(): null|FHIRCodeableConcept
    {
        return $this->citedMedium ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the medium cited. Common codes are "Internet" or "Print".
     * The CitedMedium value set has 6 codes. The codes internet, print, and
     * offline-digital-storage are the common codes for a typical publication form,
     * though internet and print are more common for study citations. Three additional
     * codes (each appending one of the primary codes with "-without-issue" are used
     * for situations when a study is published both within an issue (of a periodical
     * release as commonly done for journals) AND is published separately from the
     * issue (as commonly done with early online publication), to represent specific
     * identification of the publication form not associated with the issue.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $citedMedium
     * @return static
     */
    public function setCitedMedium(null|FHIRCodeableConcept $citedMedium): self
    {
        if (null === $citedMedium) {
            unset($this->citedMedium);
            return $this;
        }
        $this->citedMedium = $citedMedium;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Volume number of journal or other collection in which the article is published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getVolume(): null|FHIRString
    {
        return $this->volume ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Volume number of journal or other collection in which the article is published.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $volume
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setVolume(null|string|FHIRStringPrimitive|FHIRString $volume,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $volume) {
            unset($this->volume);
            return $this;
        }
        if (!($volume instanceof FHIRString)) {
            $volume = new FHIRString(value: $volume);
        }
        if (null !== $valueXMLLocation) {
            $volume->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $volume->_getValueXMLLocation()) {
            $volume->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->volume = $volume;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Issue, part or supplement of journal or other collection in which the article is
     * published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getIssue(): null|FHIRString
    {
        return $this->issue ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Issue, part or supplement of journal or other collection in which the article is
     * published.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $issue
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIssue(null|string|FHIRStringPrimitive|FHIRString $issue,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $issue) {
            unset($this->issue);
            return $this;
        }
        if (!($issue instanceof FHIRString)) {
            $issue = new FHIRString(value: $issue);
        }
        if (null !== $valueXMLLocation) {
            $issue->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $issue->_getValueXMLLocation()) {
            $issue->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->issue = $issue;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was added to the database, or the date the article was
     * released.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getArticleDate(): null|FHIRDateTime
    {
        return $this->articleDate ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was added to the database, or the date the article was
     * released.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $articleDate
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setArticleDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $articleDate,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $articleDate) {
            unset($this->articleDate);
            return $this;
        }
        if (!($articleDate instanceof FHIRDateTime)) {
            $articleDate = new FHIRDateTime(value: $articleDate);
        }
        if (null !== $valueXMLLocation) {
            $articleDate->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $articleDate->_getValueXMLLocation()) {
            $articleDate->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->articleDate = $articleDate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text representation of the date on which the issue of the cited artifact was
     * published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getPublicationDateText(): null|FHIRString
    {
        return $this->publicationDateText ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text representation of the date on which the issue of the cited artifact was
     * published.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $publicationDateText
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPublicationDateText(null|string|FHIRStringPrimitive|FHIRString $publicationDateText,
                                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $publicationDateText) {
            unset($this->publicationDateText);
            return $this;
        }
        if (!($publicationDateText instanceof FHIRString)) {
            $publicationDateText = new FHIRString(value: $publicationDateText);
        }
        if (null !== $valueXMLLocation) {
            $publicationDateText->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $publicationDateText->_getValueXMLLocation()) {
            $publicationDateText->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->publicationDateText = $publicationDateText;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Spring, Summer, Fall/Autumn, Winter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getPublicationDateSeason(): null|FHIRString
    {
        return $this->publicationDateSeason ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Spring, Summer, Fall/Autumn, Winter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $publicationDateSeason
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPublicationDateSeason(null|string|FHIRStringPrimitive|FHIRString $publicationDateSeason,
                                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $publicationDateSeason) {
            unset($this->publicationDateSeason);
            return $this;
        }
        if (!($publicationDateSeason instanceof FHIRString)) {
            $publicationDateSeason = new FHIRString(value: $publicationDateSeason);
        }
        if (null !== $valueXMLLocation) {
            $publicationDateSeason->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $publicationDateSeason->_getValueXMLLocation()) {
            $publicationDateSeason->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->publicationDateSeason = $publicationDateSeason;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was last revised or updated in the database.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getLastRevisionDate(): null|FHIRDateTime
    {
        return $this->lastRevisionDate ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was last revised or updated in the database.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $lastRevisionDate
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLastRevisionDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $lastRevisionDate,
                                        null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $lastRevisionDate) {
            unset($this->lastRevisionDate);
            return $this;
        }
        if (!($lastRevisionDate instanceof FHIRDateTime)) {
            $lastRevisionDate = new FHIRDateTime(value: $lastRevisionDate);
        }
        if (null !== $valueXMLLocation) {
            $lastRevisionDate->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $lastRevisionDate->_getValueXMLLocation()) {
            $lastRevisionDate->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->lastRevisionDate = $lastRevisionDate;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The language or languages in which this form of the article is published.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getLanguage(): array
    {
        return $this->language ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getLanguageIterator(): iterable
    {
        if (!isset($this->language) || [] === $this->language) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->language);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The language or languages in which this form of the article is published.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $language
     * @return static
     */
    public function addLanguage(FHIRCodeableConcept $language): self
    {
        if (!isset($this->language)) {
            $this->language = [];
        }
        $this->language[] = $language;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The language or languages in which this form of the article is published.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$language
     * @return static
     */
    public function setLanguage(FHIRCodeableConcept ...$language): self
    {
        $this->language = $language;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Entry number or identifier for inclusion in a database.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getAccessionNumber(): null|FHIRString
    {
        return $this->accessionNumber ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Entry number or identifier for inclusion in a database.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $accessionNumber
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAccessionNumber(null|string|FHIRStringPrimitive|FHIRString $accessionNumber,
                                       null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $accessionNumber) {
            unset($this->accessionNumber);
            return $this;
        }
        if (!($accessionNumber instanceof FHIRString)) {
            $accessionNumber = new FHIRString(value: $accessionNumber);
        }
        if (null !== $valueXMLLocation) {
            $accessionNumber->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $accessionNumber->_getValueXMLLocation()) {
            $accessionNumber->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->accessionNumber = $accessionNumber;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for full display of pagination.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getPageString(): null|FHIRString
    {
        return $this->pageString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for full display of pagination.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $pageString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPageString(null|string|FHIRStringPrimitive|FHIRString $pageString,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $pageString) {
            unset($this->pageString);
            return $this;
        }
        if (!($pageString instanceof FHIRString)) {
            $pageString = new FHIRString(value: $pageString);
        }
        if (null !== $valueXMLLocation) {
            $pageString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $pageString->_getValueXMLLocation()) {
            $pageString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->pageString = $pageString;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of first page.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getFirstPage(): null|FHIRString
    {
        return $this->firstPage ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of first page.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $firstPage
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFirstPage(null|string|FHIRStringPrimitive|FHIRString $firstPage,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $firstPage) {
            unset($this->firstPage);
            return $this;
        }
        if (!($firstPage instanceof FHIRString)) {
            $firstPage = new FHIRString(value: $firstPage);
        }
        if (null !== $valueXMLLocation) {
            $firstPage->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $firstPage->_getValueXMLLocation()) {
            $firstPage->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->firstPage = $firstPage;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of last page.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getLastPage(): null|FHIRString
    {
        return $this->lastPage ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of last page.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $lastPage
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLastPage(null|string|FHIRStringPrimitive|FHIRString $lastPage,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $lastPage) {
            unset($this->lastPage);
            return $this;
        }
        if (!($lastPage instanceof FHIRString)) {
            $lastPage = new FHIRString(value: $lastPage);
        }
        if (null !== $valueXMLLocation) {
            $lastPage->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $lastPage->_getValueXMLLocation()) {
            $lastPage->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->lastPage = $lastPage;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual or approximate number of pages or screens. Distinct from reporting the
     * page numbers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getPageCount(): null|FHIRString
    {
        return $this->pageCount ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual or approximate number of pages or screens. Distinct from reporting the
     * page numbers.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $pageCount
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPageCount(null|string|FHIRStringPrimitive|FHIRString $pageCount,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $pageCount) {
            unset($this->pageCount);
            return $this;
        }
        if (!($pageCount instanceof FHIRString)) {
            $pageCount = new FHIRString(value: $pageCount);
        }
        if (null !== $valueXMLLocation) {
            $pageCount->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $pageCount->_getValueXMLLocation()) {
            $pageCount->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->pageCount = $pageCount;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Copyright notice for the full article or artifact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getCopyright(): null|FHIRMarkdown
    {
        return $this->copyright ?? null;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Copyright notice for the full article or artifact.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $copyright
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCopyright(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $copyright,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $copyright) {
            unset($this->copyright);
            return $this;
        }
        if (!($copyright instanceof FHIRMarkdown)) {
            $copyright = new FHIRMarkdown(value: $copyright);
        }
        if (null !== $valueXMLLocation) {
            $copyright->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $copyright->_getValueXMLLocation()) {
            $copyright->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->copyright = $copyright;
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
        if (isset($validationRules[self::FIELD_PUBLISHED_IN])) {
            $v = $this->getPublishedIn();
            foreach($validationRules[self::FIELD_PUBLISHED_IN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PUBLISHED_IN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLISHED_IN])) {
                        $errs[self::FIELD_PUBLISHED_IN] = [];
                    }
                    $errs[self::FIELD_PUBLISHED_IN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CITED_MEDIUM])) {
            $v = $this->getCitedMedium();
            foreach($validationRules[self::FIELD_CITED_MEDIUM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CITED_MEDIUM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CITED_MEDIUM])) {
                        $errs[self::FIELD_CITED_MEDIUM] = [];
                    }
                    $errs[self::FIELD_CITED_MEDIUM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VOLUME])) {
            $v = $this->getVolume();
            foreach($validationRules[self::FIELD_VOLUME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VOLUME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VOLUME])) {
                        $errs[self::FIELD_VOLUME] = [];
                    }
                    $errs[self::FIELD_VOLUME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUE])) {
            $v = $this->getIssue();
            foreach($validationRules[self::FIELD_ISSUE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ISSUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUE])) {
                        $errs[self::FIELD_ISSUE] = [];
                    }
                    $errs[self::FIELD_ISSUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ARTICLE_DATE])) {
            $v = $this->getArticleDate();
            foreach($validationRules[self::FIELD_ARTICLE_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ARTICLE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ARTICLE_DATE])) {
                        $errs[self::FIELD_ARTICLE_DATE] = [];
                    }
                    $errs[self::FIELD_ARTICLE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLICATION_DATE_TEXT])) {
            $v = $this->getPublicationDateText();
            foreach($validationRules[self::FIELD_PUBLICATION_DATE_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PUBLICATION_DATE_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLICATION_DATE_TEXT])) {
                        $errs[self::FIELD_PUBLICATION_DATE_TEXT] = [];
                    }
                    $errs[self::FIELD_PUBLICATION_DATE_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLICATION_DATE_SEASON])) {
            $v = $this->getPublicationDateSeason();
            foreach($validationRules[self::FIELD_PUBLICATION_DATE_SEASON] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PUBLICATION_DATE_SEASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLICATION_DATE_SEASON])) {
                        $errs[self::FIELD_PUBLICATION_DATE_SEASON] = [];
                    }
                    $errs[self::FIELD_PUBLICATION_DATE_SEASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_REVISION_DATE])) {
            $v = $this->getLastRevisionDate();
            foreach($validationRules[self::FIELD_LAST_REVISION_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LAST_REVISION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_REVISION_DATE])) {
                        $errs[self::FIELD_LAST_REVISION_DATE] = [];
                    }
                    $errs[self::FIELD_LAST_REVISION_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACCESSION_NUMBER])) {
            $v = $this->getAccessionNumber();
            foreach($validationRules[self::FIELD_ACCESSION_NUMBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ACCESSION_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACCESSION_NUMBER])) {
                        $errs[self::FIELD_ACCESSION_NUMBER] = [];
                    }
                    $errs[self::FIELD_ACCESSION_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAGE_STRING])) {
            $v = $this->getPageString();
            foreach($validationRules[self::FIELD_PAGE_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAGE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAGE_STRING])) {
                        $errs[self::FIELD_PAGE_STRING] = [];
                    }
                    $errs[self::FIELD_PAGE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIRST_PAGE])) {
            $v = $this->getFirstPage();
            foreach($validationRules[self::FIELD_FIRST_PAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIRST_PAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIRST_PAGE])) {
                        $errs[self::FIELD_FIRST_PAGE] = [];
                    }
                    $errs[self::FIELD_FIRST_PAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_PAGE])) {
            $v = $this->getLastPage();
            foreach($validationRules[self::FIELD_LAST_PAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LAST_PAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_PAGE])) {
                        $errs[self::FIELD_LAST_PAGE] = [];
                    }
                    $errs[self::FIELD_LAST_PAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAGE_COUNT])) {
            $v = $this->getPageCount();
            foreach($validationRules[self::FIELD_PAGE_COUNT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAGE_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAGE_COUNT])) {
                        $errs[self::FIELD_PAGE_COUNT] = [];
                    }
                    $errs[self::FIELD_PAGE_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COPYRIGHT])) {
            $v = $this->getCopyright();
            foreach($validationRules[self::FIELD_COPYRIGHT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COPYRIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COPYRIGHT])) {
                        $errs[self::FIELD_COPYRIGHT] = [];
                    }
                    $errs[self::FIELD_COPYRIGHT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationPublicationForm)) {
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
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PUBLISHED_IN === $childName) {
                $v = new FHIRCitationPublishedIn();
                $type->setPublishedIn(FHIRCitationPublishedIn::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CITED_MEDIUM === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCitedMedium(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VOLUME === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setVolume(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ISSUE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setIssue(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ARTICLE_DATE === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setArticleDate(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PUBLICATION_DATE_TEXT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPublicationDateText(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PUBLICATION_DATE_SEASON === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPublicationDateSeason(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LAST_REVISION_DATE === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLastRevisionDate(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addLanguage(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ACCESSION_NUMBER === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAccessionNumber(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PAGE_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPageString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FIRST_PAGE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setFirstPage(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LAST_PAGE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLastPage(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PAGE_COUNT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPageCount(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COPYRIGHT === $childName) {
                $v = new FHIRMarkdown(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCopyright(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VOLUME])) {
            $pt = $type->getVolume();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VOLUME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setVolume(new FHIRString(
                    value: (string)$attributes[self::FIELD_VOLUME],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ISSUE])) {
            $pt = $type->getIssue();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ISSUE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIssue(new FHIRString(
                    value: (string)$attributes[self::FIELD_ISSUE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ARTICLE_DATE])) {
            $pt = $type->getArticleDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ARTICLE_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setArticleDate(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_ARTICLE_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PUBLICATION_DATE_TEXT])) {
            $pt = $type->getPublicationDateText();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PUBLICATION_DATE_TEXT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPublicationDateText(new FHIRString(
                    value: (string)$attributes[self::FIELD_PUBLICATION_DATE_TEXT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PUBLICATION_DATE_SEASON])) {
            $pt = $type->getPublicationDateSeason();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PUBLICATION_DATE_SEASON]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPublicationDateSeason(new FHIRString(
                    value: (string)$attributes[self::FIELD_PUBLICATION_DATE_SEASON],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LAST_REVISION_DATE])) {
            $pt = $type->getLastRevisionDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LAST_REVISION_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLastRevisionDate(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_LAST_REVISION_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ACCESSION_NUMBER])) {
            $pt = $type->getAccessionNumber();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ACCESSION_NUMBER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAccessionNumber(new FHIRString(
                    value: (string)$attributes[self::FIELD_ACCESSION_NUMBER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PAGE_STRING])) {
            $pt = $type->getPageString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PAGE_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPageString(new FHIRString(
                    value: (string)$attributes[self::FIELD_PAGE_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FIRST_PAGE])) {
            $pt = $type->getFirstPage();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_FIRST_PAGE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFirstPage(new FHIRString(
                    value: (string)$attributes[self::FIELD_FIRST_PAGE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LAST_PAGE])) {
            $pt = $type->getLastPage();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LAST_PAGE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLastPage(new FHIRString(
                    value: (string)$attributes[self::FIELD_LAST_PAGE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PAGE_COUNT])) {
            $pt = $type->getPageCount();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PAGE_COUNT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPageCount(new FHIRString(
                    value: (string)$attributes[self::FIELD_PAGE_COUNT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COPYRIGHT])) {
            $pt = $type->getCopyright();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_COPYRIGHT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCopyright(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_COPYRIGHT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('CitationPublicationForm', $this->_getSourceXMLNS());
        }
        if (isset($this->volume) && $this->volume->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VOLUME, $this->volume->getValue()?->_getFormattedValue());
        }
        if (isset($this->issue) && $this->issue->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ISSUE, $this->issue->getValue()?->_getFormattedValue());
        }
        if (isset($this->articleDate) && $this->articleDate->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ARTICLE_DATE, $this->articleDate->getValue()?->_getFormattedValue());
        }
        if (isset($this->publicationDateText) && $this->publicationDateText->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PUBLICATION_DATE_TEXT, $this->publicationDateText->getValue()?->_getFormattedValue());
        }
        if (isset($this->publicationDateSeason) && $this->publicationDateSeason->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PUBLICATION_DATE_SEASON, $this->publicationDateSeason->getValue()?->_getFormattedValue());
        }
        if (isset($this->lastRevisionDate) && $this->lastRevisionDate->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LAST_REVISION_DATE, $this->lastRevisionDate->getValue()?->_getFormattedValue());
        }
        if (isset($this->accessionNumber) && $this->accessionNumber->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ACCESSION_NUMBER, $this->accessionNumber->getValue()?->_getFormattedValue());
        }
        if (isset($this->pageString) && $this->pageString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PAGE_STRING, $this->pageString->getValue()?->_getFormattedValue());
        }
        if (isset($this->firstPage) && $this->firstPage->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FIRST_PAGE, $this->firstPage->getValue()?->_getFormattedValue());
        }
        if (isset($this->lastPage) && $this->lastPage->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LAST_PAGE, $this->lastPage->getValue()?->_getFormattedValue());
        }
        if (isset($this->pageCount) && $this->pageCount->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PAGE_COUNT, $this->pageCount->getValue()?->_getFormattedValue());
        }
        if (isset($this->copyright) && $this->copyright->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COPYRIGHT, $this->copyright->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->publishedIn)) {
            $xw->startElement(self::FIELD_PUBLISHED_IN);
            $this->publishedIn->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->citedMedium)) {
            $xw->startElement(self::FIELD_CITED_MEDIUM);
            $this->citedMedium->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->volume) && $this->volume->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VOLUME);
            $this->volume->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->issue) && $this->issue->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ISSUE);
            $this->issue->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->articleDate) && $this->articleDate->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ARTICLE_DATE);
            $this->articleDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->publicationDateText) && $this->publicationDateText->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PUBLICATION_DATE_TEXT);
            $this->publicationDateText->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->publicationDateSeason) && $this->publicationDateSeason->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PUBLICATION_DATE_SEASON);
            $this->publicationDateSeason->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->lastRevisionDate) && $this->lastRevisionDate->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LAST_REVISION_DATE);
            $this->lastRevisionDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->language)) {
            foreach ($this->language as $v) {
                $xw->startElement(self::FIELD_LANGUAGE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->accessionNumber) && $this->accessionNumber->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ACCESSION_NUMBER);
            $this->accessionNumber->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->pageString) && $this->pageString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PAGE_STRING);
            $this->pageString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->firstPage) && $this->firstPage->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FIRST_PAGE);
            $this->firstPage->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->lastPage) && $this->lastPage->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LAST_PAGE);
            $this->lastPage->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->pageCount) && $this->pageCount->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PAGE_COUNT);
            $this->pageCount->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->copyright) && $this->copyright->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COPYRIGHT);
            $this->copyright->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationPublicationForm)) {
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
        if (isset($json[self::FIELD_PUBLISHED_IN]) || array_key_exists(self::FIELD_PUBLISHED_IN, $json)) {
            $type->setPublishedIn(FHIRCitationPublishedIn::jsonUnserialize(
                json: $json[self::FIELD_PUBLISHED_IN],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CITED_MEDIUM]) || array_key_exists(self::FIELD_CITED_MEDIUM, $json)) {
            $type->setCitedMedium(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_CITED_MEDIUM],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VOLUME]) || isset($json[self::FIELD_VOLUME_EXT]) || array_key_exists(self::FIELD_VOLUME, $json) || array_key_exists(self::FIELD_VOLUME_EXT, $json)) {
            $value = $json[self::FIELD_VOLUME] ?? null;
            $ext = (array)($json[self::FIELD_VOLUME_EXT] ?? []);
            $type->setVolume(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ISSUE]) || isset($json[self::FIELD_ISSUE_EXT]) || array_key_exists(self::FIELD_ISSUE, $json) || array_key_exists(self::FIELD_ISSUE_EXT, $json)) {
            $value = $json[self::FIELD_ISSUE] ?? null;
            $ext = (array)($json[self::FIELD_ISSUE_EXT] ?? []);
            $type->setIssue(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ARTICLE_DATE]) || isset($json[self::FIELD_ARTICLE_DATE_EXT]) || array_key_exists(self::FIELD_ARTICLE_DATE, $json) || array_key_exists(self::FIELD_ARTICLE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_ARTICLE_DATE] ?? null;
            $ext = (array)($json[self::FIELD_ARTICLE_DATE_EXT] ?? []);
            $type->setArticleDate(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PUBLICATION_DATE_TEXT]) || isset($json[self::FIELD_PUBLICATION_DATE_TEXT_EXT]) || array_key_exists(self::FIELD_PUBLICATION_DATE_TEXT, $json) || array_key_exists(self::FIELD_PUBLICATION_DATE_TEXT_EXT, $json)) {
            $value = $json[self::FIELD_PUBLICATION_DATE_TEXT] ?? null;
            $ext = (array)($json[self::FIELD_PUBLICATION_DATE_TEXT_EXT] ?? []);
            $type->setPublicationDateText(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PUBLICATION_DATE_SEASON]) || isset($json[self::FIELD_PUBLICATION_DATE_SEASON_EXT]) || array_key_exists(self::FIELD_PUBLICATION_DATE_SEASON, $json) || array_key_exists(self::FIELD_PUBLICATION_DATE_SEASON_EXT, $json)) {
            $value = $json[self::FIELD_PUBLICATION_DATE_SEASON] ?? null;
            $ext = (array)($json[self::FIELD_PUBLICATION_DATE_SEASON_EXT] ?? []);
            $type->setPublicationDateSeason(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_LAST_REVISION_DATE]) || isset($json[self::FIELD_LAST_REVISION_DATE_EXT]) || array_key_exists(self::FIELD_LAST_REVISION_DATE, $json) || array_key_exists(self::FIELD_LAST_REVISION_DATE_EXT, $json)) {
            $value = $json[self::FIELD_LAST_REVISION_DATE] ?? null;
            $ext = (array)($json[self::FIELD_LAST_REVISION_DATE_EXT] ?? []);
            $type->setLastRevisionDate(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_LANGUAGE]) || array_key_exists(self::FIELD_LANGUAGE, $json)) {
            $vs = $json[self::FIELD_LANGUAGE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addLanguage(FHIRCodeableConcept::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_ACCESSION_NUMBER]) || isset($json[self::FIELD_ACCESSION_NUMBER_EXT]) || array_key_exists(self::FIELD_ACCESSION_NUMBER, $json) || array_key_exists(self::FIELD_ACCESSION_NUMBER_EXT, $json)) {
            $value = $json[self::FIELD_ACCESSION_NUMBER] ?? null;
            $ext = (array)($json[self::FIELD_ACCESSION_NUMBER_EXT] ?? []);
            $type->setAccessionNumber(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PAGE_STRING]) || isset($json[self::FIELD_PAGE_STRING_EXT]) || array_key_exists(self::FIELD_PAGE_STRING, $json) || array_key_exists(self::FIELD_PAGE_STRING_EXT, $json)) {
            $value = $json[self::FIELD_PAGE_STRING] ?? null;
            $ext = (array)($json[self::FIELD_PAGE_STRING_EXT] ?? []);
            $type->setPageString(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_FIRST_PAGE]) || isset($json[self::FIELD_FIRST_PAGE_EXT]) || array_key_exists(self::FIELD_FIRST_PAGE, $json) || array_key_exists(self::FIELD_FIRST_PAGE_EXT, $json)) {
            $value = $json[self::FIELD_FIRST_PAGE] ?? null;
            $ext = (array)($json[self::FIELD_FIRST_PAGE_EXT] ?? []);
            $type->setFirstPage(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_LAST_PAGE]) || isset($json[self::FIELD_LAST_PAGE_EXT]) || array_key_exists(self::FIELD_LAST_PAGE, $json) || array_key_exists(self::FIELD_LAST_PAGE_EXT, $json)) {
            $value = $json[self::FIELD_LAST_PAGE] ?? null;
            $ext = (array)($json[self::FIELD_LAST_PAGE_EXT] ?? []);
            $type->setLastPage(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PAGE_COUNT]) || isset($json[self::FIELD_PAGE_COUNT_EXT]) || array_key_exists(self::FIELD_PAGE_COUNT, $json) || array_key_exists(self::FIELD_PAGE_COUNT_EXT, $json)) {
            $value = $json[self::FIELD_PAGE_COUNT] ?? null;
            $ext = (array)($json[self::FIELD_PAGE_COUNT_EXT] ?? []);
            $type->setPageCount(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_COPYRIGHT]) || isset($json[self::FIELD_COPYRIGHT_EXT]) || array_key_exists(self::FIELD_COPYRIGHT, $json) || array_key_exists(self::FIELD_COPYRIGHT_EXT, $json)) {
            $value = $json[self::FIELD_COPYRIGHT] ?? null;
            $ext = (array)($json[self::FIELD_COPYRIGHT_EXT] ?? []);
            $type->setCopyright(FHIRMarkdown::jsonUnserialize(
                json: [FHIRMarkdown::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->publishedIn)) {
            $out->publishedIn = $this->publishedIn;
        }
        if (isset($this->citedMedium)) {
            $out->citedMedium = $this->citedMedium;
        }
        if (isset($this->volume)) {
            if (null !== ($val = $this->volume->getValue())) {
                $out->volume = $val;
            }
            $ext = $this->volume->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_volume = $ext;
            }
        }
        if (isset($this->issue)) {
            if (null !== ($val = $this->issue->getValue())) {
                $out->issue = $val;
            }
            $ext = $this->issue->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_issue = $ext;
            }
        }
        if (isset($this->articleDate)) {
            if (null !== ($val = $this->articleDate->getValue())) {
                $out->articleDate = $val;
            }
            $ext = $this->articleDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_articleDate = $ext;
            }
        }
        if (isset($this->publicationDateText)) {
            if (null !== ($val = $this->publicationDateText->getValue())) {
                $out->publicationDateText = $val;
            }
            $ext = $this->publicationDateText->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_publicationDateText = $ext;
            }
        }
        if (isset($this->publicationDateSeason)) {
            if (null !== ($val = $this->publicationDateSeason->getValue())) {
                $out->publicationDateSeason = $val;
            }
            $ext = $this->publicationDateSeason->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_publicationDateSeason = $ext;
            }
        }
        if (isset($this->lastRevisionDate)) {
            if (null !== ($val = $this->lastRevisionDate->getValue())) {
                $out->lastRevisionDate = $val;
            }
            $ext = $this->lastRevisionDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_lastRevisionDate = $ext;
            }
        }
        if (isset($this->language) && [] !== $this->language) {
            $out->language = $this->language;
        }
        if (isset($this->accessionNumber)) {
            if (null !== ($val = $this->accessionNumber->getValue())) {
                $out->accessionNumber = $val;
            }
            $ext = $this->accessionNumber->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_accessionNumber = $ext;
            }
        }
        if (isset($this->pageString)) {
            if (null !== ($val = $this->pageString->getValue())) {
                $out->pageString = $val;
            }
            $ext = $this->pageString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_pageString = $ext;
            }
        }
        if (isset($this->firstPage)) {
            if (null !== ($val = $this->firstPage->getValue())) {
                $out->firstPage = $val;
            }
            $ext = $this->firstPage->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_firstPage = $ext;
            }
        }
        if (isset($this->lastPage)) {
            if (null !== ($val = $this->lastPage->getValue())) {
                $out->lastPage = $val;
            }
            $ext = $this->lastPage->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_lastPage = $ext;
            }
        }
        if (isset($this->pageCount)) {
            if (null !== ($val = $this->pageCount->getValue())) {
                $out->pageCount = $val;
            }
            $ext = $this->pageCount->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_pageCount = $ext;
            }
        }
        if (isset($this->copyright)) {
            if (null !== ($val = $this->copyright->getValue())) {
                $out->copyright = $val;
            }
            $ext = $this->copyright->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_copyright = $ext;
            }
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