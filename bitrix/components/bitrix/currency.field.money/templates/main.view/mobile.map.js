{"version":3,"sources":["mobile.js"],"names":["this","BX","Mobile","Field","exports","main_core","window","BXMobileApp","nodeMoney","node","containerValue","containerCurrency","clickValue","delegate","bind","callbackValue","clickCurrency","callbackCurrency","nodeValue","nodeCurrency","prototype","e","showValue","PreventDefault","app","exec","attachButton","items","attachFileSettings","attachedFiles","extraData","mentionButton","smileButton","message","text","util","htmlspecialcharsback","previousElementSibling","value","okButton","callback","name","Loc","getMessage","cancelButton","data","htmlspecialchars","innerHTML","concat","getAttribute","onCustomEvent","showCurrency","initCurrencies","UI","SelectPicker","show","values","currencies","multiselect","default_value","defaultCurrency","currency","ii","options","length","push","hasAttribute","Money","params","init","__proto__","bindElement","result","id"],"mappings":"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","file":"mobile.map.js"}