;(function ()
{

	BX.namespace('BX.Sender');
	if (BX.Sender.TemplateList)
	{
		return;
	}

	var Page = BX.Sender.Page;

	/**
	 * ListManager.
	 *
	 */
	function ListManager()
	{
	}
	ListManager.prototype.init = function (params)
	{
		this.gridId = params.gridId;
		this.actionUri = params.actionUri;
		this.pathToEdit = params.pathToEdit;
		this.mess = params.mess;

		this.ajaxAction = new BX.AjaxAction(this.actionUri);
		Page.initButtons();
	};
	ListManager.prototype.remove = function (id)
	{
		this.doAction('remove', id);
	};
	ListManager.prototype.copy = function (id)
	{
		this.doAction('copy', id);
	};
	ListManager.prototype.removeSelected = function ()
	{
		var grid = BX.Main.gridManager.getById(this.gridId);
		if (!grid || !grid.instance)
		{
			return;
		}

		this.doAction('removeList', grid.instance.getRows().getSelectedIds());
	};
	ListManager.prototype.doAction = function (actionName, id, callback)
	{
		var gridId = this.gridId;

		Page.changeGridLoaderShowing(gridId, true);
		var self = this;
		this.ajaxAction.request({
			action: actionName,
			onsuccess: function (data) {
				Page.reloadGrid(gridId);
				if (callback)
				{
					callback.apply(self, [data]);
				}
			},
			onfailure: function () {
				Page.changeGridLoaderShowing(gridId, false);
			},
			data: {
				'id': id
			}
		});
	};

	BX.Sender.TemplateList = new ListManager();

})(window);