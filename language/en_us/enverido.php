<?php
/**
 * en_us language for the Enverido module
 */

// Basics
$lang['Enverido.name'] = "Enverido";
$lang['Enverido.module_row'] = "Enverido Account";
$lang['Enverido.module_row_plural'] = "Enverido Accounts";
$lang['Enverido.module_group'] = "Enverio Accounts";
$lang['Enverido.tab_stats'] = "Statistics";
$lang['Enverido.tab_client_stats'] = "Statistics";
$lang['Enverido.tab_client_actions'] = "Actions";

// Module management
$lang['Enverido.add_module_row'] = "Add Enverido Account";
$lang['Enverido.add_module_group'] = "Add Enverido Account Group";
$lang['Enverido.manage.module_rows_title'] = "Enverido Accounts";
$lang['Enverido.manage.module_groups_title'] = "Enverido Account Groups";
$lang['Enverido.manage.module_rows_heading.name'] = "Server Label";
$lang['Enverido.manage.module_rows_heading.hostname'] = "Hostname";
$lang['Enverido.manage.module_rows_heading.accounts'] = "Accounts";
$lang['Enverido.manage.module_rows_heading.options'] = "Options";
$lang['Enverido.manage.module_groups_heading.name'] = "Group Name";
$lang['Enverido.manage.module_groups_heading.servers'] = "Server Count";
$lang['Enverido.manage.module_groups_heading.options'] = "Options";
$lang['Enverido.manage.module_rows.count'] = "%1\$s / %2\$s"; // %1$s is the current number of accounts, %2$s is the total number of accounts available
$lang['Enverido.manage.module_rows.edit'] = "Edit";
$lang['Enverido.manage.module_groups.edit'] = "Edit";
$lang['Enverido.manage.module_rows.delete'] = "Delete";
$lang['Enverido.manage.module_groups.delete'] = "Delete";
$lang['Enverido.manage.module_rows.confirm_delete'] = "Are you sure you want to delete this licence server?";
$lang['Enverido.manage.module_groups.confirm_delete'] = "Are you sure you want to delete this licence server group?";
$lang['Enverido.manage.module_rows_no_results'] = "There are no licence servers.";
$lang['Enverido.manage.module_groups_no_results'] = "There are no licence server groups.";


$lang['Enverido.order_options.first'] = "First non-full server";

// Add row
$lang['Enverido.add_row.box_title'] = "Add Enverido Licence Server";
$lang['Enverido.add_row.basic_title'] = "Basic Settings";
$lang['Enverido.add_row.name_servers_title'] = "Name Servers";
$lang['Enverido.add_row.notes_title'] = "Notes";
$lang['Enverido.add_row.name_server_btn'] = "Add Additional Name Server";
$lang['Enverido.add_row.name_server_col'] = "Name Server";
$lang['Enverido.add_row.name_server_host_col'] = "Hostname";
$lang['Enverido.add_row.name_server'] = "Name server %1\$s"; // %1$s is the name server number (e.g. 3)
$lang['Enverido.add_row.remove_name_server'] = "Remove";
$lang['Enverido.add_row.add_btn'] = "Add Licence Server";

$lang['Enverido.edit_row.box_title'] = "Edit Enverido Licence Server";
$lang['Enverido.edit_row.basic_title'] = "Basic Settings";
$lang['Enverido.edit_row.name_servers_title'] = "Name Servers";
$lang['Enverido.edit_row.notes_title'] = "Notes";
$lang['Enverido.edit_row.name_server_btn'] = "Add Additional Name Server";
$lang['Enverido.edit_row.name_server_col'] = "Name Server";
$lang['Enverido.edit_row.name_server_host_col'] = "Hostname";
$lang['Enverido.edit_row.name_server'] = "Name server %1\$s"; // %1$s is the name server number (e.g. 3)
$lang['Enverido.edit_row.remove_name_server'] = "Remove";
$lang['Enverido.edit_row.add_btn'] = "Edit Server";

$lang['Enverido.row_meta.server_name'] = "Server Label";
$lang['Enverido.row_meta.host_name'] = "Hostname";
$lang['Enverido.row_meta.user_name'] = "User Name";
$lang['Enverido.row_meta.key'] = "Remote Key";
$lang['Enverido.row_meta.use_ssl'] = "Use SSL when connecting to the API (recommended)";
$lang['Enverido.row_meta.account_limit'] = "Account Limit";

// Package fields
$lang['Enverido.package_fields.type'] = "Account Type";
$lang['Enverido.package_fields.type_standard'] = "Standard";
$lang['Enverido.package_fields.type_reseller'] = "Reseller";
$lang['Enverido.package_fields.package'] = "Enverido Package";
$lang['Enverido.package_fields.acl'] = "Access Control List";
$lang['Enverido.package_fields.acl_default'] = "Default";

// Service fields
$lang['Enverido.service_field.domain'] = "Domain";
$lang['Enverido.service_field.username'] = "Username";
$lang['Enverido.service_field.password'] = "Password";
$lang['Enverido.service_field.confirm_password'] = "Confirm Password";

