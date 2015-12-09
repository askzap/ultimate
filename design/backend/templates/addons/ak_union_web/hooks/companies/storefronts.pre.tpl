<div class="control-group">
    <label for="elm_company_storefront" class="control-label cm-required">{__("ak_market_code")}:</label>
    <div class="controls">
    {if $runtime.company_id}
        <span>{$company_data.market_code}</span>
    {else}
        <input type="text" name="company_data[market_code]" id="elm_company_storefront" size="32" value="{$company_data.market_code}" class="input-large" />
    {/if}
    </div>
</div>