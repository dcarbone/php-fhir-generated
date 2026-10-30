<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Encoding;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 30th, 2026 00:59+0000
 *
 * PHPFHIR Copyright:
 *
 * Copyright 2016-2026 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 */


class UnserializeConfig
{
    private int $_libxmlOpts = LIBXML_NONET | LIBXML_BIGLINES | LIBXML_PARSEHUGE | LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NOXMLDECL;
    private int $_jsonDecodeMaxDepth = 512;
    private int $_jsonDecodeOpts = JSON_BIGINT_AS_STRING;
    private ProfileResolutionEnum $_profileResolution = ProfileResolutionEnum::OFF;
    private OnUnknownProfileEnum $_onUnknownProfile = OnUnknownProfileEnum::FALLBACK;
    private OnAmbiguousProfileEnum $_onAmbiguousProfile = OnAmbiguousProfileEnum::FIRST_DECLARED;
    private OnProfileVersionMismatchEnum $_onProfileVersionMismatch = OnProfileVersionMismatchEnum::IGNORE_VERSION;
    private OnProfileViolationEnum $_onProfileViolation = OnProfileViolationEnum::KEEP;

    public function __construct(null|int $libxmlOpts = null,
                                null|int $jsonDecodeMaxDepth = null,
                                null|int $jsonDecodeOpts = null,
                                null|string|ProfileResolutionEnum $profileResolution = null,
                                null|string|OnUnknownProfileEnum $onUnknownProfile = null,
                                null|string|OnAmbiguousProfileEnum $onAmbiguousProfile = null,
                                null|string|OnProfileVersionMismatchEnum $onProfileVersionMismatch = null,
                                null|string|OnProfileViolationEnum $onProfileViolation = null)
    {
        if (null !== $libxmlOpts) {
            $this->setLibxmlOpts($libxmlOpts);
        }
        if (null !== $jsonDecodeMaxDepth) {
            $this->setJSONDecodeMaxDepth($jsonDecodeMaxDepth);
        }
        if (null !== $jsonDecodeOpts) {
            $this->setJSONDecodeOpts($jsonDecodeOpts);
        }
        if (null !== $profileResolution) {
            $this->setProfileResolution($profileResolution);
        }
        if (null !== $onUnknownProfile) {
            $this->setOnUnknownProfile($onUnknownProfile);
        }
        if (null !== $onAmbiguousProfile) {
            $this->setOnAmbiguousProfile($onAmbiguousProfile);
        }
        if (null !== $onProfileVersionMismatch) {
            $this->setOnProfileVersionMismatch($onProfileVersionMismatch);
        }
        if (null !== $onProfileViolation) {
            $this->setOnProfileViolation($onProfileViolation);
        }
    }

    /**
     * The option mask to use when decoding serialied XML.
     *
     * @see https://www.php.net/manual/en/libxml.constants.php for details.
     */
    public function setLibxmlOpts(int $libxmlOpts): self
    {
        $this->_libxmlOpts = $libxmlOpts;
        return $this;
    }

    public function getLibxmlOpts(): int
    {
        return $this->_libxmlOpts;
    }

    /**
     * Maximum depth of nested
     */
    public function setJSONDecodeMaxDepth(int $jsonDecodeMaxDepth): self
    {
        $this->_jsonDecodeMaxDepth = $jsonDecodeMaxDepth;
        return $this;
    }

    public function getJSONDecodeMaxDepth(): int
    {
        return $this->_jsonDecodeMaxDepth;
    }

    /**
     * The option mask to use when decoding serialized JSON.
     *
     * @see https://www.php.net/manual/en/json.constants.php under the "json_decode" section for details.
     *
     * @param int $jsonDecodeOpts JSON decode options mask
     */
    public function setJSONDecodeOpts(int $jsonDecodeOpts): self
    {
        $this->_jsonDecodeOpts = $jsonDecodeOpts;
        return $this;
    }

    /**
     * Return the current option mask to use when decoding serialized JSON
     */
    public function getJSONDecodeOpts(): int
    {
        return $this->_jsonDecodeOpts;
    }

