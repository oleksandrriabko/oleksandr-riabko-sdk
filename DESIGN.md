###
Design is quite simple.

There is a:
Entity
Collection
Factory
Repository
that are implemented for each resource.

And gathering class LotrSdk

When you inject LotrStd class to your client class then you'll have access
to all repositories.
Each repository uses ApiClient to communicate with API, Factory to construct
objects from response and Collections to wrap them in case there are multiple of them.

So, when you call any method of repository you receive an Entity or a Collection then
All transformation and calls are hidden in Repository, ApiClient and Factory