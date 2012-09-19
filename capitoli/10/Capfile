load 'deploy' if respond_to?(:namespace) # cap2 differentiator
Dir['vendor/plugins/*/recipes/*.rb'].each { |plugin| load(plugin) }

set :application, 'foo'
set :use_sudo, false
set :deploy_to, "/tmp/deploy"
set :repository, "/Users/kea/Documents/libro/hello_world/hello_world"
set :deploy_via, :copy
set :scm, :none

set :server_name, "localhost" 
role :app, server_name
role :web, server_name
role :db, server_name, :primary => true
namespace :deploy do
  task :restart do
  end
end

