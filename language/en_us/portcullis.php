<?php
/**
 * en_us language for the portcullis module
 */

// Basics
$lang['Portcullis.name'] = "Portcullis Licence Server";
$lang['Portcullis.module_row'] = "Licence Server";
$lang['Portcullis.module_row_plural'] = "Licence Servers";
$lang['Portcullis.module_group'] = "Licence Server Group";
$lang['Portcullis.tab_stats'] = "Statistics";
$lang['Portcullis.tab_client_stats'] = "Statistics";
$lang['Portcullis.tab_client_actions'] = "Actions";

// Module management
$lang['Portcullis.add_module_row'] = "Add Licence Server";
$lang['Portcullis.add_module_group'] = "Add Licence Server Group";
$lang['Portcullis.manage.module_rows_title'] = "Licence Servers";
$lang['Portcullis.manage.module_groups_title'] = "Licence Server Groups";
$lang['Portcullis.manage.module_rows_heading.name'] = "Server Label";
$lang['Portcullis.manage.module_rows_heading.hostname'] = "Hostname";
$lang['Portcullis.manage.module_rows_heading.accounts'] = "Accounts";
$lang['Portcullis.manage.module_rows_heading.options'] = "Options";
$lang['Portcullis.manage.module_groups_heading.name'] = "Group Name";
$lang['Portcullis.manage.module_groups_heading.servers'] = "Server Count";
$lang['Portcullis.manage.module_groups_heading.options'] = "Options";
$lang['Portcullis.manage.module_rows.count'] = "%1\$s / %2\$s"; // %1$s is the current number of accounts, %2$s is the total number of accounts available
$lang['Portcullis.manage.module_rows.edit'] = "Edit";
$lang['Portcullis.manage.module_groups.edit'] = "Edit";
$lang['Portcullis.manage.module_rows.delete'] = "Delete";
$lang['Portcullis.manage.module_groups.delete'] = "Delete";
$lang['Portcullis.manage.module_rows.confirm_delete'] = "Are you sure you want to delete this licence server?";
$lang['Portcullis.manage.module_groups.confirm_delete'] = "Are you sure you want to delete this licence server group?";
$lang['Portcullis.manage.module_rows_no_results'] = "There are no licence servers.";
$lang['Portcullis.manage.module_groups_no_results'] = "There are no licence server groups.";


$lang['Portcullis.order_options.first'] = "First non-full server";

// Add row
$lang['Portcullis.add_row.box_title'] = "Add Portcullis Licence Server";
$lang['Portcullis.add_row.basic_title'] = "Basic Settings";
$lang['Portcullis.add_row.name_servers_title'] = "Name Servers";
$lang['Portcullis.add_row.notes_title'] = "Notes";
$lang['Portcullis.add_row.name_server_btn'] = "Add Additional Name Server";
$lang['Portcullis.add_row.name_server_col'] = "Name Server";
$lang['Portcullis.add_row.name_server_host_col'] = "Hostname";
$lang['Portcullis.add_row.name_server'] = "Name server %1\$s"; // %1$s is the name server number (e.g. 3)
$lang['Portcullis.add_row.remove_name_server'] = "Remove";
$lang['Portcullis.add_row.add_btn'] = "Add Licence Server";

$lang['Portcullis.edit_row.box_title'] = "Edit Portcullis Licence Server";
$lang['Portcullis.edit_row.basic_title'] = "Basic Settings";
$lang['Portcullis.edit_row.name_servers_title'] = "Name Servers";
$lang['Portcullis.edit_row.notes_title'] = "Notes";
$lang['Portcullis.edit_row.name_server_btn'] = "Add Additional Name Server";
$lang['Portcullis.edit_row.name_server_col'] = "Name Server";
$lang['Portcullis.edit_row.name_server_host_col'] = "Hostname";
$lang['Portcullis.edit_row.name_server'] = "Name server %1\$s"; // %1$s is the name server number (e.g. 3)
$lang['Portcullis.edit_row.remove_name_server'] = "Remove";
$lang['Portcullis.edit_row.add_btn'] = "Edit Server";

$lang['Portcullis.row_meta.server_name'] = "Server Label";
$lang['Portcullis.row_meta.host_name'] = "Hostname";
$lang['Portcullis.row_meta.user_name'] = "User Name";
$lang['Portcullis.row_meta.key'] = "Remote Key";
$lang['Portcullis.row_meta.use_ssl'] = "Use SSL when connecting to the API (recommended)";
$lang['Portcullis.row_meta.account_limit'] = "Account Limit";

// Package fields
$lang['Portcullis.package_fields.type'] = "Account Type";
$lang['Portcullis.package_fields.type_standard'] = "Standard";
$lang['Portcullis.package_fields.type_reseller'] = "Reseller";
$lang['Portcullis.package_fields.package'] = "Portcullis Package";
$lang['Portcullis.package_fields.acl'] = "Access Control List";
$lang['Portcullis.package_fields.acl_default'] = "Default";

// Service fields
$lang['Portcullis.service_field.domain'] = "Domain";
$lang['Portcullis.service_field.username'] = "Username";
$lang['Portcullis.service_field.password'] = "Password";
$lang['Portcullis.service_field.confirm_password'] = "Confirm Password";

