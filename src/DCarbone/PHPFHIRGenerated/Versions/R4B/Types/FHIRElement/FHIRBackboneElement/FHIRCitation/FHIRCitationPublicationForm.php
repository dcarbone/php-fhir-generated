<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:23+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 */
class FHIRCitationPublicationForm extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM;

    /* class_default.php:47 */
    public const FIELD_PUBLISHED_IN = 'publishedIn';
    public const FIELD_PERIODIC_RELEASE = 'periodicRelease';
    public const FIELD_ARTICLE_DATE = 'articleDate';
    public const FIELD_ARTICLE_DATE_EXT = '_articleDate';
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

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_ARTICLE_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LAST_REVISION_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ACCESSION_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PAGE_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FIRST_PAGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LAST_PAGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PAGE_COUNT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COPYRIGHT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The collection the cited article or artifact is published in.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn 
     */
    protected FHIRCitationPublishedIn $publishedIn;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The specific issue in which the cited article resides.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease 
     */
    protected FHIRCitationPeriodicRelease $periodicRelease;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was added to the database, or the date the article was
     * released (which may differ from the journal issue publication date).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $articleDate;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was last revised or updated in the database.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $lastRevisionDate;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Language in which this form of the article is published.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $language;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Entry number or identifier for inclusion in a database.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $accessionNumber;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for full display of pagination.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $pageString;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of first page.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $firstPage;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of last page.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $lastPage;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual or approximate number of pages or screens.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $copyright;

    /* constructor.php:62 */
    /**
     * FHIRCitationPublicationForm Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn $publishedIn
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease $periodicRelease
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $articleDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $lastRevisionDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $language
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $accessionNumber
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $pageString
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $firstPage
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $lastPage
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $pageCount
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown $copyright
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCitationPublishedIn $publishedIn = null,
                                null|FHIRCitationPeriodicRelease $periodicRelease = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $articleDate = null,
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
        if (null !== $periodicRelease) {
            $this->setPeriodicRelease($periodicRelease);
        }
        if (null !== $articleDate) {
            $this->setArticleDate($articleDate);
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

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The collection the cited article or artifact is published in.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn $publishedIn
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
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The specific issue in which the cited article resides.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease
     */
    public function getPeriodicRelease(): null|FHIRCitationPeriodicRelease
    {
        return $this->periodicRelease ?? null;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The specific issue in which the cited article resides.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease $periodicRelease
     * @return static
     */
    public function setPeriodicRelease(null|FHIRCitationPeriodicRelease $periodicRelease): self
    {
        if (null === $periodicRelease) {
            unset($this->periodicRelease);
            return $this;
        }
        $this->periodicRelease = $periodicRelease;
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
     * The date the article was added to the database, or the date the article was
     * released (which may differ from the journal issue publication date).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime
     */
    public function getArticleDate(): null|FHIRDateTime
    {
        return $this->articleDate ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was added to the database, or the date the article was
     * released (which may differ from the journal issue publication date).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $articleDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setArticleDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $articleDate,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $articleDate) {
            unset($this->articleDate);
            return $this;
        }
        if (!($articleDate instanceof FHIRDateTime)) {
            $articleDate = new FHIRDateTime(value: $articleDate);
        }
        $this->articleDate = $articleDate;
        if ($this->_valueXMLLocations[self::FIELD_ARTICLE_DATE] !== $valueXMLLocation) {
            $this->_setArticleDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the articleDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getArticleDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ARTICLE_DATE];
    }

    /**
     * Set the location the "value" field of the articleDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setArticleDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ARTICLE_DATE] = $valueXMLLocation;
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
     * The date the article was last revised or updated in the database.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime
     */
    public function getLastRevisionDate(): null|FHIRDateTime
    {
        return $this->lastRevisionDate ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was last revised or updated in the database.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $lastRevisionDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLastRevisionDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $lastRevisionDate,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $lastRevisionDate) {
            unset($this->lastRevisionDate);
            return $this;
        }
        if (!($lastRevisionDate instanceof FHIRDateTime)) {
            $lastRevisionDate = new FHIRDateTime(value: $lastRevisionDate);
        }
        $this->lastRevisionDate = $lastRevisionDate;
        if ($this->_valueXMLLocations[self::FIELD_LAST_REVISION_DATE] !== $valueXMLLocation) {
            $this->_setLastRevisionDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the lastRevisionDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getLastRevisionDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LAST_REVISION_DATE];
    }

    /**
     * Set the location the "value" field of the lastRevisionDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setLastRevisionDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LAST_REVISION_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Language in which this form of the article is published.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getLanguage(): array
    {
        return $this->language ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
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
     * Language in which this form of the article is published.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $language
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
     * Language in which this form of the article is published.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$language
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Entry number or identifier for inclusion in a database.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getAccessionNumber(): null|FHIRString
    {
        return $this->accessionNumber ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Entry number or identifier for inclusion in a database.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $accessionNumber
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAccessionNumber(null|string|FHIRStringPrimitive|FHIRString $accessionNumber,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $accessionNumber) {
            unset($this->accessionNumber);
            return $this;
        }
        if (!($accessionNumber instanceof FHIRString)) {
            $accessionNumber = new FHIRString(value: $accessionNumber);
        }
        $this->accessionNumber = $accessionNumber;
        if ($this->_valueXMLLocations[self::FIELD_ACCESSION_NUMBER] !== $valueXMLLocation) {
            $this->_setAccessionNumberValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the accessionNumber element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAccessionNumberValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ACCESSION_NUMBER];
    }

    /**
     * Set the location the "value" field of the accessionNumber element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAccessionNumberValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ACCESSION_NUMBER] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for full display of pagination.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getPageString(): null|FHIRString
    {
        return $this->pageString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for full display of pagination.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $pageString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPageString(null|string|FHIRStringPrimitive|FHIRString $pageString,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $pageString) {
            unset($this->pageString);
            return $this;
        }
        if (!($pageString instanceof FHIRString)) {
            $pageString = new FHIRString(value: $pageString);
        }
        $this->pageString = $pageString;
        if ($this->_valueXMLLocations[self::FIELD_PAGE_STRING] !== $valueXMLLocation) {
            $this->_setPageStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the pageString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPageStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PAGE_STRING];
    }

    /**
     * Set the location the "value" field of the pageString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPageStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PAGE_STRING] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of first page.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getFirstPage(): null|FHIRString
    {
        return $this->firstPage ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of first page.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $firstPage
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFirstPage(null|string|FHIRStringPrimitive|FHIRString $firstPage,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $firstPage) {
            unset($this->firstPage);
            return $this;
        }
        if (!($firstPage instanceof FHIRString)) {
            $firstPage = new FHIRString(value: $firstPage);
        }
        $this->firstPage = $firstPage;
        if ($this->_valueXMLLocations[self::FIELD_FIRST_PAGE] !== $valueXMLLocation) {
            $this->_setFirstPageValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the firstPage element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getFirstPageValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_FIRST_PAGE];
    }

    /**
     * Set the location the "value" field of the firstPage element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setFirstPageValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_FIRST_PAGE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of last page.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getLastPage(): null|FHIRString
    {
        return $this->lastPage ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of last page.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $lastPage
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLastPage(null|string|FHIRStringPrimitive|FHIRString $lastPage,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $lastPage) {
            unset($this->lastPage);
            return $this;
        }
        if (!($lastPage instanceof FHIRString)) {
            $lastPage = new FHIRString(value: $lastPage);
        }
        $this->lastPage = $lastPage;
        if ($this->_valueXMLLocations[self::FIELD_LAST_PAGE] !== $valueXMLLocation) {
            $this->_setLastPageValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the lastPage element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getLastPageValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LAST_PAGE];
    }

    /**
     * Set the location the "value" field of the lastPage element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setLastPageValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LAST_PAGE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual or approximate number of pages or screens.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getPageCount(): null|FHIRString
    {
        return $this->pageCount ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual or approximate number of pages or screens.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $pageCount
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPageCount(null|string|FHIRStringPrimitive|FHIRString $pageCount,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $pageCount) {
            unset($this->pageCount);
            return $this;
        }
        if (!($pageCount instanceof FHIRString)) {
            $pageCount = new FHIRString(value: $pageCount);
        }
        $this->pageCount = $pageCount;
        if ($this->_valueXMLLocations[self::FIELD_PAGE_COUNT] !== $valueXMLLocation) {
            $this->_setPageCountValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the pageCount element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPageCountValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PAGE_COUNT];
    }

    /**
     * Set the location the "value" field of the pageCount element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPageCountValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PAGE_COUNT] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown $copyright
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCopyright(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $copyright,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $copyright) {
            unset($this->copyright);
            return $this;
        }
        if (!($copyright instanceof FHIRMarkdown)) {
            $copyright = new FHIRMarkdown(value: $copyright);
        }
        $this->copyright = $copyright;
        if ($this->_valueXMLLocations[self::FIELD_COPYRIGHT] !== $valueXMLLocation) {
            $this->_setCopyrightValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the copyright element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCopyrightValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_COPYRIGHT];
    }

    /**
     * Set the location the "value" field of the copyright element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCopyrightValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_COPYRIGHT] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:195 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PUBLISHED_IN === $cen) {
                $type->setPublishedIn(FHIRCitationPublishedIn::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIODIC_RELEASE === $cen) {
                $type->setPeriodicRelease(FHIRCitationPeriodicRelease::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ARTICLE_DATE === $cen) {
                $type->setArticleDate(FHIRDateTime::xmlUnserialize($ce, $config));
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
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ARTICLE_DATE])) {
            if (isset($type->articleDate)) {
                $type->articleDate->setValue((string)$attributes[self::FIELD_ARTICLE_DATE]);
                $type->_setArticleDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setArticleDate((string)$attributes[self::FIELD_ARTICLE_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LAST_REVISION_DATE])) {
            if (isset($type->lastRevisionDate)) {
                $type->lastRevisionDate->setValue((string)$attributes[self::FIELD_LAST_REVISION_DATE]);
                $type->_setLastRevisionDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLastRevisionDate((string)$attributes[self::FIELD_LAST_REVISION_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ACCESSION_NUMBER])) {
            if (isset($type->accessionNumber)) {
                $type->accessionNumber->setValue((string)$attributes[self::FIELD_ACCESSION_NUMBER]);
                $type->_setAccessionNumberValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAccessionNumber((string)$attributes[self::FIELD_ACCESSION_NUMBER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PAGE_STRING])) {
            if (isset($type->pageString)) {
                $type->pageString->setValue((string)$attributes[self::FIELD_PAGE_STRING]);
                $type->_setPageStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPageString((string)$attributes[self::FIELD_PAGE_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIRST_PAGE])) {
            if (isset($type->firstPage)) {
                $type->firstPage->setValue((string)$attributes[self::FIELD_FIRST_PAGE]);
                $type->_setFirstPageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setFirstPage((string)$attributes[self::FIELD_FIRST_PAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LAST_PAGE])) {
            if (isset($type->lastPage)) {
                $type->lastPage->setValue((string)$attributes[self::FIELD_LAST_PAGE]);
                $type->_setLastPageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLastPage((string)$attributes[self::FIELD_LAST_PAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PAGE_COUNT])) {
            if (isset($type->pageCount)) {
                $type->pageCount->setValue((string)$attributes[self::FIELD_PAGE_COUNT]);
                $type->_setPageCountValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPageCount((string)$attributes[self::FIELD_PAGE_COUNT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COPYRIGHT])) {
            if (isset($type->copyright)) {
                $type->copyright->setValue((string)$attributes[self::FIELD_COPYRIGHT]);
                $type->_setCopyrightValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCopyright((string)$attributes[self::FIELD_COPYRIGHT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($this->articleDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ARTICLE_DATE]) {
            $xw->writeAttribute(self::FIELD_ARTICLE_DATE, $this->articleDate->_getFormattedValue());
        }
        if (isset($this->lastRevisionDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LAST_REVISION_DATE]) {
            $xw->writeAttribute(self::FIELD_LAST_REVISION_DATE, $this->lastRevisionDate->_getFormattedValue());
        }
        if (isset($this->accessionNumber) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ACCESSION_NUMBER]) {
            $xw->writeAttribute(self::FIELD_ACCESSION_NUMBER, $this->accessionNumber->_getFormattedValue());
        }
        if (isset($this->pageString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PAGE_STRING]) {
            $xw->writeAttribute(self::FIELD_PAGE_STRING, $this->pageString->_getFormattedValue());
        }
        if (isset($this->firstPage) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FIRST_PAGE]) {
            $xw->writeAttribute(self::FIELD_FIRST_PAGE, $this->firstPage->_getFormattedValue());
        }
        if (isset($this->lastPage) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LAST_PAGE]) {
            $xw->writeAttribute(self::FIELD_LAST_PAGE, $this->lastPage->_getFormattedValue());
        }
        if (isset($this->pageCount) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PAGE_COUNT]) {
            $xw->writeAttribute(self::FIELD_PAGE_COUNT, $this->pageCount->_getFormattedValue());
        }
        if (isset($this->copyright) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COPYRIGHT]) {
            $xw->writeAttribute(self::FIELD_COPYRIGHT, $this->copyright->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->publishedIn)) {
            $xw->startElement(self::FIELD_PUBLISHED_IN);
            $this->publishedIn->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->periodicRelease)) {
            $xw->startElement(self::FIELD_PERIODIC_RELEASE);
            $this->periodicRelease->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->articleDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ARTICLE_DATE]
                || $this->articleDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ARTICLE_DATE);
            $this->articleDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ARTICLE_DATE]);
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
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
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
        if (isset($json[self::FIELD_PUBLISHED_IN]) || array_key_exists(self::FIELD_PUBLISHED_IN, $json)) {
            $type->setPublishedIn(FHIRCitationPublishedIn::jsonUnserialize($json[self::FIELD_PUBLISHED_IN], $config));
        }
        if (isset($json[self::FIELD_PERIODIC_RELEASE]) || array_key_exists(self::FIELD_PERIODIC_RELEASE, $json)) {
            $type->setPeriodicRelease(FHIRCitationPeriodicRelease::jsonUnserialize($json[self::FIELD_PERIODIC_RELEASE], $config));
        }
        if (isset($json[self::FIELD_ARTICLE_DATE])
            || isset($json[self::FIELD_ARTICLE_DATE_EXT])
            || array_key_exists(self::FIELD_ARTICLE_DATE, $json)
            || array_key_exists(self::FIELD_ARTICLE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_ARTICLE_DATE] ?? null;
            $type->setArticleDate(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_ARTICLE_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_LAST_REVISION_DATE])
            || isset($json[self::FIELD_LAST_REVISION_DATE_EXT])
            || array_key_exists(self::FIELD_LAST_REVISION_DATE, $json)
            || array_key_exists(self::FIELD_LAST_REVISION_DATE_EXT, $json)) {
            $value = $json[self::FIELD_LAST_REVISION_DATE] ?? null;
            $type->setLastRevisionDate(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_LAST_REVISION_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_LANGUAGE]) || array_key_exists(self::FIELD_LANGUAGE, $json)) {
            $vs = $json[self::FIELD_LANGUAGE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addLanguage(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_ACCESSION_NUMBER])
            || isset($json[self::FIELD_ACCESSION_NUMBER_EXT])
            || array_key_exists(self::FIELD_ACCESSION_NUMBER, $json)
            || array_key_exists(self::FIELD_ACCESSION_NUMBER_EXT, $json)) {
            $value = $json[self::FIELD_ACCESSION_NUMBER] ?? null;
            $type->setAccessionNumber(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_ACCESSION_NUMBER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PAGE_STRING])
            || isset($json[self::FIELD_PAGE_STRING_EXT])
            || array_key_exists(self::FIELD_PAGE_STRING, $json)
            || array_key_exists(self::FIELD_PAGE_STRING_EXT, $json)) {
            $value = $json[self::FIELD_PAGE_STRING] ?? null;
            $type->setPageString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_PAGE_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_FIRST_PAGE])
            || isset($json[self::FIELD_FIRST_PAGE_EXT])
            || array_key_exists(self::FIELD_FIRST_PAGE, $json)
            || array_key_exists(self::FIELD_FIRST_PAGE_EXT, $json)) {
            $value = $json[self::FIELD_FIRST_PAGE] ?? null;
            $type->setFirstPage(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_FIRST_PAGE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_LAST_PAGE])
            || isset($json[self::FIELD_LAST_PAGE_EXT])
            || array_key_exists(self::FIELD_LAST_PAGE, $json)
            || array_key_exists(self::FIELD_LAST_PAGE_EXT, $json)) {
            $value = $json[self::FIELD_LAST_PAGE] ?? null;
            $type->setLastPage(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_LAST_PAGE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PAGE_COUNT])
            || isset($json[self::FIELD_PAGE_COUNT_EXT])
            || array_key_exists(self::FIELD_PAGE_COUNT, $json)
            || array_key_exists(self::FIELD_PAGE_COUNT_EXT, $json)) {
            $value = $json[self::FIELD_PAGE_COUNT] ?? null;
            $type->setPageCount(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_PAGE_COUNT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_COPYRIGHT])
            || isset($json[self::FIELD_COPYRIGHT_EXT])
            || array_key_exists(self::FIELD_COPYRIGHT, $json)
            || array_key_exists(self::FIELD_COPYRIGHT_EXT, $json)) {
            $value = $json[self::FIELD_COPYRIGHT] ?? null;
            $type->setCopyright(FHIRMarkdown::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMarkdown::FIELD_VALUE => $value]) + ($json[self::FIELD_COPYRIGHT_EXT] ?? []),
                $config,
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
        if (isset($this->periodicRelease)) {
            $out->periodicRelease = $this->periodicRelease;
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
            $out->language = $this->language;
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