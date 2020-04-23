<?php

namespace barrelstrength\sproutbasereports\visualizations;

interface VisualizationInterface
{
  /**
   * Returns the visualizations name
   *
   * @return string The visualization name
   */
  public static function displayName(): string;

  /**
   * Returns the visualization settings HTML
   *
   * @return string The HTML that should be shown for this visualization's settings
   */

  public function getSettingsHtml(array $settings): string;

  /**
   * Return the visualization HTML
   *
   * @return string The HTML that displays the chart/visualization
   */
  public function getVisualizationHtml(): string;

  /**
   * Returns the type of visualization this represents
   *
   * @return string The visualization type
   */

  public static function getVisualizationType(): string;

  /**
   * Returns the column names to be used as the data series.
   *
   * @return string The column names for the data series.
   */

  public function getDataColumns(): array;

  /** Returns the column name to be used as the label series
   *
   * @return string The column name for the labels.
   */

  public function getLabelColumn(): string;




}