// Service management
$lang['Portcullis.tab_stats.info_title'] = "Information";
$lang['Portcullis.tab_stats.info_heading.field'] = "Field";
$lang['Portcullis.tab_stats.info_heading.value'] = "Value";
$lang['Portcullis.tab_stats.info.domain'] = "Domain";
$lang['Portcullis.tab_stats.info.ip'] = "IP Address";
$lang['Portcullis.tab_stats.bandwidth_title'] = "Bandwidth";
$lang['Portcullis.tab_stats.bandwidth_heading.used'] = "Used";
$lang['Portcullis.tab_stats.bandwidth_heading.limit'] = "Limit";
$lang['Portcullis.tab_stats.bandwidth_value'] = "%1\$s MB"; // %1$s is the amount of bandwidth in MB
$lang['Portcullis.tab_stats.bandwidth_unlimited'] = "unlimited";
$lang['Portcullis.tab_stats.disk_title'] = "Disk";
$lang['Portcullis.tab_stats.disk_heading.used'] = "Used";
$lang['Portcullis.tab_stats.disk_heading.limit'] = "Limit";
$lang['Portcullis.tab_stats.disk_value'] = "%1\$s MB"; // %1$s is the amount of disk in MB
$lang['Portcullis.tab_stats.disk_unlimited'] = "unlimited";


// Client actions
$lang['Portcullis.tab_client_actions.change_password'] = "Change Password";
$lang['Portcullis.tab_client_actions.field_Portcullis_password'] = "Password";
$lang['Portcullis.tab_client_actions.field_Portcullis_confirm_password'] = "Confirm Password";
$lang['Portcullis.tab_client_actions.field_password_submit'] = "Update Password";


// Client Service management
$lang['Portcullis.tab_client_stats.info_title'] = "Information";
$lang['Portcullis.tab_client_stats.info_heading.field'] = "Field";
$lang['Portcullis.tab_client_stats.info_heading.value'] = "Value";
$lang['Portcullis.tab_client_stats.info.domain'] = "Domain";
$lang['Portcullis.tab_client_stats.info.ip'] = "IP Address";
$lang['Portcullis.tab_client_stats.bandwidth_title'] = "Bandwidth Usage (Month to Date)";
$lang['Portcullis.tab_client_stats.disk_title'] = "Disk Usage";
$lang['Portcullis.tab_client_stats.usage'] = "(%1\$s MB/%2\$s MB)"; // %1$s is the amount of resource usage, %2$s is the resource usage limit
$lang['Portcullis.tab_client_stats.usage_unlimited'] = "(%1\$s MB/∞)"; // %1$s is the amount of resource usage


// Service info
$lang['Portcullis.service_info.username'] = "Username";
$lang['Portcullis.service_info.password'] = "Password";
$lang['Portcullis.service_info.server'] = "Server";
$lang['Portcullis.service_info.options'] = "Options";
$lang['Portcullis.service_info.option_login'] = "Log in";


// Tooltips
$lang['Portcullis.service_field.tooltip.username'] = "You may leave the username blank to automatically generate one.";
$lang['Portcullis.service_field.tooltip.password'] = "You may leave the password blank to automatically generate one.";


// Errors
$lang['Portcullis.!error.server_name_valid'] = "You must enter a Server Label.";
$lang['Portcullis.!error.host_name_valid'] = "The Hostname appears to be invalid.";
$lang['Portcullis.!error.user_name_valid'] = "The User Name appears to be invalid.";
$lang['Portcullis.!error.remote_key_valid'] = "The Remote Key appears to be invalid.";
$lang['Portcullis.!error.remote_key_valid_connection'] = "A connection to the server could not be established. Please check to ensure that the Hostname, User Name, and Remote Key are correct.";
$lang['Portcullis.!error.account_limit_valid'] = "Account Limit must be left blank (for unlimited accounts) or set to some integer value.";
$lang['Portcullis.!error.name_servers_valid'] = "One or more of the name servers entered are invalid.";
$lang['Portcullis.!error.name_servers_count'] = "You must define at least 2 name servers.";
$lang['Portcullis.!error.meta[type].valid'] = "Account type must be either standard or reseller.";
$lang['Portcullis.!error.meta[package].empty'] = "A Portcullis Package is required.";
$lang['Portcullis.!error.api.internal'] = "An internal error occurred, or the server did not respond to the request.";
$lang['Portcullis.!error.module_row.missing'] = "An internal error occurred. The module row is unavailable.";

$lang['Portcullis.!error.Portcullis_domain.format'] = "Please enter a valid domain name, e.g. domain.com.";
$lang['Portcullis.!error.Portcullis_domain.test'] = "Domain name can not start with 'test'.";
$lang['Portcullis.!error.Portcullis_username.format'] = "The username may contain only letters and numbers and may not start with a number.";
$lang['Portcullis.!error.Portcullis_username.test'] = "The username may not begin with 'test'.";
$lang['Portcullis.!error.Portcullis_username.length'] = "The username must be between 1 and 16 characters in length.";
$lang['Portcullis.!error.Portcullis_password.valid'] = "Password must be at least 8 characters in length.";
$lang['Portcullis.!error.Portcullis_password.matches'] = "Password and Confirm Password do not match.";
?>