    /**
     * Whether to unserialize resources into generated profile classes based on their "meta.profile" values.  One of "off" (default) or "auto".
     */
    public function setProfileResolution(string|ProfileResolutionEnum $value): self
    {
        if (is_string($value)) {
            $enum = ProfileResolutionEnum::tryFrom($value);
            if (null === $enum) {
                throw new \InvalidArgumentException(sprintf(
                    'profileResolution must be one of ["%s"], "%s" provided',
                    implode('","', array_column(ProfileResolutionEnum::cases(), 'value')),
                    $value
                ));
            }
            $value = $enum;
        }
        $this->_profileResolution = $value;
        return $this;
    }

    public function getProfileResolution(): ProfileResolutionEnum    {
        return $this->_profileResolution;
    }

    /**
     * What to do when a declared profile has no generated class (or constrains a different type).  One of "fallback" (default; ignore it) or "exception".
     */
    public function setOnUnknownProfile(string|OnUnknownProfileEnum $value): self
    {
        if (is_string($value)) {
            $enum = OnUnknownProfileEnum::tryFrom($value);
            if (null === $enum) {
                throw new \InvalidArgumentException(sprintf(
                    'onUnknownProfile must be one of ["%s"], "%s" provided',
                    implode('","', array_column(OnUnknownProfileEnum::cases(), 'value')),
                    $value
                ));
            }
            $value = $enum;
        }
        $this->_onUnknownProfile = $value;
        return $this;
    }

    public function getOnUnknownProfile(): OnUnknownProfileEnum    {
        return $this->_onUnknownProfile;
    }

    /**
     * What to do when several declared profiles match and none is a refinement of all the others.  One of "firstDeclared" (default), "fallback" (use the base type) or "exception".
     */
    public function setOnAmbiguousProfile(string|OnAmbiguousProfileEnum $value): self
    {
        if (is_string($value)) {
            $enum = OnAmbiguousProfileEnum::tryFrom($value);
            if (null === $enum) {
                throw new \InvalidArgumentException(sprintf(
                    'onAmbiguousProfile must be one of ["%s"], "%s" provided',
                    implode('","', array_column(OnAmbiguousProfileEnum::cases(), 'value')),
                    $value
                ));
            }
            $value = $enum;
        }
        $this->_onAmbiguousProfile = $value;
        return $this;
    }

    public function getOnAmbiguousProfile(): OnAmbiguousProfileEnum    {
        return $this->_onAmbiguousProfile;
    }

    /**
     * What to do when a declared "url|version" does not match the generated profile version.  One of "ignoreVersion" (default), "fallback" (ignore the profile) or "exception".
     */
    public function setOnProfileVersionMismatch(string|OnProfileVersionMismatchEnum $value): self
    {
        if (is_string($value)) {
            $enum = OnProfileVersionMismatchEnum::tryFrom($value);
            if (null === $enum) {
                throw new \InvalidArgumentException(sprintf(
                    'onProfileVersionMismatch must be one of ["%s"], "%s" provided',
                    implode('","', array_column(OnProfileVersionMismatchEnum::cases(), 'value')),
                    $value
                ));
            }
            $value = $enum;
        }
        $this->_onProfileVersionMismatch = $value;
        return $this;
    }

    public function getOnProfileVersionMismatch(): OnProfileVersionMismatchEnum    {
        return $this->_onProfileVersionMismatch;
    }

    /**
     * What to do when a resource unserialized into a profile class violates its constraints.  One of "keep" (default; keep the profile type), "fallback" (use the base type) or "exception".
     */
    public function setOnProfileViolation(string|OnProfileViolationEnum $value): self
    {
        if (is_string($value)) {
            $enum = OnProfileViolationEnum::tryFrom($value);
            if (null === $enum) {
                throw new \InvalidArgumentException(sprintf(
                    'onProfileViolation must be one of ["%s"], "%s" provided',
                    implode('","', array_column(OnProfileViolationEnum::cases(), 'value')),
                    $value
                ));
            }
            $value = $enum;
        }
        $this->_onProfileViolation = $value;
        return $this;
    }

    public function getOnProfileViolation(): OnProfileViolationEnum    {
        return $this->_onProfileViolation;
    }
}
