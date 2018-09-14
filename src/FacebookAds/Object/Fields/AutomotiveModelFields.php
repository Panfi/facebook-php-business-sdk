<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AutomotiveModelFields extends AbstractEnum {

  const APPLINKS = 'applinks';
  const AUTOMOTIVE_MODEL_ID = 'automotive_model_id';
  const AVAILABILITY = 'availability';
  const BODY_STYLE = 'body_style';
  const CURRENCY = 'currency';
  const DESCRIPTION = 'description';
  const DRIVETRAIN = 'drivetrain';
  const EXTERIOR_COLOR = 'exterior_color';
  const FUEL_TYPE = 'fuel_type';
  const GENERATION = 'generation';
  const ID = 'id';
  const IMAGES = 'images';
  const INTERIOR_COLOR = 'interior_color';
  const INTERIOR_UPHOLSTERY = 'interior_upholstery';
  const MAKE = 'make';
  const MODEL = 'model';
  const PRICE = 'price';
  const SANITIZED_IMAGES = 'sanitized_images';
  const TITLE = 'title';
  const TRANSMISSION = 'transmission';
  const TRIM = 'trim';
  const URL = 'url';
  const YEAR = 'year';

  public function getFieldTypes() {
    return array(
      'applinks' => 'AppLinks',
      'automotive_model_id' => 'string',
      'availability' => 'string',
      'body_style' => 'string',
      'currency' => 'string',
      'description' => 'string',
      'drivetrain' => 'string',
      'exterior_color' => 'string',
      'fuel_type' => 'string',
      'generation' => 'string',
      'id' => 'string',
      'images' => 'list<string>',
      'interior_color' => 'string',
      'interior_upholstery' => 'string',
      'make' => 'string',
      'model' => 'string',
      'price' => 'string',
      'sanitized_images' => 'list<string>',
      'title' => 'string',
      'transmission' => 'string',
      'trim' => 'string',
      'url' => 'string',
      'year' => 'unsigned int',
    );
  }
}