

    @csrf
    @if(isset($blocks['create']['fields']))
        @foreach($blocks['create']['fields'] as $field)
           
            <hr />
           <div class="form-group mb-4">
                <label>{{$field->label}}</label>
                @if($field->fieldTypes()->first()->name == "text")
                    <input type="{{$field->fieldTypes()->first()->name}}"
                            class="{{$field->class}} {{isset($field->invalid) ? "is-invalid":null}}"
                            name="{{$field->name}}"
                            placeholder="{{$field->placeholder}}"
                            value="{{$field->value}}"/>
                    <span class="invalid-feedback d-block p-0 m-0" role="alert">
                        <p class="text-danger p-0 m-0">{{ $field->error }}</p>
                    </span>
                    <small>{{$field->text}}</small>
                @endif

                 @if($field->fieldTypes()->first()->name == "textarea")
                    <textarea type="{{$field->fieldTypes()->first()->name}}"
                            class="{{$field->class}} {{isset($field->invalid) ? "is-invalid":null}}"
                            name="{{$field->name}}"
                            placeholder="{{$field->placeholder}}">{{$field->value}}</textarea>
                    <span class="invalid-feedback d-block p-0 m-0" role="alert">
                        <p class="text-danger p-0 m-0">{{ $field->error }}</p>
                    </span>
                    <small>{{$field->text}}</small>
                @endif

                
                 @if($field->fieldTypes()->first()->name == "checkbox")
                   <input type="{{$field->fieldTypes()->first()->name}}"
                            class="{{$field->class}} {{isset($field->invalid) ? "is-invalid":null}}"
                            name="{{$field->name}}"
                            placeholder="{{$field->placeholder}}"
                            value="{{$field->value}}"/>
                    <span class="invalid-feedback d-block p-0 m-0" role="alert">
                        <p class="text-danger p-0 m-0">{{ $field->error }}</p>
                    </span>
                    <small>{{$field->text}}</small>
                @endif

                  @if($field->fieldTypes()->first()->name == "radio")
                   <input type="{{$field->fieldTypes()->first()->name}}"
                            class="{{$field->class}} {{isset($field->invalid) ? "is-invalid":null}}"
                            name="{{$field->name}}"
                            placeholder="{{$field->placeholder}}"
                            value="{{$field->value}}"/>
                    <span class="invalid-feedback d-block p-0 m-0" role="alert">
                        <p class="text-danger p-0 m-0">{{ $field->error }}</p>
                    </span>
                    <small>{{$field->text}}</small>
                @endif
            </div>
            
        @endforeach
    @endif