// Service management
$lang['Enverido.tab_stats.info_title'] = "Information";
$lang['Enverido.tab_stats.info_heading.field'] = "Field";
$lang['Enverido.tab_stats.info_heading.value'] = "Value";
$lang['Enverido.tab_stats.info.domain'] = "Domain";
$lang['Enverido.tab_stats.info.ip'] = "IP Address";
$lang['Enverido.tab_stats.bandwidth_title'] = "Bandwidth";
$lang['Enverido.tab_stats.bandwidth_heading.used'] = "Used";
$lang['Enverido.tab_stats.bandwidth_heading.limit'] = "Limit";
$lang['Enverido.tab_stats.bandwidth_value'] = "%1\$s MB"; // %1$s is the amount of bandwidth in MB
$lang['Enverido.tab_stats.bandwidth_unlimited'] = "unlimited";
$lang['Enverido.tab_stats.disk_title'] = "Disk";
$lang['Enverido.tab_stats.disk_heading.used'] = "Used";
$lang['Enverido.tab_stats.disk_heading.limit'] = "Limit";
$lang['Enverido.tab_stats.disk_value'] = "%1\$s MB"; // %1$s is the amount of disk in MB
$lang['Enverido.tab_stats.disk_unlimited'] = "unlimited";


// Client actions
$lang['Enverido.tab_client_actions.change_password'] = "Change Password";
$lang['Enverido.tab_client_actions.field_Enverido_password'] = "Password";
$lang['Enverido.tab_client_actions.field_Enverido_confirm_password'] = "Confirm Password";
$lang['Enverido.tab_client_actions.field_password_submit'] = "Update Password";


// Client Service management
$lang['Enverido.tab_client_stats.info_title'] = "Information";
$lang['Enverido.tab_client_stats.info_heading.field'] = "Field";
$lang['Enverido.tab_client_stats.info_heading.value'] = "Value";
$lang['Enverido.tab_client_stats.info.domain'] = "Domain";
$lang['Enverido.tab_client_stats.info.ip'] = "IP Address";
$lang['Enverido.tab_client_stats.bandwidth_title'] = "Bandwidth Usage (Month to Date)";
$lang['Enverido.tab_client_stats.disk_title'] = "Disk Usage";
$lang['Enverido.tab_client_stats.usage'] = "(%1\$s MB/%2\$s MB)"; // %1$s is the amount of resource usage, %2$s is the resource usage limit
$lang['Enverido.tab_client_stats.usage_unlimited'] = "(%1\$s MB/∞)"; // %1$s is the amount of resource usage


// Service info
$lang['Enverido.service_info.username'] = "Username";
$lang['Enverido.service_info.password'] = "Password";
$lang['Enverido.service_info.server'] = "Server";
$lang['Enverido.service_info.options'] = "Options";
$lang['Enverido.service_info.option_login'] = "Log in";


// Tooltips
$lang['Enverido.service_field.tooltip.username'] = "You may leave the username blank to automatically generate one.";
$lang['Enverido.service_field.tooltip.password'] = "You may leave the password blank to automatically generate one.";


// Errors
$lang['Enverido.!error.server_name_valid'] = "You must enter a Server Label.";
$lang['Enverido.!error.host_name_valid'] = "The Hostname appears to be invalid.";
$lang['Enverido.!error.user_name_valid'] = "The User Name appears to be invalid.";
$lang['Enverido.!error.remote_key_valid'] = "The Remote Key appears to be invalid.";
$lang['Enverido.!error.remote_key_valid_connection'] = "A connection to the server could not be established. Please check to ensure that the Hostname, User Name, and Remote Key are correct.";
$lang['Enverido.!error.account_limit_valid'] = "Account Limit must be left blank (for unlimited accounts) or set to some integer value.";
$lang['Enverido.!error.name_servers_valid'] = "One or more of the name servers entered are invalid.";
$lang['Enverido.!error.name_servers_count'] = "You must define at least 2 name servers.";
$lang['Enverido.!error.meta[type].valid'] = "Account type must be either standard or reseller.";
$lang['Enverido.!error.meta[package].empty'] = "A Enverido Package is required.";
$lang['Enverido.!error.api.internal'] = "An internal error occurred, or the server did not respond to the request.";
$lang['Enverido.!error.module_row.missing'] = "An internal error occurred. The module row is unavailable.";

$lang['Enverido.!error.Enverido_domain.format'] = "Please enter a valid domain name, e.g. domain.com.";
$lang['Enverido.!error.Enverido_domain.test'] = "Domain name can not start with 'test'.";
$lang['Enverido.!error.Enverido_username.format'] = "The username may contain only letters and numbers and may not start with a number.";
$lang['Enverido.!error.Enverido_username.test'] = "The username may not begin with 'test'.";
$lang['Enverido.!error.Enverido_username.length'] = "The username must be between 1 and 16 characters in length.";
$lang['Enverido.!error.Enverido_password.valid'] = "Password must be at least 8 characters in length.";
$lang['Enverido.!error.Enverido_password.matches'] = "Password and Confirm Password do not match.";
?>