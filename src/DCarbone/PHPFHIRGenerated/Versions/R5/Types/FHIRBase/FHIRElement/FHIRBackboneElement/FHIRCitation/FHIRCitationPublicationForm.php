<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 6th, 2025 03:21+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 */
class FHIRCitationPublicationForm extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM;

    /* class_default.php:50 */
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

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_VOLUME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ISSUE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ARTICLE_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PUBLICATION_DATE_TEXT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PUBLICATION_DATE_SEASON => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LAST_REVISION_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ACCESSION_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PAGE_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIRST_PAGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LAST_PAGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PAGE_COUNT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COPYRIGHT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
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

    /* constructor.php:61 */
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

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
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
     * @return static
     */
    public function setVolume(null|string|FHIRStringPrimitive|FHIRString $volume): self
    {
        if (null === $volume) {
            unset($this->volume);
            return $this;
        }
        if (!($volume instanceof FHIRString)) {
            $volume = new FHIRString(value: $volume);
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
     * @return static
     */
    public function setIssue(null|string|FHIRStringPrimitive|FHIRString $issue): self
    {
        if (null === $issue) {
            unset($this->issue);
            return $this;
        }
        if (!($issue instanceof FHIRString)) {
            $issue = new FHIRString(value: $issue);
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
     * @return static
     */
    public function setArticleDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $articleDate): self
    {
        if (null === $articleDate) {
            unset($this->articleDate);
            return $this;
        }
        if (!($articleDate instanceof FHIRDateTime)) {
            $articleDate = new FHIRDateTime(value: $articleDate);
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
     * @return static
     */
    public function setPublicationDateText(null|string|FHIRStringPrimitive|FHIRString $publicationDateText): self
    {
        if (null === $publicationDateText) {
            unset($this->publicationDateText);
            return $this;
        }
        if (!($publicationDateText instanceof FHIRString)) {
            $publicationDateText = new FHIRString(value: $publicationDateText);
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
     * @return static
     */
    public function setPublicationDateSeason(null|string|FHIRStringPrimitive|FHIRString $publicationDateSeason): self
    {
        if (null === $publicationDateSeason) {
            unset($this->publicationDateSeason);
            return $this;
        }
        if (!($publicationDateSeason instanceof FHIRString)) {
            $publicationDateSeason = new FHIRString(value: $publicationDateSeason);
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
     * @return static
     */
    public function setLastRevisionDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $lastRevisionDate): self
    {
        if (null === $lastRevisionDate) {
            unset($this->lastRevisionDate);
            return $this;
        }
        if (!($lastRevisionDate instanceof FHIRDateTime)) {
            $lastRevisionDate = new FHIRDateTime(value: $lastRevisionDate);
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
        if (!isset($this->language)) {
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
        if ([] === $language) {
            unset($this->language);
            return $this;
        }
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
     * @return static
     */
    public function setAccessionNumber(null|string|FHIRStringPrimitive|FHIRString $accessionNumber): self
    {
        if (null === $accessionNumber) {
            unset($this->accessionNumber);
            return $this;
        }
        if (!($accessionNumber instanceof FHIRString)) {
            $accessionNumber = new FHIRString(value: $accessionNumber);
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
     * @return static
     */
    public function setPageString(null|string|FHIRStringPrimitive|FHIRString $pageString): self
    {
        if (null === $pageString) {
            unset($this->pageString);
            return $this;
        }
        if (!($pageString instanceof FHIRString)) {
            $pageString = new FHIRString(value: $pageString);
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
     * @return static
     */
    public function setFirstPage(null|string|FHIRStringPrimitive|FHIRString $firstPage): self
    {
        if (null === $firstPage) {
            unset($this->firstPage);
            return $this;
        }
        if (!($firstPage instanceof FHIRString)) {
            $firstPage = new FHIRString(value: $firstPage);
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
     * @return static
     */
    public function setLastPage(null|string|FHIRStringPrimitive|FHIRString $lastPage): self
    {
        if (null === $lastPage) {
            unset($this->lastPage);
            return $this;
        }
        if (!($lastPage instanceof FHIRString)) {
            $lastPage = new FHIRString(value: $lastPage);
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
     * @return static
     */
    public function setPageCount(null|string|FHIRStringPrimitive|FHIRString $pageCount): self
    {
        if (null === $pageCount) {
            unset($this->pageCount);
            return $this;
        }
        if (!($pageCount instanceof FHIRString)) {
            $pageCount = new FHIRString(value: $pageCount);
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
     * @return static
     */
    public function setCopyright(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $copyright): self
    {
        if (null === $copyright) {
            unset($this->copyright);
            return $this;
        }
        if (!($copyright instanceof FHIRMarkdown)) {
            $copyright = new FHIRMarkdown(value: $copyright);
        }
        $this->copyright = $copyright;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PUBLISHED_IN === $cen) {
                $type->setPublishedIn(FHIRCitationPublishedIn::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CITED_MEDIUM === $cen) {
                $type->setCitedMedium(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VOLUME === $cen) {
                $type->setVolume(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ISSUE === $cen) {
                $type->setIssue(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ARTICLE_DATE === $cen) {
                $type->setArticleDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PUBLICATION_DATE_TEXT === $cen) {
                $type->setPublicationDateText(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PUBLICATION_DATE_SEASON === $cen) {
                $type->setPublicationDateSeason(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LAST_REVISION_DATE === $cen) {
                $type->setLastRevisionDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->addLanguage(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACCESSION_NUMBER === $cen) {
                $type->setAccessionNumber(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PAGE_STRING === $cen) {
                $type->setPageString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIRST_PAGE === $cen) {
                $type->setFirstPage(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LAST_PAGE === $cen) {
                $type->setLastPage(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PAGE_COUNT === $cen) {
                $type->setPageCount(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COPYRIGHT === $cen) {
                $type->setCopyright(FHIRMarkdown::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VOLUME])) {
            if (isset($type->volume)) {
                $type->volume->setValue((string)$attributes[self::FIELD_VOLUME]);
            } else {
                $type->setVolume((string)$attributes[self::FIELD_VOLUME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VOLUME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ISSUE])) {
            if (isset($type->issue)) {
                $type->issue->setValue((string)$attributes[self::FIELD_ISSUE]);
            } else {
                $type->setIssue((string)$attributes[self::FIELD_ISSUE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ISSUE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ARTICLE_DATE])) {
            if (isset($type->articleDate)) {
                $type->articleDate->setValue((string)$attributes[self::FIELD_ARTICLE_DATE]);
            } else {
                $type->setArticleDate((string)$attributes[self::FIELD_ARTICLE_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ARTICLE_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PUBLICATION_DATE_TEXT])) {
            if (isset($type->publicationDateText)) {
                $type->publicationDateText->setValue((string)$attributes[self::FIELD_PUBLICATION_DATE_TEXT]);
            } else {
                $type->setPublicationDateText((string)$attributes[self::FIELD_PUBLICATION_DATE_TEXT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PUBLICATION_DATE_TEXT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PUBLICATION_DATE_SEASON])) {
            if (isset($type->publicationDateSeason)) {
                $type->publicationDateSeason->setValue((string)$attributes[self::FIELD_PUBLICATION_DATE_SEASON]);
            } else {
                $type->setPublicationDateSeason((string)$attributes[self::FIELD_PUBLICATION_DATE_SEASON]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PUBLICATION_DATE_SEASON, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LAST_REVISION_DATE])) {
            if (isset($type->lastRevisionDate)) {
                $type->lastRevisionDate->setValue((string)$attributes[self::FIELD_LAST_REVISION_DATE]);
            } else {
                $type->setLastRevisionDate((string)$attributes[self::FIELD_LAST_REVISION_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LAST_REVISION_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ACCESSION_NUMBER])) {
            if (isset($type->accessionNumber)) {
                $type->accessionNumber->setValue((string)$attributes[self::FIELD_ACCESSION_NUMBER]);
            } else {
                $type->setAccessionNumber((string)$attributes[self::FIELD_ACCESSION_NUMBER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ACCESSION_NUMBER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PAGE_STRING])) {
            if (isset($type->pageString)) {
                $type->pageString->setValue((string)$attributes[self::FIELD_PAGE_STRING]);
            } else {
                $type->setPageString((string)$attributes[self::FIELD_PAGE_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PAGE_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FIRST_PAGE])) {
            if (isset($type->firstPage)) {
                $type->firstPage->setValue((string)$attributes[self::FIELD_FIRST_PAGE]);
            } else {
                $type->setFirstPage((string)$attributes[self::FIELD_FIRST_PAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FIRST_PAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LAST_PAGE])) {
            if (isset($type->lastPage)) {
                $type->lastPage->setValue((string)$attributes[self::FIELD_LAST_PAGE]);
            } else {
                $type->setLastPage((string)$attributes[self::FIELD_LAST_PAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LAST_PAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PAGE_COUNT])) {
            if (isset($type->pageCount)) {
                $type->pageCount->setValue((string)$attributes[self::FIELD_PAGE_COUNT]);
            } else {
                $type->setPageCount((string)$attributes[self::FIELD_PAGE_COUNT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PAGE_COUNT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COPYRIGHT])) {
            if (isset($type->copyright)) {
                $type->copyright->setValue((string)$attributes[self::FIELD_COPYRIGHT]);
            } else {
                $type->setCopyright((string)$attributes[self::FIELD_COPYRIGHT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COPYRIGHT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->volume) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VOLUME]) {
            $xw->writeAttribute(self::FIELD_VOLUME, $this->volume->_getValueAsString());
        }
        if (isset($this->issue) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ISSUE]) {
            $xw->writeAttribute(self::FIELD_ISSUE, $this->issue->_getValueAsString());
        }
        if (isset($this->articleDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ARTICLE_DATE]) {
            $xw->writeAttribute(self::FIELD_ARTICLE_DATE, $this->articleDate->_getValueAsString());
        }
        if (isset($this->publicationDateText) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PUBLICATION_DATE_TEXT]) {
            $xw->writeAttribute(self::FIELD_PUBLICATION_DATE_TEXT, $this->publicationDateText->_getValueAsString());
        }
        if (isset($this->publicationDateSeason) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PUBLICATION_DATE_SEASON]) {
            $xw->writeAttribute(self::FIELD_PUBLICATION_DATE_SEASON, $this->publicationDateSeason->_getValueAsString());
        }
        if (isset($this->lastRevisionDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LAST_REVISION_DATE]) {
            $xw->writeAttribute(self::FIELD_LAST_REVISION_DATE, $this->lastRevisionDate->_getValueAsString());
        }
        if (isset($this->accessionNumber) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ACCESSION_NUMBER]) {
            $xw->writeAttribute(self::FIELD_ACCESSION_NUMBER, $this->accessionNumber->_getValueAsString());
        }
        if (isset($this->pageString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PAGE_STRING]) {
            $xw->writeAttribute(self::FIELD_PAGE_STRING, $this->pageString->_getValueAsString());
        }
        if (isset($this->firstPage) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIRST_PAGE]) {
            $xw->writeAttribute(self::FIELD_FIRST_PAGE, $this->firstPage->_getValueAsString());
        }
        if (isset($this->lastPage) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LAST_PAGE]) {
            $xw->writeAttribute(self::FIELD_LAST_PAGE, $this->lastPage->_getValueAsString());
        }
        if (isset($this->pageCount) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PAGE_COUNT]) {
            $xw->writeAttribute(self::FIELD_PAGE_COUNT, $this->pageCount->_getValueAsString());
        }
        if (isset($this->copyright) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COPYRIGHT]) {
            $xw->writeAttribute(self::FIELD_COPYRIGHT, $this->copyright->_getValueAsString());
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
        if (isset($this->volume)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VOLUME]
                || $this->volume->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VOLUME);
            $this->volume->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VOLUME]);
            $xw->endElement();
        }
        if (isset($this->issue)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ISSUE]
                || $this->issue->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ISSUE);
            $this->issue->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ISSUE]);
            $xw->endElement();
        }
        if (isset($this->articleDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ARTICLE_DATE]
                || $this->articleDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ARTICLE_DATE);
            $this->articleDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ARTICLE_DATE]);
            $xw->endElement();
        }
        if (isset($this->publicationDateText)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PUBLICATION_DATE_TEXT]
                || $this->publicationDateText->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PUBLICATION_DATE_TEXT);
            $this->publicationDateText->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PUBLICATION_DATE_TEXT]);
            $xw->endElement();
        }
        if (isset($this->publicationDateSeason)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PUBLICATION_DATE_SEASON]
                || $this->publicationDateSeason->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PUBLICATION_DATE_SEASON);
            $this->publicationDateSeason->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PUBLICATION_DATE_SEASON]);
            $xw->endElement();
        }
        if (isset($this->lastRevisionDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LAST_REVISION_DATE]
                || $this->lastRevisionDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LAST_REVISION_DATE);
            $this->lastRevisionDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LAST_REVISION_DATE]);
            $xw->endElement();
        }
        if (isset($this->language)) {
            foreach ($this->language as $v) {
                $xw->startElement(self::FIELD_LANGUAGE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->accessionNumber)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ACCESSION_NUMBER]
                || $this->accessionNumber->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ACCESSION_NUMBER);
            $this->accessionNumber->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ACCESSION_NUMBER]);
            $xw->endElement();
        }
        if (isset($this->pageString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PAGE_STRING]
                || $this->pageString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PAGE_STRING);
            $this->pageString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PAGE_STRING]);
            $xw->endElement();
        }
        if (isset($this->firstPage)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FIRST_PAGE]
                || $this->firstPage->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FIRST_PAGE);
            $this->firstPage->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FIRST_PAGE]);
            $xw->endElement();
        }
        if (isset($this->lastPage)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LAST_PAGE]
                || $this->lastPage->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LAST_PAGE);
            $this->lastPage->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LAST_PAGE]);
            $xw->endElement();
        }
        if (isset($this->pageCount)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PAGE_COUNT]
                || $this->pageCount->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PAGE_COUNT);
            $this->pageCount->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PAGE_COUNT]);
            $xw->endElement();
        }
        if (isset($this->copyright)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COPYRIGHT]
                || $this->copyright->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COPYRIGHT);
            $this->copyright->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COPYRIGHT]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->publishedIn) || property_exists($json, self::FIELD_PUBLISHED_IN)) {
            if (is_array($json->publishedIn)) {
                $type->setPublishedIn(FHIRCitationPublishedIn::jsonUnserialize(reset($json->publishedIn), $config));
            } else {
                $type->setPublishedIn(FHIRCitationPublishedIn::jsonUnserialize($json->publishedIn, $config));
            }
        }
        if (isset($json->citedMedium) || property_exists($json, self::FIELD_CITED_MEDIUM)) {
            if (is_array($json->citedMedium)) {
                $type->setCitedMedium(FHIRCodeableConcept::jsonUnserialize(reset($json->citedMedium), $config));
            } else {
                $type->setCitedMedium(FHIRCodeableConcept::jsonUnserialize($json->citedMedium, $config));
            }
        }
        if (isset($json->volume)
            || isset($json->_volume)
            || property_exists($json, self::FIELD_VOLUME)
            || property_exists($json, self::FIELD_VOLUME_EXT)) {
            $v = $json->_volume ?? new \stdClass();
            $v->value = $json->volume ?? null;
            $type->setVolume(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->issue)
            || isset($json->_issue)
            || property_exists($json, self::FIELD_ISSUE)
            || property_exists($json, self::FIELD_ISSUE_EXT)) {
            $v = $json->_issue ?? new \stdClass();
            $v->value = $json->issue ?? null;
            $type->setIssue(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->articleDate)
            || isset($json->_articleDate)
            || property_exists($json, self::FIELD_ARTICLE_DATE)
            || property_exists($json, self::FIELD_ARTICLE_DATE_EXT)) {
            $v = $json->_articleDate ?? new \stdClass();
            $v->value = $json->articleDate ?? null;
            $type->setArticleDate(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->publicationDateText)
            || isset($json->_publicationDateText)
            || property_exists($json, self::FIELD_PUBLICATION_DATE_TEXT)
            || property_exists($json, self::FIELD_PUBLICATION_DATE_TEXT_EXT)) {
            $v = $json->_publicationDateText ?? new \stdClass();
            $v->value = $json->publicationDateText ?? null;
            $type->setPublicationDateText(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->publicationDateSeason)
            || isset($json->_publicationDateSeason)
            || property_exists($json, self::FIELD_PUBLICATION_DATE_SEASON)
            || property_exists($json, self::FIELD_PUBLICATION_DATE_SEASON_EXT)) {
            $v = $json->_publicationDateSeason ?? new \stdClass();
            $v->value = $json->publicationDateSeason ?? null;
            $type->setPublicationDateSeason(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->lastRevisionDate)
            || isset($json->_lastRevisionDate)
            || property_exists($json, self::FIELD_LAST_REVISION_DATE)
            || property_exists($json, self::FIELD_LAST_REVISION_DATE_EXT)) {
            $v = $json->_lastRevisionDate ?? new \stdClass();
            $v->value = $json->lastRevisionDate ?? null;
            $type->setLastRevisionDate(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->language) || property_exists($json, self::FIELD_LANGUAGE)) {
            if (is_object($json->language)) {
                $vals = [$json->language];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_LANGUAGE, true);
            } else {
                $vals = $json->language;
            }
            foreach($vals as $v) {
                $type->addLanguage(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->accessionNumber)
            || isset($json->_accessionNumber)
            || property_exists($json, self::FIELD_ACCESSION_NUMBER)
            || property_exists($json, self::FIELD_ACCESSION_NUMBER_EXT)) {
            $v = $json->_accessionNumber ?? new \stdClass();
            $v->value = $json->accessionNumber ?? null;
            $type->setAccessionNumber(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->pageString)
            || isset($json->_pageString)
            || property_exists($json, self::FIELD_PAGE_STRING)
            || property_exists($json, self::FIELD_PAGE_STRING_EXT)) {
            $v = $json->_pageString ?? new \stdClass();
            $v->value = $json->pageString ?? null;
            $type->setPageString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->firstPage)
            || isset($json->_firstPage)
            || property_exists($json, self::FIELD_FIRST_PAGE)
            || property_exists($json, self::FIELD_FIRST_PAGE_EXT)) {
            $v = $json->_firstPage ?? new \stdClass();
            $v->value = $json->firstPage ?? null;
            $type->setFirstPage(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->lastPage)
            || isset($json->_lastPage)
            || property_exists($json, self::FIELD_LAST_PAGE)
            || property_exists($json, self::FIELD_LAST_PAGE_EXT)) {
            $v = $json->_lastPage ?? new \stdClass();
            $v->value = $json->lastPage ?? null;
            $type->setLastPage(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->pageCount)
            || isset($json->_pageCount)
            || property_exists($json, self::FIELD_PAGE_COUNT)
            || property_exists($json, self::FIELD_PAGE_COUNT_EXT)) {
            $v = $json->_pageCount ?? new \stdClass();
            $v->value = $json->pageCount ?? null;
            $type->setPageCount(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->copyright)
            || isset($json->_copyright)
            || property_exists($json, self::FIELD_COPYRIGHT)
            || property_exists($json, self::FIELD_COPYRIGHT_EXT)) {
            $v = $json->_copyright ?? new \stdClass();
            $v->value = $json->copyright ?? null;
            $type->setCopyright(FHIRMarkdown::jsonUnserialize($v, $config));
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
            if ($this->volume->_nonValueFieldDefined()) {
                $ext = $this->volume->jsonSerialize();
                unset($ext->value);
                $out->_volume = $ext;
            }
        }
        if (isset($this->issue)) {
            if (null !== ($val = $this->issue->getValue())) {
                $out->issue = $val;
            }
            if ($this->issue->_nonValueFieldDefined()) {
                $ext = $this->issue->jsonSerialize();
                unset($ext->value);
                $out->_issue = $ext;
            }
        }
        if (isset($this->articleDate)) {
            if (null !== ($val = $this->articleDate->getValue())) {
                $out->articleDate = $val;
            }
            if ($this->articleDate->_nonValueFieldDefined()) {
                $ext = $this->articleDate->jsonSerialize();
                unset($ext->value);
                $out->_articleDate = $ext;
            }
        }
        if (isset($this->publicationDateText)) {
            if (null !== ($val = $this->publicationDateText->getValue())) {
                $out->publicationDateText = $val;
            }
            if ($this->publicationDateText->_nonValueFieldDefined()) {
                $ext = $this->publicationDateText->jsonSerialize();
                unset($ext->value);
                $out->_publicationDateText = $ext;
            }
        }
        if (isset($this->publicationDateSeason)) {
            if (null !== ($val = $this->publicationDateSeason->getValue())) {
                $out->publicationDateSeason = $val;
            }
            if ($this->publicationDateSeason->_nonValueFieldDefined()) {
                $ext = $this->publicationDateSeason->jsonSerialize();
                unset($ext->value);
                $out->_publicationDateSeason = $ext;
            }
        }
        if (isset($this->lastRevisionDate)) {
            if (null !== ($val = $this->lastRevisionDate->getValue())) {
                $out->lastRevisionDate = $val;
            }
            if ($this->lastRevisionDate->_nonValueFieldDefined()) {
                $ext = $this->lastRevisionDate->jsonSerialize();
                unset($ext->value);
                $out->_lastRevisionDate = $ext;
            }
        }
        if (isset($this->language) && [] !== $this->language) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_LANGUAGE) && 1 === count($this->language)) {
                $out->language = $this->language[0];
            } else {
                $out->language = $this->language;
            }
        }
        if (isset($this->accessionNumber)) {
            if (null !== ($val = $this->accessionNumber->getValue())) {
                $out->accessionNumber = $val;
            }
            if ($this->accessionNumber->_nonValueFieldDefined()) {
                $ext = $this->accessionNumber->jsonSerialize();
                unset($ext->value);
                $out->_accessionNumber = $ext;
            }
        }
        if (isset($this->pageString)) {
            if (null !== ($val = $this->pageString->getValue())) {
                $out->pageString = $val;
            }
            if ($this->pageString->_nonValueFieldDefined()) {
                $ext = $this->pageString->jsonSerialize();
                unset($ext->value);
                $out->_pageString = $ext;
            }
        }
        if (isset($this->firstPage)) {
            if (null !== ($val = $this->firstPage->getValue())) {
                $out->firstPage = $val;
            }
            if ($this->firstPage->_nonValueFieldDefined()) {
                $ext = $this->firstPage->jsonSerialize();
                unset($ext->value);
                $out->_firstPage = $ext;
            }
        }
        if (isset($this->lastPage)) {
            if (null !== ($val = $this->lastPage->getValue())) {
                $out->lastPage = $val;
            }
            if ($this->lastPage->_nonValueFieldDefined()) {
                $ext = $this->lastPage->jsonSerialize();
                unset($ext->value);
                $out->_lastPage = $ext;
            }
        }
        if (isset($this->pageCount)) {
            if (null !== ($val = $this->pageCount->getValue())) {
                $out->pageCount = $val;
            }
            if ($this->pageCount->_nonValueFieldDefined()) {
                $ext = $this->pageCount->jsonSerialize();
                unset($ext->value);
                $out->_pageCount = $ext;
            }
        }
        if (isset($this->copyright)) {
            if (null !== ($val = $this->copyright->getValue())) {
                $out->copyright = $val;
            }
            if ($this->copyright->_nonValueFieldDefined()) {
                $ext = $this->copyright->jsonSerialize();
                unset($ext->value);
                $out->_copyright = $ext;
            }
        }
        return $out;
    }
}