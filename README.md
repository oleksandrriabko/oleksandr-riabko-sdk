###
LOTR SDK

to install run 
composer require lotr/sdk

to use just inject LotrSdk class to client class:
```
class ClientClass {
    private LotrSdk $lotrSdk;

    public function __construct(LotrSdk $lotrSdk)
    {
        $this->lotrSdk = $lotrSdk;
    }

    public function queryBooks(): BookCollection
    {
        return $this->lotrSdk->getBookRepository()->findAll();
    }

    public function queryBooksWithParams(): BookCollection
    {
        $queryParams = (new QueryParamsBuilder())->andWhere('_id', '5cf5805fb53e011a64671582,'5cf58077b53e011a64671583')
                ->orderBy('name', 'desc')
                ->page(1)
                ->offset(1)
                ->limit(3)
                ->toArray();

        return $this->lotrSdk->getBookRepository($queryParams)->findAll
    }
}
```
Probably you will have to configure DI accordingly to your client app