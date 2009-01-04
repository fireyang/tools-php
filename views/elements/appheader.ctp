<div id="appheader">
    <div style="position: absolute; height: 83px; width: 188px; cursor: pointer;" id="appheaderlogo" >
    </div>
<div style="float: right;" id="topnav"><span style="position: relative; color: rgb(0, 0, 0); font-weight: bold;" id="personName">fire.yang</span><span style="display: none;" class="prouser" id="is-pro"><img alt="Pro" src="http://static.rememberthemilk.com/img/ico/ico_pro_sm.gif"/></span><span class="" id="offline-status"> | <img width="11" height="11" src="/img/ico/off-connected-synced.gif" id="is-connected" class="" alt="" title="Currently online: click to go offline"/><img width="11" height="11" src="/img/ico/off-disconnected.gif" id="is-disconnected" class="hidden" alt="" title="Currently offline: click to go online"/><img width="11" height="11" src="/img/ico/off-connected-syncing.gif" id="is-syncing" class="hidden" alt="" title="Synchronising..."/><span id="has-gears" class="hidden"><a onclick="try { this.blur(); Offline.Dialog.showGears(); return false; } catch(e) {} " href="#">Offline</a></span></span> | <span id="viewSelector"><a href="#section.overview">Overview</a> | <span style="font-weight: bold;">Tasks</span> | <a href="#section.locations">Locations</a> | <a href="#section.contacts">Contacts</a> | <a href="#section.settings">Settings</a> | <a target="_blank" href="/help/">Help</a> | <a href="/auth.rtm?logout">Logout</a></span></div>
    <div style="float: right; clear: right; padding-top: 7px;">
    </div>
    <div id="searchbox">
            <form action="" onsubmit="control.updateListFilter(); return false;">
			    <div id="searchboxwrap">
	            	<table>
			        <tbody>
			        <tr>
				        <td style="width: 1px;">
				        <div id="searchicon">
				        </div>
				        </td>
				        <td>
				        <input type="text" id="listFilter" onfocus="this.select();"/>
				        </td>
			        </tr>
			        </tbody>
			        </table>
		        </div>
	            <div id="searchtogglewrap"><a onclick="tasksView.toggleSearchOptions(); return false;" href="#" id="searchtoggle">Show search options</a></div>
            </form>
        </div>
</div>
<div id="break"></div>
