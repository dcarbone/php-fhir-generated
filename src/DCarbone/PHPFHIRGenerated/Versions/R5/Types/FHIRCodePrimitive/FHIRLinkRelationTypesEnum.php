<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueMinLengthRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueOneOfRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRLinkRelationTypesEnum extends FHIRCodePrimitive
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_LINK_RELATION_TYPES_ENUM;


    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_VALUE => [
            ValuePatternMatchRule::NAME => '/^[^\\s]+( [^\\s]+)*$/',
            ValueMinLengthRule::NAME => 1,
            ValueOneOfRule::NAME => [
                0 => 'about',
                1 => 'acl',
                2 => 'alternate',
                3 => 'amphtml',
                4 => 'appendix',
                5 => 'apple-touch-icon',
                6 => 'apple-touch-startup-image',
                7 => 'archives',
                8 => 'author',
                9 => 'blocked-by',
                10 => 'bookmark',
                11 => 'canonical',
                12 => 'chapter',
                13 => 'cite-as',
                14 => 'collection',
                15 => 'contents',
                16 => 'convertedFrom',
                17 => 'copyright',
                18 => 'create-form',
                19 => 'current',
                20 => 'describedby',
                21 => 'describes',
                22 => 'disclosure',
                23 => 'dns-prefetch',
                24 => 'duplicate',
                25 => 'edit',
                26 => 'edit-form',
                27 => 'edit-media',
                28 => 'enclosure',
                29 => 'external',
                30 => 'first',
                31 => 'glossary',
                32 => 'help',
                33 => 'hosts',
                34 => 'hub',
                35 => 'icon',
                36 => 'index',
                37 => 'intervalAfter',
                38 => 'intervalBefore',
                39 => 'intervalContains',
                40 => 'intervalDisjoint',
                41 => 'intervalDuring',
                42 => 'intervalEquals',
                43 => 'intervalFinishedBy',
                44 => 'intervalFinishes',
                45 => 'intervalIn',
                46 => 'intervalMeets',
                47 => 'intervalMetBy',
                48 => 'intervalOverlappedBy',
                49 => 'intervalOverlaps',
                50 => 'intervalStartedBy',
                51 => 'intervalStarts',
                52 => 'item',
                53 => 'last',
                54 => 'latest-version',
                55 => 'license',
                56 => 'linkset',
                57 => 'lrdd',
                58 => 'manifest',
                59 => 'mask-icon',
                60 => 'media-feed',
                61 => 'memento',
                62 => 'micropub',
                63 => 'modulepreload',
                64 => 'monitor',
                65 => 'monitor-group',
                66 => 'next',
                67 => 'next-archive',
                68 => 'nofollow',
                69 => 'noopener',
                70 => 'noreferrer',
                71 => 'opener',
                72 => 'openid2.local_id',
                73 => 'openid2.provider',
                74 => 'original',
                75 => 'P3Pv1',
                76 => 'payment',
                77 => 'pingback',
                78 => 'preconnect',
                79 => 'predecessor-version',
                80 => 'prefetch',
                81 => 'preload',
                82 => 'prerender',
                83 => 'prev',
                84 => 'preview',
                85 => 'previous',
                86 => 'prev-archive',
                87 => 'privacy-policy',
                88 => 'profile',
                89 => 'publication',
                90 => 'related',
                91 => 'restconf',
                92 => 'replies',
                93 => 'ruleinput',
                94 => 'search',
                95 => 'section',
                96 => 'self',
                97 => 'service',
                98 => 'service-desc',
                99 => 'service-doc',
                100 => 'service-meta',
                101 => 'sponsored',
                102 => 'start',
                103 => 'status',
                104 => 'stylesheet',
                105 => 'subsection',
                106 => 'successor-version',
                107 => 'sunset',
                108 => 'tag',
                109 => 'terms-of-service',
                110 => 'timegate',
                111 => 'timemap',
                112 => 'type',
                113 => 'ugc',
                114 => 'up',
                115 => 'version-history',
                116 => 'via',
                117 => 'webmention',
                118 => 'working-copy',
                119 => 'working-copy-of',
            ],
        ],
    ];

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:201 */
}