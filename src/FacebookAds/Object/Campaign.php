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

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\CampaignFields;
use FacebookAds\Object\Values\AdCampaignGroupActivityChangedAllValues;
use FacebookAds\Object\Values\AdCampaignGroupActivityChangedAnyValues;
use FacebookAds\Object\Values\AdDatePresetValues;
use FacebookAds\Object\Values\AdSetDatePresetValues;
use FacebookAds\Object\Values\AdSetEffectiveStatusValues;
use FacebookAds\Object\Values\AdsInsightsActionAttributionWindowsValues;
use FacebookAds\Object\Values\AdsInsightsActionBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsActionReportTimeValues;
use FacebookAds\Object\Values\AdsInsightsBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsDatePresetValues;
use FacebookAds\Object\Values\AdsInsightsLevelValues;
use FacebookAds\Object\Values\AdsInsightsSummaryActionBreakdownsValues;
use FacebookAds\Object\Values\AdsReportBuilderAttributionWindowsValues;
use FacebookAds\Object\Values\AdsReportBuilderDatePresetValues;
use FacebookAds\Object\Values\AdsReportBuilderDimensionsValues;
use FacebookAds\Object\Values\CampaignBidStrategyValues;
use FacebookAds\Object\Values\CampaignConfiguredStatusValues;
use FacebookAds\Object\Values\CampaignDatePresetValues;
use FacebookAds\Object\Values\CampaignEffectiveStatusValues;
use FacebookAds\Object\Values\CampaignExecutionOptionsValues;
use FacebookAds\Object\Values\CampaignObjectiveValues;
use FacebookAds\Object\Values\CampaignOperatorValues;
use FacebookAds\Object\Values\CampaignStatusOptionValues;
use FacebookAds\Object\Values\CampaignStatusValues;
use FacebookAds\Object\Values\FAMEAdCampaignDatePresetValues;
use FacebookAds\Object\Values\FAMEAdCampaignEffectiveStatusValues;
use FacebookAds\Object\Traits\AdLabelAwareCrudObjectTrait;
use FacebookAds\Object\Traits\ObjectValidation;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class Campaign extends AbstractArchivableCrudObject {

  use AdLabelAwareCrudObjectTrait;
  use ObjectValidation;

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'campaigns';
  }

  /**
   * @return CampaignFields
   */
  public static function getFieldsEnum() {
    return CampaignFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['BidStrategy'] = CampaignBidStrategyValues::getInstance()->getValues();
    $ref_enums['ConfiguredStatus'] = CampaignConfiguredStatusValues::getInstance()->getValues();
    $ref_enums['EffectiveStatus'] = CampaignEffectiveStatusValues::getInstance()->getValues();
    $ref_enums['Status'] = CampaignStatusValues::getInstance()->getValues();
    $ref_enums['DatePreset'] = CampaignDatePresetValues::getInstance()->getValues();
    $ref_enums['ExecutionOptions'] = CampaignExecutionOptionsValues::getInstance()->getValues();
    $ref_enums['Objective'] = CampaignObjectiveValues::getInstance()->getValues();
    $ref_enums['Operator'] = CampaignOperatorValues::getInstance()->getValues();
    $ref_enums['StatusOption'] = CampaignStatusOptionValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getActivityLogs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'changed_all' => 'list<changed_all_enum>',
      'changed_any' => 'list<changed_any_enum>',
      'since' => 'Object',
      'until' => 'Object',
    );
    $enums = array(
      'changed_all_enum' => AdCampaignGroupActivityChangedAllValues::getInstance()->getValues(),
      'changed_any_enum' => AdCampaignGroupActivityChangedAnyValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/activity_logs',
      new AdCampaignGroupActivity(),
      'EDGE',
      AdCampaignGroupActivity::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdStudies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ad_studies',
      new AdStudy(),
      'EDGE',
      AdStudy::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdDrafts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/addrafts',
      new AdDraft(),
      'EDGE',
      AdDraft::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAdLabels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adlabels' => 'list<Object>',
      'execution_options' => 'list<execution_options_enum>',
    );
    $enums = array(
      'execution_options_enum' => CampaignExecutionOptionsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/adlabels',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdLabel(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adlabels' => 'list<Object>',
      'execution_options' => 'list<execution_options_enum>',
    );
    $enums = array(
      'execution_options_enum' => CampaignExecutionOptionsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adlabels',
      new Campaign(),
      'EDGE',
      Campaign::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdRulesGoverned(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'pass_evaluation' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adrules_governed',
      new AdRule(),
      'EDGE',
      AdRule::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAds(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'effective_status' => 'list<string>',
      'date_preset' => 'date_preset_enum',
      'include_deleted' => 'bool',
      'time_range' => 'Object',
      'updated_since' => 'int',
      'ad_draft_id' => 'string',
    );
    $enums = array(
      'date_preset_enum' => AdDatePresetValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ads',
      new Ad(),
      'EDGE',
      Ad::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdSets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'effective_status' => 'list<effective_status_enum>',
      'date_preset' => 'date_preset_enum',
      'is_completed' => 'bool',
      'time_range' => 'Object',
      'ad_draft_id' => 'string',
    );
    $enums = array(
      'effective_status_enum' => AdSetEffectiveStatusValues::getInstance()->getValues(),
      'date_preset_enum' => AdSetDatePresetValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adsets',
      new AdSet(),
      'EDGE',
      AdSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getColumnSuggestions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/column_suggestions',
      new ColumnSuggestions(),
      'EDGE',
      ColumnSuggestions::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCopies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'effective_status' => 'list<effective_status_enum>',
      'date_preset' => 'date_preset_enum',
      'is_completed' => 'bool',
      'time_range' => 'Object',
    );
    $enums = array(
      'effective_status_enum' => CampaignEffectiveStatusValues::getInstance()->getValues(),
      'date_preset_enum' => CampaignDatePresetValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/copies',
      new Campaign(),
      'EDGE',
      Campaign::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCopy(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'deep_copy' => 'bool',
      'rename_options' => 'Object',
      'status_option' => 'status_option_enum',
      'start_time' => 'datetime',
      'end_time' => 'datetime',
    );
    $enums = array(
      'status_option_enum' => CampaignStatusOptionValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/copies',
      new Campaign(),
      'EDGE',
      Campaign::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getFameAdSets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'date_preset' => 'date_preset_enum',
      'effective_status' => 'list<effective_status_enum>',
      'time_range' => 'Object',
      'is_completed' => 'bool',
    );
    $enums = array(
      'date_preset_enum' => FAMEAdCampaignDatePresetValues::getInstance()->getValues(),
      'effective_status_enum' => FAMEAdCampaignEffectiveStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/fame_adsets',
      new FAMEAdCampaign(),
      'EDGE',
      FAMEAdCampaign::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'default_summary' => 'bool',
      'fields' => 'list<string>',
      'filtering' => 'list<Object>',
      'summary' => 'list<string>',
      'sort' => 'list<string>',
      'action_attribution_windows' => 'list<action_attribution_windows_enum>',
      'action_breakdowns' => 'list<action_breakdowns_enum>',
      'action_report_time' => 'action_report_time_enum',
      'breakdowns' => 'list<breakdowns_enum>',
      'date_preset' => 'date_preset_enum',
      'export_columns' => 'list<string>',
      'export_format' => 'string',
      'export_name' => 'string',
      'level' => 'level_enum',
      'product_id_limit' => 'int',
      'summary_action_breakdowns' => 'list<summary_action_breakdowns_enum>',
      'time_increment' => 'string',
      'time_range' => 'Object',
      'time_ranges' => 'list<Object>',
      'use_account_attribution_setting' => 'bool',
    );
    $enums = array(
      'action_attribution_windows_enum' => AdsInsightsActionAttributionWindowsValues::getInstance()->getValues(),
      'action_breakdowns_enum' => AdsInsightsActionBreakdownsValues::getInstance()->getValues(),
      'action_report_time_enum' => AdsInsightsActionReportTimeValues::getInstance()->getValues(),
      'breakdowns_enum' => AdsInsightsBreakdownsValues::getInstance()->getValues(),
      'date_preset_enum' => AdsInsightsDatePresetValues::getInstance()->getValues(),
      'level_enum' => AdsInsightsLevelValues::getInstance()->getValues(),
      'summary_action_breakdowns_enum' => AdsInsightsSummaryActionBreakdownsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/insights',
      new AdsInsights(),
      'EDGE',
      AdsInsights::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInsightsAsync(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'default_summary' => 'bool',
      'fields' => 'list<string>',
      'filtering' => 'list<Object>',
      'summary' => 'list<string>',
      'sort' => 'list<string>',
      'action_attribution_windows' => 'list<action_attribution_windows_enum>',
      'action_breakdowns' => 'list<action_breakdowns_enum>',
      'action_report_time' => 'action_report_time_enum',
      'breakdowns' => 'list<breakdowns_enum>',
      'date_preset' => 'date_preset_enum',
      'export_columns' => 'list<string>',
      'export_format' => 'string',
      'export_name' => 'string',
      'level' => 'level_enum',
      'product_id_limit' => 'int',
      'summary_action_breakdowns' => 'list<summary_action_breakdowns_enum>',
      'time_increment' => 'string',
      'time_range' => 'Object',
      'time_ranges' => 'list<Object>',
      'use_account_attribution_setting' => 'bool',
    );
    $enums = array(
      'action_attribution_windows_enum' => AdsInsightsActionAttributionWindowsValues::getInstance()->getValues(),
      'action_breakdowns_enum' => AdsInsightsActionBreakdownsValues::getInstance()->getValues(),
      'action_report_time_enum' => AdsInsightsActionReportTimeValues::getInstance()->getValues(),
      'breakdowns_enum' => AdsInsightsBreakdownsValues::getInstance()->getValues(),
      'date_preset_enum' => AdsInsightsDatePresetValues::getInstance()->getValues(),
      'level_enum' => AdsInsightsLevelValues::getInstance()->getValues(),
      'summary_action_breakdowns_enum' => AdsInsightsSummaryActionBreakdownsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/insights',
      new AdReportRun(),
      'EDGE',
      AdReportRun::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getReporting(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'attribution_windows' => 'list<attribution_windows_enum>',
      'dimensions' => 'list<dimensions_enum>',
      'dimension_groups' => 'list<list<adcampaigngroupreporting_dimension_groups_enum_param>>',
      'locked_dimensions' => 'unsigned int',
      'metrics' => 'list<string>',
      'filtering' => 'Object',
      'sorting' => 'list<map>',
      'date_preset' => 'date_preset_enum',
      'time_range' => 'Object',
      'default_summary' => 'bool',
      'last_report_snapshot_id' => 'unsigned int',
      'offset' => 'unsigned int',
      'limit' => 'int',
      'pagination_key' => 'string',
      'last_dimension' => 'Object',
      'summary_count' => 'bool',
    );
    $enums = array(
      'attribution_windows_enum' => AdsReportBuilderAttributionWindowsValues::getInstance()->getValues(),
      'dimensions_enum' => AdsReportBuilderDimensionsValues::getInstance()->getValues(),
      'date_preset_enum' => AdsReportBuilderDatePresetValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/reporting',
      new AdsReportBuilder(),
      'EDGE',
      AdsReportBuilder::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getStats(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'end_time' => 'datetime',
      'start_time' => 'datetime',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/stats',
      new AdCampaignGroupStats(),
      'EDGE',
      AdCampaignGroupStats::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getThirdPartyPayload(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/third_party_payload',
      new ApplicationThirdPartyPayload(),
      'EDGE',
      ApplicationThirdPartyPayload::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getVideoGroups(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'date_range' => 'map',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/video_groups',
      new VideoGroup(),
      'EDGE',
      VideoGroup::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/',
      new AbstractCrudObject(),
      'NODE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'date_preset' => 'date_preset_enum',
      'from_adtable' => 'bool',
      'time_range' => 'Object',
    );
    $enums = array(
      'date_preset_enum' => array(
        'today',
        'yesterday',
        'this_month',
        'last_month',
        'this_quarter',
        'lifetime',
        'last_3d',
        'last_7d',
        'last_14d',
        'last_28d',
        'last_30d',
        'last_90d',
        'last_week_mon_sun',
        'last_week_sun_sat',
        'last_quarter',
        'last_year',
        'this_week_mon_today',
        'this_week_sun_today',
        'this_year',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new Campaign(),
      'NODE',
      Campaign::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'objective' => 'objective_enum',
      'status' => 'status_enum',
      'bid_strategy' => 'bid_strategy_enum',
      'budget_rebalance_flag' => 'bool',
      'daily_budget' => 'unsigned int',
      'lifetime_budget' => 'unsigned int',
      'pacing_type' => 'list<string>',
      'promoted_object' => 'Object',
      'spend_cap' => 'unsigned int',
      'execution_options' => 'list<execution_options_enum>',
      'upstream_events' => 'map',
      'adlabels' => 'list<Object>',
      'iterative_split_test_configs' => 'list<Object>',
      'kpi_custom_conversion_id' => 'string',
      'kpi_type' => 'Object',
    );
    $enums = array(
      'objective_enum' => CampaignObjectiveValues::getInstance()->getValues(),
      'status_enum' => CampaignStatusValues::getInstance()->getValues(),
      'bid_strategy_enum' => CampaignBidStrategyValues::getInstance()->getValues(),
      'execution_options_enum' => CampaignExecutionOptionsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new Campaign(),
      'NODE',
      Campaign::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}